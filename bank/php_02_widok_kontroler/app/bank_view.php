<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>Bank</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/bank.php" method="post">
	Kwota: <input id="kwota" type="number" name="kwota" value="<?php isset($kwota)?print($kwota):"" ?>"/><br/>
	Liczba rat: <input type = "number" id = "rata" name = "rata" value = "<?php isset($rata)?print($rata):"" ?>"/><br/>
	Oprocentowanie(%)<input type = "number" id = "op" name="op" value="<?php isset($op)?print($op):"" ?>"/><br/>
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
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

<?php if (isset($wynik3)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$wynik3; ?>
</div>
<?php } ?>

</body>
</html>