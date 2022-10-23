<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$nombre1 = $_POST["nombre1"];
$dpto1 = $_POST["dpto1"];

$reg = array();
$reg["id_tienda"] = 1;
$reg["nombre"] = $nombre1;
$reg["dpto"] = $dpto1;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExcecute("personas", $reg, "INSERT");

?>