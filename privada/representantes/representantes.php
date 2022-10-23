<?php
session_start(); /*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty =new Smarty;

//$db->debug=true;

contarRegistros($db, "representantes");

paginacion("representantes.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
					FROM representantes rep
					INNER JOIN proovedores proo ON rep.id_proovedor=proo.id_proovedor
					AND rep.estado <> '0'
					AND proo.estado <> '0'
					AND rep.id_representante <> '0'
					ORDER BY rep.id_representante ASC /*para ordenar de madera descendente*/
					LIMIT ? OFFSET ? /*para el tamaño de la lista que se va mostrar*/
					");

$smarty->assign("representantes", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("representantes.tpl");
?>
