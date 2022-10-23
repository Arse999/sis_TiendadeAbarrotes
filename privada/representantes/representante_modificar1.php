<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_proovedor = $_REQUEST["id_proovedor"];
$__id_representante = $_REQUEST["id_representante"];
$__nombre = $_POST["nombre"];
$__apellido = $_POST["apellido"];
$__celular = $_POST["celular"];

//$db->debug=true;
$smarty = new Smarty;

$reg = array();
$reg["id_representante"] = $__id_representante;
$reg["nombre"] = $__nombre;
$reg["apellido"] = $__apellido;
$reg["celular"] = $__celular;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("representantes",$reg, "UPDATE", "id_representante='".$__id_representante."'");

if ($rs1) {
	header("Location: representantes.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR: Los datos no se modificaron!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_representante", $__id_representante);
	$smarty->display("representante_modificar1.tpl");
}
?>