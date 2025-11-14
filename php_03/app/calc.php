<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

//załaduj Smarty
require_once _ROOT_PATH.'/smarty-5.5.1/libs/Smarty.class.php';

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów


function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$form['opro'] = isset($_REQUEST['opro']) ? $_REQUEST['opro'] : null;	
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function validate(&$form,&$messages,&$hide_intro){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($form['kwota']) && isset($form['lata']) && isset($form['opro']) )) return false;	

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['kwota'] == "") $messages [] = 'Nie podano kwoty';

	//nie ma sensu walidować dalej gdy brak parametrów
	if ( count($messages)==0 ) {
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric($form['kwota'])) $messages [] = 'Podana kwota nie jest liczbą całkowitą';
		if (is_numeric($form['kwota']) && $form['kwota'] <= 1) $messages [] = 'Podana kwota nie jest większą od 1';
	}

	if (count($messages)>0) return false;
	else return true;
}

// 3. wykonaj zadanie jeśli wszystko w porządku
function process(&$form,&$messages,&$result){
	global $role;

	//konwersja parametrów na int oraz float
	$form['kwota'] = floatval($form['kwota']);
	$form['opro'] = intval($form['opro']);
	$form['lata'] = intval($form['lata']);

	// Wykonanie operacji
	if ($form['opro'] == 2 or $form['opro'] == 4){
		if ($role == 'admin'){
			$result = round(($form['kwota'] * (1 + $form['opro']/100)) / ($form['lata'] * 12), 2);
		}
		else{
			$messages [] = 'Tylko administrator może wybrać oprocentowanie mniejsze od 8%!';
		}
	} else {
		$result = round(($form['kwota'] * (1 + $form['opro']/100)) / ($form['lata'] * 12), 2);
	}

}

//inicjacja zmiennych
$hide_intro = false;
$form = null;
$messages = array();
$result = null;
$hide_intro = false;

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($form);
if ( validate($form,$messages,$hide_intro) ){
	process($form,$messages,$result);
	 $hide_intro = true;
}

// 4. Przygotowanie danych dla szablonu
use Smarty\Smarty;
$smarty = new Smarty();

$smarty->setTemplateDir(_ROOT_PATH .'/app/smarty/template');
$smarty->setConfigDir(_ROOT_PATH .'/app/smarty/config');
$smarty->setCompileDir(_ROOT_PATH .'/app/smarty/compile');
$smarty->setCacheDir(_ROOT_PATH .'/app/smarty/cache');

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','php_03');
$smarty->assign('page_heading','Kalkulator pożyczki');
$smarty->assign('show_topbar', true);

$smarty->assign('hide_intro', $hide_intro);

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/smarty/template/calc.tpl');
