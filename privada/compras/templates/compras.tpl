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
				<h1>COMPRAS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuevo" method="post" action="compra_nuevo.php">
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
				<th>NRO</th><th>PROOVEDOR</th><th>FECHA COMPRA</th><th>MONTO TOTAL</th>
				<th><img src="../../imagenes/modificar.png" height="50" width="50"></th><th><img src="../../imagenes/borrar.png" height="40" width="50"></th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$compras}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombre_empresa}</td>
				<td>{$r.fecha_compra}</td>
				<td>{$r.monto_total_comp}</td>
				<td align="center">
					<form name="formModif{$r.id_compra}" method="post" action="compra_modificar.php">
						<input type="hidden" name="id_compra" value="{$r.id_compra}">
						<input type="hidden" name="id_proovedor" value="{$r.id_proovedor}">
						<a href="javascript:document.formModif{$r.id_compra}.submit();" title="Modificar Compra">
						Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi{$r.id_compra}" method="post" action="compra_eliminar.php">
						<input type="hidden" name="id_compra" value="{$r.id_compra}">
						<a href="javascript:document.formElimi{$r.id_compra}.submit();" title="Eliminar Compra" onclick="javascript:return(confirm('Desea realmente Eliminar la Compra...?'));location.href='compra_eliminar.php'">
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