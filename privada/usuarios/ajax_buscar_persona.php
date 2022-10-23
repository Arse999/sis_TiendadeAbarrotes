<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$ap = strip_tags(stripslashes($_POST["ap"]));
$am = strip_tags(stripslashes($_POST["am"]));
$nombre = strip_tags(stripslashes($_POST["nombre"]));
$Ci = strip_tags(stripslashes($_POST["Ci"]));

//$db->debug=true;

if ($ap or $am or $nombre or $Ci){
    $sql3 = $db->Prepare("SELECT *
                            FROM personas
                            WHERE ap LIKE ?
                            AND am LIKE ?
                            AND nombre LIKE ?
                            AND Ci LIKE ?
                            AND estado <> '0'
                            ");

$myfile = fopen("demo-sqli_arsenioAjax.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $sql3);
	fclose($myfile);

    $rs3 = $db->GetAll($sql3, array($ap."%", $am."%", $nombre."%", $Ci."%"));

    if ($rs3){
        echo "<center>
            <table class='listado'>
             <tr>
              <th>C.I.</th><th>PATERNO</th><th>MATERNO</th><th>NOMBRES</th><th><img src='../../imagenes/modificar.jpg'></th><th><img src='../../imagenes/borrar.jpg'></th>
             </tr>";
            foreach ($rs3 as $k => $fila) {
            $str = $fila["Ci"];
            $str1 = $fila["ap"];
            $str2 = $fila["am"];
            $str3 = $fila["nombre"];
            echo"<tr>
                    <td align='center'>".resaltar($Ci, $str)."</td>
                    <td>".resaltar($ap, $str1)."</td>
                    <td>".resaltar($am, $str2)."</td>
                    <td>".resaltar($nombre, $str3)."</td>
                    <td align='center'>
                    <input type='radio' name='opcion' value='' onclick='buscar_persona(".$fila["id_persona"].")'>
                    </td>
                    </tr>";
                }
                echo"</table>
                </center>";
            } else {
                echo"<center><b> LA PERSONA NO EXISTE !!</b></center><br>";
                echo"<center>
                    <table class='listado'>
                    <tr>
                    <td><b>CI</b></td>
                    <td><input type='text' name='Ci1' size='10'></td>
                    </tr>
                    <tr>
                    <td><b>Paterno</b></td>
                    <td><input type='text' name='ap1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
                    </tr>
                    <tr>
                    <td><b>Materno</b></td>
                    <td><input type='text' name='am1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
                    </tr>
                    <tr>
                    <td><b>Nombres</b></td>
                    <td><input type='text' name='nombre1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
                    </tr>
                    <tr>
                    <td><b>Direccion</b></td>
                    <td><input type='text' name='direccion1' size='10' onkeyup='this.value=this.value.toUpperCase()'></td>
                    </tr>
                    <tr>
                    <td><b>Telefono</b></td>
                    <td><input type='text' name='telefono1' size='10'></td>
                    </tr>
                    <tr>
                    <td><b>Genero</b></td>
                    <td><input type='radio' name='genero1' size='10'>Femenino
                    <input type='radio' name='genero1' size='10'>Masculino<br>
                    </td>
                    </tr>
                    <tr>
                    <td align='center' colspan='2'>
                    <input type='button' value='ADICIONAR PERSONA' onclick='insertar_persona()'>
                    </td>
                    </tr>
                    </table>
                    </center>
                    ";
            }
        }
?>