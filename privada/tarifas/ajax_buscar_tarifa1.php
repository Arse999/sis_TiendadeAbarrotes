<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_empresa = $_POST["id_empresa"];

//$db->debug=true;

//$smarty = new Smarty;
$sql3 = $db->Prepare("SELECT *
						FROM empresa
						WHERE id_empresa = ?
						");
$rs3 = $db->GetAll($sql3, array($id_empresa));
echo"<center>
<table width='60%' border='1'><tr>
<th colspan='4'>Datos Empresa</th></tr>";
foreach ($rs3 as $k => $fila) {
	echo"<tr>
	<td align='center'>".$fila["nombre"]."</td><td>".$fila["direccion"]."</td>
	</tr>";
}
echo"</table>
</center>"
?>