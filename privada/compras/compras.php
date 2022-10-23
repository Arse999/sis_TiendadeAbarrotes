<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					FROM compras com
					INNER JOIN proovedores pro ON com.id_proovedor = pro.id_proovedor
					AND com.estado <> '0'
					AND pro.estado <> '0'
					AND pro.id_proovedor <> '0'
					ORDER BY com.id_compra DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("compras", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("compras.tpl");
?>