<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$nombre1 = $_POST["nombre1"];
$direccion1 = $_POST["direccion1"];
$telefono11 = $_POST["telefono11"];
$telefono21 = $_POST["telefono21"];

$smarty = new Smarty;

$reg = array();
$reg["nombre"] = $nombre1;
$reg["direccion"] = $direccion1;
$reg["telefono1"] = $telefono11;
$reg["telefono2"] = $telefono21;
$rs1 = $db->AutoExcecute("empresa",$reg,"INSERT");
?>