<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_proovedor = $_REQUEST["id_proovedor"];

$__nombre_empresa = $_POST["nombre_empresa"];
$__nit = $_POST["nit"];
$__celular = $_POST["celular"];
$__direccion = $_POST["direccion"];

//$db->debug=true;
$smarty = new Smarty;

$reg =array();
$reg["nombre_empresa"] = $__nombre_empresa;
$reg["nit"] = $__nit;
$reg["celular"] = $__celular;
$reg["direccion"] = $__direccion;
$reg["usuario"] =$_SESSION["sesion_id_usuario"];
$rs1 =$db->AutoExecute("proovedores", $reg, "UPDATE", "id_proovedor='".$__id_proovedor."'");

if($rs1){
	header("Location: proovedores.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->assign("id_proovedor", $__id_proovedor);
	$smarty->display("proovedor_modificar1.tpl");
}
?>