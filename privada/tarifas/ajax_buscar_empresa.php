<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre = strip_tags(stripslashes($_POST["nombre"]));
$lugar = strip_tags(stripslashes($_POST["lugar"]));
$tarifa_carrera = strip_tags(stripslashes($_POST["tarifa_carrera"]));


//$db->debug=true;

if ($nombre or $lugar or $tarifa_carrera){
    $sql3 = $db->Prepare("SELECT  em.nombre, tr.lugar, tr.tarifa_carrera
                            FROM tarif_rural tr , empresa em
                            WHERE tr.id_empresa=em.id_empresa
                            AND em.nombre LIKE ?               
                            AND tr.lugar LIKE ?
                            AND tr.tarifa_carrera LIKE ?
                            ");
    $rs3 = $db->GetAll($sql3, array($nombre."%", $lugar."%", $tarifa_carrera."%"));
    if ($rs3){
        echo "<center>
            <table class='listado'>
             <tr>
              <th>NOMBRE</th><th>LUGAR</th><th>TARIFA CARRERA</th>
             </tr>";
            foreach ($rs3 as $k => $fila) {
            $str = $fila["nombre"];
            $str1 = $fila["lugar"];
            $str2 = $fila["tarifa_carrera"];
            echo"<tr>
                    <td align='center'>".resaltar($nombre, $str)."</td>
                    <td>".resaltar($lugar, $str1)."</td>
                    <td>".resaltar($tarifa_carrera, $str2)."</td>
    
                    <h3 name='opcion' value='' onclick='buscar_tarifas(".$fila["nombre"].")'></h3>
                    
                    </tr>";
            }
            echo"</table>
            </center>";
        }else {
            echo"<center><b> LA Empresa no Existe !!</b></center><br>";
            
            /*echo"<center>
            <table class='listado'>
            <tr>
            <td><b>Nombre</b></td>
            <td><input type='text' name='nombre1' size='10'></td>
            </tr>
            <tr>
            <td><b>Direccion</b></td>
            <td><input type='text' name='direccon1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
            </tr>
            <tr>
            <td><b>TELEFONO 1</b></td>
            <td><input type='text' name='telefono11' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
            </tr>
            <tr>
            <td><b>TELEFONO 2</b></td>
            <td><input type='text' name='telefono21' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
            </tr>

            <tr>
            <td align='center' colspan='2'>
            <input type='button' value='ADICIONAR EMPRESA' onclick='insertar_empresa()'>
            </td>
            </tr>
            </table>
            </center>
            ";*/

    }
}
?>