<?php
require_once("adodb/adodb.inc.php"); //habre una libreria si no esta abierta

$direc_css = "../css/colores.css";

$conServidor = "localhost";
$conUsuario = "root";
$conClave = "";
$conBasededatos = "bdtienda";

$db = ADONewConnection("mysqli");
//$db -> debug = true; //para mostrar las consultas
$conex = $db->Connect($conServidor, $conUsuario, $conClave, $conBasededatos);
$db->Execute("SET NAMES 'utf8'");
?>