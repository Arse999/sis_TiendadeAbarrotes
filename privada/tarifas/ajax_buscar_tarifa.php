<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre = strip_tags(stripslashes($_POST["nombre"]));
$direccion = strip_tags(stripslashes($_POST["direccion"]));


//$db->debug=true;

if ($nombre or $direccion){
    $sql3 = $db->Prepare("SELECT *
                            FROM  empresa 
                            WHERE nombre LIKE ?
                            AND direccion LIKE ?               
                           
                            ");
    $rs3 = $db->GetAll($sql3, array($nombre."%", $direccion."%"));
    if ($rs3){
        echo "<center>
            <table class='listado'>
             <tr>
              <th>NOMBRE</th><th>Direccion</th><th>SELECCIONAR</th>
             </tr>";
            foreach ($rs3 as $k => $fila) {
            $str = $fila["nombre"];
            $str1 = $fila["direccion"];
            echo"<tr>
                    <td align='center'>".resaltar($nombre, $str)."</td>
                    <td>".resaltar($direccion, $str1)."</td>
                    <TD align='center'>
                    <input type='radio' name='opcion' value='' onclick='buscar_tarifa(".$fila["id_empresa"].")'> 
                    </td>                  
                    </tr>";
            }
            echo"</table>
            </center>";
        }else {
            echo"<center><b> LA Empresa no Existe !!</b></center><br>";
            
            echo"<center>
            <table class='listado'>
            <tr>
            <td><b>Nombre</b></td>
            <td><input type='text' name='nombre1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
            </tr>
            <tr>
            <td><b>Direccion</b></td>
            <td><input type='text' name='direccion1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
            </tr>
            <tr>
            <td><b>TELEFONO </b></td>
            <td><input type='text' name='telefono11' size='10'></td>
            </tr>
            <tr>
            <td><b>TELEFONO 2</b></td>
            <td><input type='text' name='telefono21' size='10'></td>
            </tr>

            <tr>
            <td align='center' colspan='2'>
            <input type='button' value='ADICIONAR EMPRESA' onclick='insertar_tarifa()'>
            </td>
            </tr>
            </table>
            </center>
            ";

        }
}
?>