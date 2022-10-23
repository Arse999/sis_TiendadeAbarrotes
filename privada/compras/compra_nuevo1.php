<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_proovedor = $_POST["id_proovedor"];
$fecha_compra = $_POST["fecha_compra"];
$monto_total_comp = $_POST["monto_total_comp"];

//$db->debug=true;

$smarty = new Smarty;

$reg = array();

$reg["id_proovedor"] = $id_proovedor;
$reg["fecha_compra"] = $fecha_compra;
$reg["monto_total_comp"] = $monto_total_comp;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("compras", $reg, "INSERT");
if($rs1){
	header("Location: compras.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("compra_nuevo1.tpl");
}
?>