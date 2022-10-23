<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombres = strip_tags(stripslashes($_POST["nombres"]));
$apellidos = strip_tags(stripslashes($_POST["apellidos"]));
$direccion = strip_tags(stripslashes($_POST["direccion"]));
$telefono = strip_tags(stripslashes($_POST["telefono"]));

//$db->debug=true;
if ($nombres or $apellidos or $direccion or $telefono){
    $sql3 = $db->Prepare("SELECT *
                            FROM clientes2
                            WHERE nombres LIKE ?
                            AND apellidos LIKE ?
                            AND direccion LIKE ?
                            AND telefono LIKE ?
                            ");
    $rs3 = $db->GetAll($sql3, array($nombres."%", $apellidos."%", $direccion."%", $telefono."%"));
    if ($rs3){
        echo "<center>
            <table class='listado'>
             <tr>
              <th>NOMBRE</th><th>APELLIDOS</th><th>DIRECCION</th><th>TELEFONO</th><th><img src='../../imagenes/modificar.jpg'></th><th><img src='../../imagenes/borrar.jpg'></th>
             </tr>";
            foreach ($rs3 as $k => $fila) {
            $str = $fila["nombres"];
            $str1 = $fila["apellidos"];
            $str2 = $fila["direccion"];
            $str3 = $fila["telefono"];
            echo"<tr>
                    <td align='center'>".resaltar($nombres, $str)."</td>
                    <td>".resaltar($apellidos, $str1)."</td>
                    <td>".resaltar($direccion, $str2)."</td>
                    <td>".resaltar($telefono, $str3)."</td>
                    <td align='center'>
                    <form name='formModif".$fila["id_cliente"]."'method='post' action='cliente2_modificar.php'>
                    <input type='hidden' name='id_cliente' value='".$fila['id_cliente']."'>
                    <a href='javascript:document.formModif".$fila['id_cliente'].".submit();' title='Modificar cliente2 Sistema'>
                    Modificar>>>
                    </a>
                    </form>
                    </td>
                    <td align='center'>
                    <form name='forElimi".$fila["id_cliente"]."' method='post' action='cliente2_eliminar.php'>
                    <input type='hidden' name='id_cliente' value='".$fila["id_cliente"]."'>
                    <a href='javascript:document.forElimi".$fila['id_cliente'].".submit();' title='Eliminar Cliente2 Sistema' onclick='javascript:return(confirm(\"Desea realmente eliminar al Cliente2..?<\"))';
                    location.href='cliente2_eliminar.php''>
                    Eliminar>>
                    </a>
                    </form>
                    </td>
                    </tr>";
            }
            echo"</table>
            </center>";
        }else {
            echo"<center><b> El Cliente2 NO EXISTE !!</b></center><br>";
    }
}
?>