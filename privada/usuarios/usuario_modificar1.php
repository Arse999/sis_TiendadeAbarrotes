<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

var_dump($_POST);

$id_persona = $_REQUEST["id_persona"];
$id_usuario = $_REQUEST["id_usuario"];
$usuario1 = $_POST["usuario1"];
$clave = $_POST["clave"];

$hash=password_hash($clave, PASSWORD_DEFAULT);

//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_persona"] = $id_persona;
$reg["usuario1"] = $usuario1;
$reg["clave"] = $hash;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("usuarios",$reg, "UPDATE", "id_usuario='".$id_usuario."'");

if ($rs1) {
	header("Location: usuarios.php");
	exit();
}else{
	$smarty->assign("mensaje","ERROR: Los datos no se modificaron!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_usuario", $id_usuario);
	$smarty->display("usuario_modificar1.tpl");
}
?>