<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					FROM clientes2
					");
$rs = $db->GetAll($sql);

$smarty->assign("clientes2", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("seguros.tpl");
?>