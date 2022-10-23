<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_compra.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="compra_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR COMPRA</h2>
			<b>Proovedor (*)</b>
			<center><select name="id_proovedor">
			<option value="">--- seleccione ---</option>
			{foreach item=r from=$proovedores}
			<option value="{$r.id_proovedor}">{$r.nombre_empresa}</option>
			{/foreach}
			</select></center>
			<p>
			FECHA COMPRA <input type="date" name="fecha_compra" size="15" placeholder="fecha compra">(*)
			</p>
			<p>
			MONTO TOTAL<input type="text" name="monto_total_comp" size="15" placeholder="monto total compra">(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='compras.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>