<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_venta.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="venta_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR VENTA</h2>
			<b>CLIENTE (*)</b>
			<select name="id_cliente">
			<option value="">--- seleccione ---</option>
			{foreach item=r from=$clientes}
			<option value="{$r.id_cliente}">{$r.nombre}-{$r.apellido}</option>
			{/foreach}
			</select>
			<p>
			FECHA DE VENTA <input type="date" name="fecha_venta" size="15" placeholder="fecha venta">(*)
			</p>
			<p>
			<input type="text" name="monto_total" size="15" placeholder="monto_total">(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='ventas.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>