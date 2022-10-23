<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty =new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					FROM roles
					WHERE estado <>'0'
					AND id_rol > 0
					ORDER BY id_rol DESC/* DESCENDENTE*/
					");
$rs = $db->GetAll($sql);

$smarty->assign("roles", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("roles.tpl");
?>