<?php
require_once dirname(__FILE__).'/../config.php' ;
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParameters(&$kwota, &$mies, &$opr) {
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$mies = isset($_REQUEST['mies']) ? $_REQUEST['mies'] : null;
	$opr = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;	
}

function validate(&$kwota, &$mies, &$opr, &$messages) {
	if ( ! (isset($kwota) && isset($mies) && isset($opr))) {
		return false;
	}
	$messages = '';
	if ( $kwota == '') {
		$messages += 'Nie podano kwoty';
	}
	if ( $mies == '') {
		$messages += 'Nie podano liczby miesięcy';
	}
	if ( $opr == '') {
		$messages += 'Nie podano oprocentowania' ;
	}
	
	if ($messages != '') return false;
	
	if (! is_numeric( $kwota )) {
		$messages += 'Kwota kredytu nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $mies )) {
		$messages += 'Liczba miesięcy nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $opr)) {
		$messages += 'Oprocentowanie nie jest liczbą';
	}
	
	if ($messages != '') return false;
	else return true;
}

function rata(&$kwota,&$mies,&$opr,&$messages,&$result) { 
	$kwota = intval($kwota) ;
	$mies = intval($mies) ;
	

	$rataBopr = $kwota / $mies ;
	$result = $rataBopr + ($opr / 100)* $rataBopr ;

}

$kwota = null;
$mies = null;
$opr = null;
$result = null;
$messages = null;

getParameters($kwota,$mies,$opr);
if ( validate($kwota,$mies,$opr,$messages) ) { // gdy brak błędów
	rata($kwota,$mies,$opr,$messages,$result);
}
$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);

$smarty->assign('kwota',$kwota);
$smarty->assign('mies',$mies);
$smarty->assign('opr',$opr);
$smarty->assign('messages',$messages);
$smarty->assign('result',$result);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/kredyty_smarty_view.html');

?>