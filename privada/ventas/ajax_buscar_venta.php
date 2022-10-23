<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$cliente = strip_tags(stripslashes($_POST["cliente"]));
$fecha = strip_tags(stripslashes($_POST["fecha"]));
$monto_total = strip_tags(stripslashes($_POST["monto_total"]));

//$db->debug=true;
if ($cliente or $fecha or $monto_total){
    $sql3 = $db->Prepare("SELECT *
                            FROM ventas ve
                            INNER JOIN clientes cli ON ve.id_cliente=cli.id_cliente
                            WHERE cli.nombre LIKE ?
                            AND cli.apellido LIKE ?
                            AND ve.fecha_venta LIKE ?
                            AND ve.monto_total LIKE ?
                            AND ve.estado <> '0'
                            AND cli.estado <> '0'  /*revisar los identificativos */
                            ");
    $rs3 = $db->GetAll($sql3, array($cliente."%", $fecha."%", $monto_total."%"));
    if ($rs3){
        echo "<center>
            <table class='listado'>
             <tr>
              <th>CLIENTES</th><th>FECHA</th><th>MONTO TOTAL</th><th><img src='../../imagenes/modificar.jpg'></th><th><img src='../../imagenes/borrar.jpg'></th>
             </tr>";
            foreach ($rs3 as $k => $fila) {
            $str = $fila["nombre"],["apellido"];
            $str1 = $fila["fecha_venta"];
            $str2 = $fila["monto_total"];
            echo"<tr>
                    <td align='center'>".resaltar($nombre, $str)."</td>
                    <td>".resaltar($apellido, $str1)."</td>
                    <td>".resaltar($fecha_venta, $str2)."</td>
                    <td>".resaltar($monto_total, $str3)."</td>
                    <td align='center'>
                    <form name='formModif".$fila["id_venta"]."'method='post' action='venta_modificar.php'>
                    <input type='hidden' name='id_venta' value='".$fila['id_venta']."'>
                    <a href='javascript:document.formModif".$fila['id_venta'].".submit();' title='Modificar venta Sistema'>
                    Modificar>>>
                    </a>
                    </form>
                    </td>
                    <td align='center'>
                    <form name='forElimi".$fila["id_venta"]."' method='post' action='venta_eliminar.php'>
                    <input type='hidden' name='id_venta' value='".$fila["id_venta"]."'>
                    <a href='javascript:document.forElimi".$fila['id_venta'].".submit();' title='Eliminar Venta Sistema' onclick='javascript:return(confirm(\"Desea realmente eliminar la Venta..?<\"))';
                    location.href='venta_eliminar.php''>
                    Eliminar>>
                    </a>
                    </form>
                    </td>
                    </tr>";
            }
            echo"</table>
            </center>";
        }else {
            echo"<center><b> LA VENTA NO EXISTE !!</b></center><br>";
    }
}
?>