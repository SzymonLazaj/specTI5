<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/kredyty.php" method="post">
	<label for="id_kwota">Kwota: </label>
	<input id="id_kwota" type="number" name="kwota" value="<?php print isset ($kwota)? $kwota: ''; ?>" /><br />
	<label for="id_mies">Liczba miesięcy: </label>
	<input id="id_mies" type="number" name="mies" value="<?php print isset ($mies)? $mies: ''; ?>"><br />
	<label for="id_opr">Oprocentowanie: </label>
	<input id="id_opr" type="number" name="opr" value="<?php print isset ($opr)? $opr: ''; ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Kwota raty: '.$result; ?>
</div>
<?php } ?>
