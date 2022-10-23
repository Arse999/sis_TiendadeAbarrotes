<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_persona = $_POST["id_persona"];

//$db-> debug=true;

	$sql3 = $db->Prepare("SELECT *
						FROM equipo_basquet
						WHERE id_equipo_basquet = ?
						");

$rs3 = $db->GetAll($sql3, array($id_equipo_basquet));

echo "<center>
<table width='60%' border='1'>
<tr>
<th colspan='4'>Datos Equipos Basquet</th>
</tr>
";
foreach ($rs3 as $k => $fila) {
	echo "<tr>
	<td align='center'>".$fila["nombre"]."</td>
	<td>".$fila["dpto"]."</td>
	</tr>";
}
echo "</table>
	</center>";
?>