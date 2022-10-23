<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

//$db->debug=true;

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM empresa em
					ORDER BY em.id_empresa DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("empresa", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("tarifas_nuevo.tpl");
?>