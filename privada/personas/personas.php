<?php
session_start(); /*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty =new Smarty;

//$db->debug=true;

contarRegistros($db, "personas");

paginacion("personas.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
					FROM personas 
					WHERE estado <> '0'
					AND id_persona > 1
					ORDER BY id_persona DESC /*para ordenar de madera descendente*/
					LIMIT ? OFFSET ? /*para el tamaño de la lista que se va mostrar*/
					");

$smarty->assign("personas", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("personas.tpl");
?>
