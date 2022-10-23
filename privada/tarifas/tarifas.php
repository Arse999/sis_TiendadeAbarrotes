<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					FROM empresa
					");
$rs = $db->GetAll($sql);

$sql2 = $db->Prepare("SELECT *
					FROM tarif_rural tr
					INNER JOIN empresa emp ON emp.id_empresa = tr.id_empresa
					ORDER BY tr.id_tar_rur DESC
					");

$rs2 = $db->GetAll($sql2);

$smarty->assign("empresa", $rs);
$smarty->assign("tarif_rural", $rs2);
$smarty->assign("direc_css", $direc_css);
$smarty->display("tarifas.tpl");
?>