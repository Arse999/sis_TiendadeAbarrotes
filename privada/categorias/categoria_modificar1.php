<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_categoria = $_REQUEST["id_categoria"];
$categoria = $_POST["categoria"];


//$db->debug=true;
$smarty = new Smarty;

$reg =array();
$reg["categoria"] = $categoria;
$reg["usuario"] =$_SESSION["sesion_id_usuario"];
$rs1 =$db->AutoExecute("categorias", $reg, "UPDATE", "id_categoria='".$id_categoria."'");

if($rs1){
	header("Location: categorias.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->assign("id_categoria", $id_categoria);
	$smarty->display("categoria_modificar1.tpl");
}
?>