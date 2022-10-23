<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombres = strip_tags(stripslashes($_POST["nombres"]));
$descripcion = strip_tags(stripslashes($_POST["descripcion"]));
$monto = strip_tags(stripslashes($_POST["monto"]));

//$db->debug=true;
if ($nombres or $descripcion or $monto){
    $sql3 = $db->Prepare("SELECT *
                            FROM clientes2 c, seguros s
                            WHERE c.nombres LIKE ?
                            AND s.descripcion LIKE ?
                            AND s.monto LIKE ?
                            ");
    $rs3 = $db->GetAll($sql3, array($nombres."%", $descripcion."%", $monto."%"));
    if ($rs3){
        echo "<center>
            <table class='listado'>
             <tr>
              <th>Clientes</th><th>DESCRIPCION</th><th>MONTO</th><th>Seleccione</th>
             </tr>";
            foreach ($rs3 as $k => $fila) {
            $str = $fila["nombres"];
            $str1 = $fila["descripcion"];
            $str2 = $fila["monto"];
            echo"<tr>
                    <td align='center'>".resaltar($nombres, $str)."</td>
                    <td>".resaltar($descripcion, $str1)."</td>
                    <td>".resaltar($monto, $str2)."</td>
                    <td align='center'><input type='radio' name='option' value='' onclick='mostrar(".$fila["id_seguro"].")'>
                    </td>
                    </tr>";
            }

            echo"</table>
            </center>";
        }else {
            echo"<center><b> El Cliente no Existe !!</b></center><br>";
    }
}
?>