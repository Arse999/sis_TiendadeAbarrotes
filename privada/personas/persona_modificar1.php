<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_persona = $_REQUEST["id_persona"];
$__Ci = $_POST["Ci"];

$__nombre = $_POST["nombre"];
$__ap = $_POST["ap"];
$__am = $_POST["am"];
$__direccion = $_POST["direccion"];
$__telefono = $_POST["telefono"];

//$db->debug=true;
$smarty = new Smarty;

$reg =array();
$reg["Ci"] = $__Ci;
$reg["nombre"] = $__nombre;
$reg["ap"] = $__ap;
$reg["am"] = $__am;
$reg["direccion"] = $__direccion;
$reg["telefono"] = $__telefono;
$reg["usuario"] =$_SESSION["sesion_id_usuario"];
$rs1 =$db->AutoExecute("personas", $reg, "UPDATE", "id_persona='".$__id_persona."'");

if($rs1){
	header("Location: personas.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->assign("id_persona", $__id_persona);
	$smarty->display("persona_modificar1.tpl");
}
?>