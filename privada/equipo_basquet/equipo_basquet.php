<?php
session_start(); /*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty =new Smarty;

//$db->debug=true;

contarRegistros($db, "equipo_basquet");

paginacion("equipo_basquet.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
					FROM  equipo_basquet
					WHERE nombre <>''
					AND id_equipo_basquet <> '0'
					ORDER BY id_equipo_basquet DESC /*para ordenar de madera descendente*/
					");

$smarty->assign("equipo_basquet", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("equipo_basquet.tpl");
?>
