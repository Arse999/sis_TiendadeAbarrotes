<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_usuario = $_REQUEST["id_usuario"];
$id_persona = $_REQUEST["id_persona"];

$smarty=new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					FROM usuarios
					WHERE id_usuario =?
					");

$rs = $db->GetAll($sql, array($id_usuario));

$sql1 = $db->Prepare("SELECT *
					FROM personas
					WHERE id_persona = ?
					AND estado <> '0'
				");
$rs1 = $db->GetAll($sql1, array($id_persona));


$sql2 = $db->Prepare("SELECT *
					FROM personas
					WHERE id_persona <> ?
					AND estado <> '0'
				");
$rs2 = $db->GetAll($sql2, array($id_persona));

$smarty->assign("usuarios", $rs);
$smarty->assign("persona", $rs1);
$smarty->assign("personas", $rs2);

$smarty->assign("direc_css", $direc_css);
$smarty->display("usuario_modificar.tpl");
?>