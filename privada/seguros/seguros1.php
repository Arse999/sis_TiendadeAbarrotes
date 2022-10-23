<?php
 session_start(); 
 require_once ("../../smarty/libs/Smarty.class.php"); 
 require_once ("../../conexion.php" ); 

 $id_seguro = $_REQUEST["id_seguro"];

 $smarty = new Smarty ; 

 //$db->debug = true; 

 $sql = $db->Prepare("SELECT *
                         FROM seguros s, clientes2 c
                         WHERE c.id_cliente = ?
                         AND c.id_cliente = s.id_cliente
                         ORDER BY (c.id_cliente);
					");


$rs = $db->GetAll($sql,array($id_seguro)); 


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

     $smarty->assign("seguros" ,$rs); 
     $smarty->assign("fec_creacion", $fec_creacion);
     $smarty->assign("direc_css", $direc_css); 
     $smarty->display("seguros1.tpl");
?>