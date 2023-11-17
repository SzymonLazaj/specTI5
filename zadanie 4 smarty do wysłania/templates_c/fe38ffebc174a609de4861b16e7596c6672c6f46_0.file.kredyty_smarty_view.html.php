<?php
/* Smarty version 4.3.2, created on 2023-11-17 08:32:05
  from 'C:\xampp\htdocs\Zadanie4 smarty\app\kredyty_smarty_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_655716f5ce1718_94479177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe38ffebc174a609de4861b16e7596c6672c6f46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie4 smarty\\app\\kredyty_smarty_view.html',
      1 => 1700056972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655716f5ce1718_94479177 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/kredyty_smarty.php" method="post">
	<label for="id_kwota">Kwota: </label>
	<input id="id_kwota" type="number" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['kwota']->value;?>
"/><br />
	<label for="id_mies">Liczba miesięcy: </label>
	<input id="id_mies" type="number" name="mies" value="<?php echo $_smarty_tpl->tpl_vars['mies']->value;?>
"><br />
	<label for="id_opr">Oprocentowanie: </label>
	<input id="id_opr" type="number" name="opr" value="<?php echo $_smarty_tpl->tpl_vars['opr']->value;?>
" /><br />
	<input type="submit" value="Oblicz" />
</form>


<?php echo $_smarty_tpl->tpl_vars['messages']->value;?>



<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<p><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</>
</div>
<?php }
}
