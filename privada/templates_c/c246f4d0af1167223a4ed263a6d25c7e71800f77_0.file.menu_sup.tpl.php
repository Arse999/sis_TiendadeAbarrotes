<?php
/* Smarty version 3.1.36, created on 2022-10-23 02:19:06
  from 'C:\wamp64\www\sistema\sis_TiendadeAbarrotes\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6354a49a415766_19764526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c246f4d0af1167223a4ed263a6d25c7e71800f77' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema\\sis_TiendadeAbarrotes\\privada\\templates\\menu_sup.tpl',
      1 => 1659839263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6354a49a415766_19764526 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
</head>
<body>
    <div class="cabecera">
        <img src="tienda/logos/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"  width="10%" >
        <div class="titulo">
        TIENDA DE ABARROTES "<?php echo $_smarty_tpl->tpl_vars['Nombre_tienda']->value;?>
"
        </div>
        <div class="usuario">
        Usuario:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['usuario'];?>
</b>
        Rol:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['rol'];?>
</b>
        </div>
    </div> 
</body>
</html><?php }
}
