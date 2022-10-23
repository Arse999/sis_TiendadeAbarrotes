<?php
session_start();//abrir la sesion
//require_once("../smarty/Smarty.class.php");
require_once("../smarty/libs/Smarty.class.php");
require_once("../conexion.php");

$smarty = new Smarty;

//$db- >debug = true;
if (isset($_SESSION["sesion_id_usuario"])) {
	$sesion = array("id_usuario" => $_SESSION["sesion_id_usuario"],
					"usuario" => $_SESSION["sesion_usuario"],
					"id_rol" => $_SESSION["sesion_id_rol"],
					"rol" => $_SESSION["sesion_rol"],
					);
	$login = "NO";
}else {
	$sesion = array("id_usuario" => "----",
					"usuario" => "----",
					"id_rol" => "----",
					"rol" => "---",
					);
	$login = "SI";
}
/*PARA VOLVER AUTOGESTIONABLE EL NOMBRE DE LA AGENCIA Y EL LOGO*/
	$sql1 = $db->Prepare("SELECT *
						  FROM tienda
						  WHERE id_tienda = 1  /*A*/
						  AND estado <> '0' /*X*/
						  ");
	$rs1 = $db->GetAll($sql1);
	$Nombre_tienda = $rs1[0]["Nombre_tienda"];
	$logo = $rs1[0]["logo"];
	$smarty->assign("Nombre_tienda", $Nombre_tienda);
	$smarty->assign("logo", $logo);

$smarty->assign("sesion", $sesion);
$smarty->assign("login", $login);
$smarty->assign("direc_css", $direc_css);
$smarty->display("menu_sup.tpl");
?>