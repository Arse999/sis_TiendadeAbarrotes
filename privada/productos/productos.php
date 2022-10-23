<?php
session_start(); /*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty =new Smarty;

//$db->debug=true;

contarRegistros($db, "productos");

paginacion("productos.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
					FROM productos prod
					INNER JOIN categorias cat ON prod.id_categoria=cat.id_categoria
					AND prod.estado <> '0'
					AND cat.estado <> '0'
					AND prod.id_producto <> '0'
					ORDER BY prod.id_producto ASC /*para ordenar de madera descendente*/
					LIMIT ? OFFSET ? /*para el tamaño de la lista que se va mostrar*/
					");

$smarty->assign("productos", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("productos.tpl");
?>
