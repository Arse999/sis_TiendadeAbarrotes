<?php
/* Smarty version 3.1.36, created on 2022-10-23 02:19:14
  from 'C:\wamp64\www\sistema\sis_TiendadeAbarrotes\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6354a4a2637b48_56380664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3b137d9fe14591158624918636d81d52377bf12' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema\\sis_TiendadeAbarrotes\\privada\\claves\\templates\\index.tpl',
      1 => 1650122613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6354a4a2637b48_56380664 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript">
		function refrescar() {
			var p = window.parent;
			p.location.href='../';
		}
	<?php echo '</script'; ?>
>
</head>
<body ONLOAD="self.setTimeout('refrescar()',5000);">
	<center>
		<h1><?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>
</h1>
		<h3 style="color:red;"><?php echo $_smarty_tpl->tpl_vars['nom_completo']->value;?>
</h3>
		<br>
		<h1><?php echo $_smarty_tpl->tpl_vars['mensage1']->value;?>
</h1>
	</center>
</body>
</html><?php }
}
