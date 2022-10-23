<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

   $id_vendedor = $_REQUEST["id_vendedor"];

$smarty = new Smarty;

//$db->debug-true;

/*LAS CONSULTAS SE TIENEN QUE HACER CON TODAS LAS TABLAS EN LAS QUE ID PERSONA ESTA COMO HERE*/
 /*$sql = $db->Prepare("SELECT *
                     FROM usuarios
                     WHERE id_persona = ?
                     AND estado<>'0'
                     ");
$rs = $db->GetAll($sql,array($id_persona));*/

if(!$rs){
    $reg = array();                            
    $reg ["estado"] = '0';
   $reg["usuario"] = $_SESSION["sesion_id_usuario"];
    $rs1 = $db->AutoExecute("vendedores",$reg,"UPDATE","id_vendedor='".$id_vendedor."'");
    header("Location:vendedores.php");
    exit();

}else{
    $smarty->assign("mensaje","ERROR:Los datos no se eliminaron !!!!!!!!!!");
    $smarty->assign("direc_css", $direc_css);
    $smarty->display("vendedor_eliminar.tpl");
    }
    ?>