<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"> </script>
	<script type="text/javascript" src="js/validar_venta.js"> </script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="venta_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR VENTA</h2>
			<b>Cliente (*)</b>
			<select name="id_cliente">
				{foreach item=r from=$clientes}
				<option value="{$r.id_cliente}">{$r.nombre} - {$r.apellido}</option>
				{/foreach}
				{foreach item=r from=$clientes}
				<option value="{$r.id_cliente}">{$r.nombre} - {$r.apellido}</option>
				{/foreach}
			</select>
			{foreach item=r from=ventas}
			<p>
				<input type="date" name="fecha_venta" size="15" placeholder="fecha venta" value="{$r.fecha_venta}">(*)
			</p>
			<p>
				<input type="text" name="monto_total" size="15" placeholder="Monto total" value="{$r.monto_total}">(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_venta" value="{$r.id_venta}">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='ventas.php';" class="boton2">
			</p>
			{/foreach}
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>