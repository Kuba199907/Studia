<?php
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// //ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów

function getParams(&$kwota,&$lata,&$opro){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$opro = isset($_REQUEST['opro']) ? $_REQUEST['opro'] : null;	
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function validate(&$kwota,&$lata,&$opro,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($kwota) && isset($lata) && isset($opro))) {
			return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $kwota  == "") {
		$messages [] = 'Nie podano kwoty';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;

	//nie ma sensu walidować dalej gdy brak parametrów
	if (empty( $messages )) {
		
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $kwota )) {
			$messages [] = 'Podana kwota nie jest liczbą całkowitą';
		}
		if (is_numeric( $kwota ) &&  $kwota <= 1) {
			$messages [] = 'Podana kwota nie jest większą od 1';
		}
	}

	if (count ( $messages ) != 0) return false;
	else return true;
}

// 3. wykonaj zadanie jeśli wszystko w porządku
function process(&$kwota,&$lata,&$opro,&$messages,&$result){
	global $role;

		
	//konwersja parametrów na int oraz float
	$kwota = floatval($kwota);
	$lata = intval($lata);
	$opro = intval($opro);
	// Wykonanie operacji
	if ($opro == 2 or $opro == 4){
		if ($role == 'admin'){
			$result = round(($kwota * (1 + $opro/100)) / ($lata * 12), 2);
		}
		else{
			$messages [] = 'Tylko administrator może wybrać oprocentowanie mniejsze od 8%!';
		}
	} else {
		$result = round(($kwota * (1 + $opro/100)) / ($lata * 12), 2);
	}

}

$kwota = null;
$lata = null;
$opro = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota,$lata,$opro);
if ( validate($kwota,$lata,$opro,$messages) ) { // gdy brak błędów
	process($kwota,$lata,$opro,$messages,$result);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';