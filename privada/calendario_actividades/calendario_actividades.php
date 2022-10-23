<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					FROM equipo_basquet
					");
$rs = $db->GetAll($sql);

$sql2 = $db->Prepare("SELECT *
					FROM calendario_actividades ca
					INNER JOIN equipo_basquet eb ON eb.id_equipo_basquet = ca.id_equipo_basquet
					ORDER BY ca.id_calendario_actividad DESC
					");

$rs2 = $db->GetAll($sql2);

$smarty->assign("equipo_basquet", $rs);
$smarty->assign("calendario_actividades", $rs2);
$smarty->assign("direc_css", $direc_css);
$smarty->display("calendario_actividades.tpl");
?>