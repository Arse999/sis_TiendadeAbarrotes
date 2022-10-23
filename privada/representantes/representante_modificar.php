<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_representante = $_REQUEST["id_representante"];
$id_proovedor = $_REQUEST["id_proovedor"];

$smarty = new Smarty;

//$db-> debug =true;

$sql = $db->Prepare("SELECT *
					FROM representantes
					WHERE id_representante = ?
					");
$rs = $db->GetAll($sql, array($id_representante));

$sql2 = $db->Prepare("SELECT *
					FROM proovedores
					WHERE id_proovedor <> ?
					AND estado <>'0'
					");
$rs2 = $db->GetAll($sql2, array($id_proovedor));

$sql3 =$db->Prepare("SELECT *
					FROM proovedores
					WHERE id_proovedor <> ?
					AND estado <>'0'
					");
$rs3 = $db->GetAll($sql3, array($id_proovedor));

$smarty->assign("representantes", $rs);
$smarty->assign("proovedores", $rs2);
$smarty->assign("proovedores", $rs3);

$smarty->assign("direc_css", $direc_css);
$smarty->display("representante_modificar.tpl");
?>