<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">

</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td width="33%">
				<table border="0">
					<tr>
					</tr>	
				</table>		
			</td>
			<td align="center" width="33%">
				<h1>ROLES</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuevo" method="post" action="roles_nuevo.php">
					<a href="javascript:document.formNuevo.submit();">
						Nuevo>>>
					</a>
				</form>
			</td>
		</tr>		
	</table>

	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>ROL</th>
				<th><img src="../../imagenes/modificar.gif"></th><th><img src="../../imagenes/borrar.jpeg"></th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$roles}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.rol}</td>
				<td align="center">
					<form name="formModif{$r.id_rol}" method="post" action="roles_modificar.php">
						<input type="hidden" name="id_rol" value="{$r.id_rol}">
						<a href="javascript:document.formModif{$r.id_rol}.submit();" title="Modificar Rol">
						Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_rol}" method="post" action="rol_eliminar.php">
						<input type="hidden" name="id_rol" value="{$r.id_rol}">
						<a href="javascript:document.formElimi{$r.id_rol}.submit();" title="Eliminar Rol" onclick='javascript:return(confirm("Desea realmente Eliminar el Rol:::{$r.rol}?"));'>
							Eliminar>>
						</a>
					</form>
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>

	</center>

</body>
</html>