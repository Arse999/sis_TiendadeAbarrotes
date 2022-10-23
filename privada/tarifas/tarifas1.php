<?php
 session_start(); 
 require_once ("../../smarty/libs/Smarty.class.php"); 
 require_once ("../../conexion.php" ); 

 $nombre = $_REQUEST["nombre"];

 $smarty = new Smarty ; 

 //$db->debug = true; 
 if ($nombre == "RADIO MOVIL"ANDALUZ""){
     $sql = $db->Prepare("SELECT * 
                    FROM empresa
                    ");
    $rs = $db->GetAll($sql); 
 }else{
    $sql = $db->Prepare("SELECT * 
                    FROM empresa
                    ");

     $rs = $db->GetAll($sql,array($nombre)); 
}

     $sql1 = $db->Prepare("SELECT *
                        FROM tienda
                        WHERE id_tienda = 1
                        AND estado <> '0'
                        ");

     $rs1 = $db->GetAll($sql1);
     $Nombre_tienda = $rs1[0]["Nombre_tienda"];
     $logo = $rs1[0]["logo"];
     $smarty->assign("logo", $logo);

     $fec_creacion = date("Y-m-d H:i:s");

     $smarty->assign("tarifas1" ,$rs); 
     $smarty->assign("direc_css", $direc_css); 
     $smarty->display("tarifas1.tpl");
?>