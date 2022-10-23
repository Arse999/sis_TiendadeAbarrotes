<?php
session_start(); /*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty =new Smarty;

//$db->debug=true;

contarRegistros($db, "ventas");

paginacion("ventas.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
					FROM ventas ve
					INNER JOIN clientes cli ON ve.id_cliente = cli.id_cliente 
					AND ve.estado <> '0'
					AND cli.estado <> '0'
					AND ve.id_venta <> '0'
					ORDER BY ve.id_venta DESC /*para ordenar de madera descendente*/
					LIMIT ? OFFSET ? /*para el tamaño de la lista que se va mostrar*/
					");

$smarty->assign("ventas", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("ventas.tpl");
?>
