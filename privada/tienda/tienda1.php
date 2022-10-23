<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$id_tienda = $_REQUEST["id_tienda"];
$Nombre_tienda = $_POST["Nombre_tienda"];
$direccion = $_POST["direccion"];
$celular = $_POST["celular"];
$correo = $_POST["correo"];
$NIT = $_POST["NIT"];

$logo1 = $_POST["logo1"];
$nombre_log = $_FILES["logo"]['name'];

//$db->debug=true;

$smarty = new Smarty;
//para Guardar el logo
if((!empty($_FILES['logo'])) and is_uploaded_file($_FILES['logo']['tmp_name'])){
    copy($_FILES['logo']['tmp_name'],'logos/' .$nombre_log);
    $logo = $_FILES['logo']['name'];
}elseif ($logo1 ==""){
    $logo ='';
    $nombre_log = '';
}else
$nombre_log =$logo1;

$reg = array();
$reg["Nombre_tienda"]= $Nombre_tienda;
$reg["direccion"]= $direccion;
$reg["celular"]= $celular;
$reg["correo"]= $correo;
$reg["NIT"]= $NIT;
$reg["logo"]= $nombre_log;
$reg["usuario"]= $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("tienda", $reg, "UPDATE", "id_tienda='".$id_tienda."'");
if($rs1){

        $smarty->assign ("mensaje", "Los datos se modificaron ACTUALIZAR EL SISTEMA!!!!!!!!!!");
        $smarty->assign ("direc_css", $direc_css);
        $smarty->display ("tienda1.tpl");
    }else{
        $smarty->assign ("mensaje", "ERROR: Los datos no se modificaron ! ! ! !!!!!!!");
        $smarty->assign ("direc_css", $direc_css);
        $smarty->display ( "tienda1.tpl");
}
?>