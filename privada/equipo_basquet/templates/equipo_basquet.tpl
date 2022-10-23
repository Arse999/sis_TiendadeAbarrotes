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
				<h1>CALENDARIO DE ACTIVIDADES</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuevo" method="post" action="equipo_basquet_nuevo.php">
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
			<th>NRO</th><th>NOMBRE</th><th>DEPARTAMENTO</th><th>FECHA DE CREACION</th>
		</tr>
		{assign var="b" value="0"}
		{assign var="total" value="`$pagina-1`"}
		{assign var="a" value="`$numreg*$total`"}
		{assign var="b" value="`$b+1+$a`"}
		{foreach item=r from=$equipo_basquet}
		<tr>
			<td align="center">{$b}</td>
			<td>{$r.nombre}</td>
			<td align="center">{$r.dpto}</td>
			<td align="center">{$r.fec_creacion}</td>
			{assign var="b" value="`$b+1`"}
			{/foreach}
		</tr>
	</table>

	</center>
</body>
</html>