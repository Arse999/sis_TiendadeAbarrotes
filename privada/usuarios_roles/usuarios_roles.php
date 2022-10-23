<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					FROM roles ro
					INNER JOIN usuarios_roles ur ON ur.id_rol = ro.id_rol
					INNER JOIN usuarios u ON ur.id_usuario = u.id_usuario
					AND ur.estado <> '0'
					AND ro.estado <> '0'
					AND u.estado <> '0'
					ORDER BY ur.id_usuario_rol DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("usuarios_roles", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("usuarios_roles.tpl");
?>