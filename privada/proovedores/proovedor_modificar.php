<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$__id_proovedor = $_REQUEST["id_proovedor"];

$smarty =new Smarty;

$sql = $db->Prepare("SELECT *
					FROM proovedores
					WHERE id_proovedor = ?
					");
$rs = $db->GetAll($sql, array($__id_proovedor));
$smarty->assign("proovedores",$rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("proovedor_modificar.tpl");
?>