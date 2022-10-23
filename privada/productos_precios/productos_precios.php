<?php
session_start(); /*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty =new Smarty;

//$db->debug=true;

contarRegistros($db, "productos_precios");

paginacion("productos_precios.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
					FROM productos_precios prpr
					INNER JOIN productos pro ON prpr.id_producto=pro.id_producto
					AND prpr.estado <> '0'
					AND pro.estado <> '0'
					AND prpr.id_producto_precio <> '0'
					ORDER BY prpr.id_producto_precio ASC /*para ordenar de madera descendente*/
					LIMIT ? OFFSET ? /*para el tamaño de la lista que se va mostrar*/
					");

$smarty->assign("productos_precios", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("productos_precios.tpl");
?>
