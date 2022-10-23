<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript" src="js/buscar_tarifas.js"> </script>
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
				<h1>TARIFA RURAL</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuevo" method="post" action="tarifas_nuevo.php">
					<a href="javascript:document.formNuevo.submit();">
						Nuevo>>>
					</a>
				</form>
			</td>
		</tr>
				
	</table>
	<!--Inicio Buscador-->
	<center>
		<form action="#" method="post" name="formu">
		<table border="1" class="listado">
			<tr>
				<th>
				<b>Empresa</b><br>
				<td>
				<select name="nombre" onchange="buscar_tarifas()">
						<option value="">Seleccione</option>
				{foreach item=r from=$empresa}
				<option value="{$r.nombre}">{$r.nombre}</option>
				{/foreach}				
					</select>
				</td>
				</th>
				<th>
				<b>Lugar</b><br />
				<input type="text" name="lugar" value="" size="10" onKeyUp="buscar_tarifas()">
				</th>
				<th>
				<b>Tarifa Carrera</b><br />
				<input type="text" name="tarifa_carrera" value="" size="10" onKeyUp="buscar_tarifas()">
				</th>
			</tr>
		</table>
		</form>
	</center>
	<!----------------------fin Buscador----------------->
	<br><br>

	<center>
		<div id="tarifas1">
		<table class="listado">
			<tr>
				<th>NRO</th><th>Empresa</th><th>Lugar</th><th>Tarifa Carrera</th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$tarif_rural}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombre}</td>
				<td>{$r.lugar}</td><td>{$r.tarifa_carrera} </td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>
	</div>
	</center>
</body>
</html>