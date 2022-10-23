<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_vendedor = $_REQUEST["id_vendedor"];

$__nombre = $_POST["nombre"];
$__apellido = $_POST["apellido"];
$__celular = $_POST["celular"];
$__fecha_ingreso = $_POST["fecha_ingreso"];
$__fecha_salida = $_POST["fecha_salida"];
//$db->debug=true;
$smarty = new Smarty;

$reg =array();
$reg["nombre"] = $__nombre;
$reg["apellido"] = $__apellido;
$reg["celular"] = $__celular;
$reg["fecha_ingreso"] = $__fecha_ingreso;
$reg["fecha_salida"] = $__fecha_salida;
$reg["usuario"] =$_SESSION["sesion_id_usuario"];
$rs1 =$db->AutoExecute("vendedores", $reg, "UPDATE", "id_vendedor='".$__id_vendedor."'");

if($rs1){
	header("Location: vendedores.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->assign("id_vendedor", $__id_vendedor);
	$smarty->display("vendedor_modificar1.tpl");
}
?>