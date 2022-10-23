<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre = strip_tags(stripslashes($_POST["nombre"]));
$actividad_programada = strip_tags(stripslashes($_POST["actividad_programada"]));
$lugar = strip_tags(stripslashes($_POST["lugar"]));


//$db->debug=true;
if ($nombre or $actividad_programada or $lugar){
    $sql3 = $db->Prepare("SELECT *
                            FROM calendario_actividades ca, equipo_basquet eb
                            WHERE ca.id_equipo_basquet= eb.id_equipo_basquet
                            AND eb.nombre LIKE ?
                            AND ca.actividad_programada LIKE ?
                            AND ca.lugar LIKE ?
                            ");
    $rs3 = $db->GetAll($sql3, array($nombre."%", $actividad_programada."%",$lugar."%"));
    if ($rs3){
        echo "<center>
            <table class='listado'>
             <tr>
              <th>NOMBRE</th><th>ACTIVIDAD PROGRAMADA</th><th>LUGAR</th>
             </tr>";
            foreach ($rs3 as $k => $fila) {
            $str = $fila["nombre"];
            $str1 = $fila["actividad_programada"];
            $str2 = $fila["lugar"];
            echo"<tr>
                    <td align='center'>".resaltar($nombre, $str)."</td>
                    <td>".resaltar($actividad_programada, $str1)."</td>
                    <td>".resaltar($lugar, $str2)."</td>
                    
                    </tr>";
            }
            echo"</table>
            </center>";
        }else {
            echo"<center><b> EL EQUIPO NO EXISTE !!</b></center><br>";

    }
}
?>