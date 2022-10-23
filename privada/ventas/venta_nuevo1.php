<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_cliente = $_POST["id_cliente"];
$fecha_venta = $_POST["fecha_venta"];
$monto_total = $_POST["monto_total"];

//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_cliente"] = $id_cliente;
$reg["fecha_venta"] = $fecha_venta;
$reg["monto_total"] = $monto_total;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("ventas", $reg, "INSERT");
if($rs1){
	header("Location: ventas.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("venta_nuevo1.tpl");
}
?>