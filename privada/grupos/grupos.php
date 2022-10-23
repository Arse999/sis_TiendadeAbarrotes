<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty =new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					FROM grupos
					WHERE estado <>'0'
					AND id_grupo > 0
					ORDER BY id_grupo ASC /*ASCENDENTE*/
					");
$rs = $db->GetAll($sql);

$smarty->assign("grupos", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("grupos.tpl");
?>