<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_cliente = $_REQUEST["id_cliente"];
$id_venta = $_REQUEST["id_venta"];
$fecha_venta = $_POST["fecha_venta"];
$monto_total = $_POST["monto_total"];

//$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["id_cliente"] = $id_cliente;
$reg["fecha_venta"] = $fecha_venta;
$reg["monto_total"] = $monto_total;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("ventas",$reg, "UPDATE", "id_venta='".$id_venta."'");

if ($rs1) {
	header("Location: ventas.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR: Los datos no se modificaron!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_venta", $id_venta);
	$smarty->display("venta_modificar1.tpl");
}
?>