<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
    private $hide_intro;

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
        $this->hide_intro = false;
	}

    public function getParams(){
        $this->form->kwota = getFromRequest('kwota');
        $this->form->lata = getFromRequest('lata');
        $this->form->opro = getFromRequest('opro');
    }

    // 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
    function validate(){
        // sprawdzenie, czy parametry zostały przekazane
        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->opro))) return false;	

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->kwota == "") 
            getMessages()->addError('Nie podano kwoty');

        if ($this->form->lata == "") 
            getMessages()->addError('Nie podano lat');

        if ($this->form->opro == "") 
            getMessages()->addError('Nie podano oprocentowania');


        // jeśli już są błędy → zakończ
        if (getMessages()->isError()) return false;


        // Walidacja kwoty 
        if (!is_numeric($this->form->kwota))
           getMessages()->addError('Kwota musi być liczbą');

        if (is_numeric($this->form->kwota) && $this->form->kwota <= 1)
            getMessages()->addError('Kwota musi być większa od 1');

        // Walidacja lat 
        if (!is_numeric($this->form->lata))
           getMessages()->addError('Liczba lat musi być liczbą');

        if (is_numeric($this->form->lata) && $this->form->lata <= 0)
            getMessages()->addError('Liczba lat musi być większa od 0');

        $allowed_lata = [2,5,10];
        if (is_numeric($this->form->lata) && !in_array($this->form->lata, $allowed_lata))
            getMessages()->addError('Niepoprawna wartość lat');
        
        // Walidacja oprocentowania
        if (!is_numeric($this->form->opro))
            getMessages()->addError('Oprocentowanie musi być liczbą');

        if (is_numeric($this->form->opro) && $this->form->opro <= 0)
            getMessages()->addError('Oprocentowanie musi być większe od 0');

        $allowed_opro = [2,4,8,10];
        if (is_numeric($this->form->opro) && !in_array($this->form->opro, $allowed_opro))
            getMessages()->addError('Niepoprawna wartość oprocentowania');

        return ! getMessages()->isError();
    }

    // 3. wykonaj zadanie jeśli wszystko w porządku
    function process(){

        $this->getParams();

        if ($this->validate()) {

            $this->hide_intro = true;
            
            //konwersja parametrów na int oraz float
            $this->form->kwota = floatval($this->form->kwota);
            $this->form->opro = intval($this->form->opro);
            $this->form->lata = intval($this->form->lata);

            // Wykonanie operacji
            $this->result->result = round(($this->form->kwota * (1 + $this->form->opro/100)) / ($this->form->lata * 12), 2);

            $this->result->opro_name = $this->form->opro;
            $this->result->lata_name = $this->form->lata;
            
            getMessages()->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

	public function generateView(){
		//nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
		// - wszystko załatwia funkcja getSmarty()
		
		getSmarty()->assign('page_title','php_05');
		getSmarty()->assign('page_heading','Kalkulator pożyczki');
        getSmarty()->assign('hide_intro', $this->hide_intro);

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}
