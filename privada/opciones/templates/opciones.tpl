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
				<h1>OPCIONES</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuevo" method="post" action="opcion_nuevo.php">
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
				<th>NRO</th><th>OPCION</th><th>CONTENIDO</th><th>ORDEN</th><th>GRUPO</th>
				<th><img src="../../imagenes/modificar.gif"></th><th><img src="../../imagenes/borrar.jpeg"></th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$opciones}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.opcion}</td>
				<td>{$r.contenido}</td>
				<td>{$r.orden}</td>
				<td>{$r.grupo}</td>
				<td align="center">
					<form name="formModif{$r.id_opcion}" method="post" action="opcion_modificar.php">
						<input type="hidden" name="id_opcion" value="{$r.id_opcion}">
						<input type="hidden" name="id_grupo" value="{$r.id_grupo}">
						<a href="javascript:document.formModif{$r.id_opcion}.submit();" title="Modificar Opcion">
						Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_opcion}" method="post" action="opcion_eliminar.php">
						<input type="hidden" name="id_opcion" value="{$r.id_opcion}">
						<a href="javascript:document.formElimi{$r.id_opcion}.submit();" title="Eliminar Opcion" onclick='javascript:return(confirm("Desea realmente Eliminar la Opcion::{$r.opcion}? :{$r.contenido}? :{$r.orden}?: {$r.grupo}?"));'>
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