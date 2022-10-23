<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_stock = $_REQUEST["id_stock"];

$smarty = new Smarty;

//$db -> debug=true;

/*LAS CONSULTAS SE TIENEN QUE HACER CON TODAS LAS TABLAS EN LAS QUE ID USUARIO ESTA COMO HERENCIA*/

/*$sql = $db->Prepare ("SELECT *
                       FROM usuarios_roles
                       WHERE id_usuario = ?
                       AND estado <> '0'
                     ");
$rs = $db->GetAll($sql, array($id_stock));*/

if(!$rs){
   $reg = array();
   $reg["estado"] = '0';
    $reg["usuario"] = $_SESSION["sesion_id_usuario"];
    $rs1 = $db->AutoExecute("stock", $reg, "UPDATE", "id_stock='".$id_stock."'");
    header("Location: stock.php");
    exit();

    }else{
   $smarty->assign("mensaje","ERROR:Los datos no se eliminaron !!!!!!!!!!");
   $smarty->assign("direc_css", $direc_css);
   $smarty->display("stock_eliminar.tpl");
}
?>