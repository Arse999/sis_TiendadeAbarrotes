<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"> </script>
	<script type="text/javascript" src="js/validar_representante.js"> </script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="representante_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR REPRESENTANTE</h2>
			<b>PROOVEDOR (*)</b>
			<select name="id_proovedor">
				{foreach item=r from=$proovedores}
				<option value="{$r.id_proovedor}">{$r.nombre_empresa} - {$r.nit}
				- {$r.celular} - {$r.direccion}</option>
				{/foreach}
				{foreach item=r from=$proovedores}
				<option value="{$r.id_proovedor}">{$r.nombre_empresa} - {$r.nit}
				- {$r.celular} - {$r.direccion}</option>
				{/foreach}
			</select>
			{foreach item=r from=representantes}
			<p>
				<input type="text" name="nombre" size="15" placeholder="Nombre" value="{$r.nombre}">(*)
			</p>
			<p>
				<input type="text" name="apellido" size="15" placeholder="apellido" value="{$r.apellido}">(*)
			</p>
			<p>
				<input type="text" name="celular" size="15" placeholder="celular" value="{$r.celular}">(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_proovedor" value="{$r.id_proovedor}">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='representantes.php';" class="boton2">
			</p>
			{/foreach}
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>