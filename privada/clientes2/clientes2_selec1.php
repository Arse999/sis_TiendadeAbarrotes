<?php
 session_start(); 
 require_once ("../../smarty/libs/Smarty.class.php"); 
 require_once ("../../conexion.php" ); 

 $id_cliente = $_REQUEST["id_cliente"];

 $smarty = new Smarty ; 

 //$db->debug = true; 



 if ($id_cliente == "T"){
     $sql = $db->Prepare("SELECT * 
                    FROM clientes2
                    ");
    $rs = $db->GetAll($sql); 
 }else{
    $sql = $db->Prepare("SELECT * 
                    FROM clientes2
                    WHERE id_cliente = ?
					
                    ");

     $rs = $db->GetAll($sql,array($id_cliente)); 
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


 	 $smarty->assign("clientes2_selec1" ,$rs); 
 	 $smarty->assign("direc_css", $direc_css); 
 	 $smarty->display("clientes2_selec1.tpl");
?>