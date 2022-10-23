<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$db->debug=true;

$smarty = new Smarty;

$smarty->assign("direc_css", $direc_css);
$smarty->display("categoria_nuevo.tpl");
?>