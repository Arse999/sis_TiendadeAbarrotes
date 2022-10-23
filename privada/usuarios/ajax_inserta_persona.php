<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$ap1 = $_POST["ap1"];
$am1 = $_POST["am1"];
$nombres1 = $_POST["nombre1"];
$ci1 = $_POST["Ci1"];
$direccion1 = $_POST["direccion1"];
$telef1 = $_POST["telefono1"];
$genero1 = $_POST["genero1"];

//var_dump( $_POST);
//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_tienda"] = 1;
$reg["ap"] = $ap1;
$reg["am"] = $am1;
$reg["nombre"] = $nombre1;
$reg["Ci"] = $Ci1;
$reg["direccion"] = $direccion1;
$reg["telefono"] = $telefono1;
$reg["genero"] = $genero1;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("personas", $reg, "INSERT");
?>