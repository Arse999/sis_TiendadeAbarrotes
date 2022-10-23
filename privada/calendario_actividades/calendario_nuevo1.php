<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_persona = $_POST["id_equipo_basquet"];

//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_equipo_basquet"] = $id_equipo_basquet;
$reg["nombre"] = $nombre;
$reg["dpto"] = $dpto;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("calendario_actividades", $reg, "INSERT");
if($rs1){
	header("Location: calendario_actividades.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("calendario_nuevo1.tpl");
}
?>