<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					FROM opciones op
					INNER JOIN grupos gr ON op.id_grupo = gr.id_grupo
					AND op.estado <> '0'
					AND gr.estado <> '0'
					ORDER BY op.id_opcion ASC
					");
$rs = $db->GetAll($sql);

$smarty->assign("opciones", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("opciones.tpl");
?>