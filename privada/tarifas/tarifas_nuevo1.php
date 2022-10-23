<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_empresa = $_POST["id_empresa"];
$__lugar = $_POST["lugar"];
$__tarifa_carrera = $_POST["tarifa_carrera"];

//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_empresa"] = $__id_empresa;
$reg["lugar"] = $__lugar;
$reg["tarifa_carrera"] = $__tarifa_carrera;
$rs1 = $db->AutoExecute("tarif_rural", $reg, "INSERT");
if($rs1){
	header("Location: tarifas.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("tarifas_nuevo1.tpl");
}
?>