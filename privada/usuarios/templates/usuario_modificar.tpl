<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"> </script>
	<script type="text/javascript" src="js/validar_usuario.js"> </script>
</head>
<body>
	<h1>MODIFICAR USUARIO</h1>
	<center>
		<form action="usuario_modificar1.php" method="post" name="formu">
		<table class="listado">
			<tr>
				<th align="right">Persona (*)</th><td valign="top">:</td>
				<td>
					<select name="id_persona">
						{foreach item=r from=$personas}
						<option value="{$r.id_persona}">{$r.ap}-{$r.am}-{$r.nombre}</option>
						{/foreach}
						<!--{foreach item=r from=$personas}
						<option value="{$r.id_persona}">{$r.ap}--{$r.am}--{$r.nombre}</option>
						{/foreach}-->
					</select>
				</td>
			</tr>
			{foreach item=r from=$usuarios}
			<tr>
				<th>Usuario (*)</th><th>:</th>
				<td><input type="text" name="usuario1" size="30" placeholder="Usuario" value="{$r.usuario1}" > </td>
			</tr>
			<tr>
				<th>Clave (*)</th><th>:</th>
				<td><input type="text" name="clave"  value="{$r.clave}" > </td>
			</tr>
			{/foreach}
		</table>	
		</form>
	</center>
</body>
</html>