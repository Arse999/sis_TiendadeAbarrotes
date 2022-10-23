<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_categoria = $_REQUEST["id_categoria"];

$smarty =new Smarty;

$sql = $db->Prepare("SELECT *
					FROM categorias
					WHERE id_categoria = ?
					");
$rs = $db->GetAll($sql, array($id_categoria));
$smarty->assign("categorias",$rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("categoria_modificar.tpl");
?>