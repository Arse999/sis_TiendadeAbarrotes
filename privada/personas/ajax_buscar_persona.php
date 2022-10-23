<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$paterno = strip_tags(stripslashes($_POST["paterno"]));
$materno = strip_tags(stripslashes($_POST["materno"]));
$nombres = strip_tags(stripslashes($_POST["nombres"]));
$ci = strip_tags(stripslashes($_POST["ci"]));

//$db->debug=true;
if ($paterno or $materno or $nombres or $ci){
    $sql3 = $db->Prepare("SELECT *
                            FROM personas
                            WHERE ap LIKE ?
                            AND am LIKE ?
                            AND nombre LIKE ?
                            AND Ci LIKE ?
                            AND estado <> '0'
                            ");
    $rs3 = $db->GetAll($sql3, array($paterno."%", $materno."%", $nombres."%", $ci."%"));
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
                    <td align='center'>".resaltar($ci, $str)."</td>
                    <td>".resaltar($paterno, $str1)."</td>
                    <td>".resaltar($materno, $str2)."</td>
                    <td>".resaltar($nombres, $str3)."</td>
                    <td align='center'>
                    <form name='formModif".$fila["id_persona"]."'method='post' action='persona_modificar.php'>
                    <input type='hidden' name='id_persona' value='".$fila['id_persona']."'>
                    <a href='javascript:document.formModif".$fila['id_persona'].".submit();' title='Modificar persona Sistema'>
                    Modificar>>>
                    </a>
                    </form>
                    </td>
                    <td align='center'>
                    <form name='forElimi".$fila["id_persona"]."' method='post' action='persona_eliminar.php'>
                    <input type='hidden' name='id_persona' value='".$fila["id_persona"]."'>
                    <a href='javascript:document.forElimi".$fila['id_persona'].".submit();' title='Eliminar Persona Sistema' onclick='javascript:return(confirm(\"Desea realmente eliminar a la persona..?<\"))';
                    location.href='persona_eliminar.php''>
                    Eliminar>>
                    </a>
                    </form>
                    </td>
                    </tr>";
            }
            echo"</table>
            </center>";
        }else {
            echo"<center><b> LA PERSONA NO EXISTE !!</b></center><br>";
    }
}
?>