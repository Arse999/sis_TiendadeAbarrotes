<?php
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM equipo_basquet 
					ORDER BY id_equipo_basquet DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("equipo_basquet", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("calendario_nuevo.tpl");
?>