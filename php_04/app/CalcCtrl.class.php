<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

require_once $conf->root_path.'/lib/smarty-5.5.1/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include $conf->root_path.'/app/security/check.php';

class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

    public function getParams(){
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
        $this->form->opro = isset($_REQUEST['opro']) ? $_REQUEST['opro'] : null;	
    }

    // 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
    function validate(){
        // sprawdzenie, czy parametry zostały przekazane
        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->opro))) return false;	

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->kwota == "") 
            $this->msgs->addError('Nie podano kwoty');

        if ($this->form->lata == "") 
            $this->msgs->addError('Nie podano liczby lat');

        if ($this->form->opro == "") 
            $this->msgs->addError('Nie podano oprocentowania');


        // jeśli już są błędy → zakończ
        if ($this->msgs->isError()) return false;


        // Walidacja kwoty 
        if (!is_numeric($this->form->kwota))
            $this->msgs->addError('Kwota musi być liczbą');

        if (is_numeric($this->form->kwota) && $this->form->kwota <= 1)
            $this->msgs->addError('Kwota musi być większa od 1');

        // Walidacja lat 
        if (!is_numeric($this->form->lata))
            $this->msgs->addError('Liczba lat musi być liczbą');

        if (is_numeric($this->form->lata) && $this->form->lata <= 0)
            $this->msgs->addError('Liczba lat musi być większa od 0');

        $allowed_lata = [2,5,10];
        if (is_numeric($this->form->lata) && !in_array($this->form->lata, $allowed_lata))
            $this->msgs->addError('Niepoprawna wartość lat');
        
        // Walidacja oprocentowania
        if (!is_numeric($this->form->opro))
            $this->msgs->addError('Oprocentowanie musi być liczbą');

        if (is_numeric($this->form->opro) && $this->form->opro <= 0)
            $this->msgs->addError('Oprocentowanie musi być większe od 0');

        $allowed_opro = [2,4,8,10];
        if (is_numeric($this->form->opro) && !in_array($this->form->opro, $allowed_opro))
            $this->msgs->addError('Niepoprawna wartość oprocentowania');

        return ! $this->msgs->isError();
    }

    // 3. wykonaj zadanie jeśli wszystko w porządku
    function process(){
        global $role;

        $this->getParams();

        if ($this->validate()) {
            //konwersja parametrów na int oraz float
            $this->form->kwota = floatval($this->form->kwota);
            $this->form->opro = intval($this->form->opro);
            $this->form->lata = intval($this->form->lata);

            // Wykonanie operacji
            if ($this->form->opro == 2 or $this->form->opro == 4){
                if ($role == 'admin'){
                    $this->result->result = round(($this->form->kwota * (1 + $this->form->opro/100)) / ($this->form->lata * 12), 2);
                }
                else{
                    $this->msgs->addError('Tylko administrator może wybrać oprocentowanie mniejsze od 8%!');
                }
            } else {
                $this->result->result = round(($this->form->kwota * (1 + $this->form->opro/100)) / ($this->form->lata * 12), 2);
            }
            $this->result->opro_name = $this->form->opro;
            $this->result->lata_name = $this->form->lata;
            $this->msgs->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    public function generateView(){
		global $conf;
		
        $smarty = new Smarty\Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','php_04');
		$smarty->assign('page_heading','Kalkulator pożyczki');
		$smarty->assign('show_topbar', true);

		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.tpl');
	}
}
