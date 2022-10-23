<?php
session_start(); /*inicio de sesion*/
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty =new Smarty;

//$db->debug=true;

contarRegistros($db, "stock");

paginacion("stock.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
					FROM stock st
					INNER JOIN productos pr ON st.id_stock = pr.id_producto 
					AND st.estado <> '0'
					AND pr.estado <> '0'
					AND st.id_stock <> '0'
					ORDER BY st.id_stock ASC /*para ordenar de madera descendente*/
					LIMIT ? OFFSET ? /*para el tamaño de la lista que se va mostrar*/
					");

$smarty->assign("stock", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("stock.tpl");
?>