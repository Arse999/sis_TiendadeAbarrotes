<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_vendedor.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="vendedor_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR VENDEDOR</h2>
			<input type="text" name="nombre" size="15" placeholder="Nombre" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			<input type="text" name="apellido" size="15" placeholder="Apellido" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			<input type="text" name="celular" size="15" placeholder="celular">
			</p>
			<p>
			
			FECHA INGRESO <input type="date" name="fecha_ingreso" size="15" placeholder="fecha_ingreso">
			</p>
			<p>
			 FECHA SALIDA <input type="date" name="fecha_salida" size="15" placeholder="fecha_salida">
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value="Cancelar" onclick="javascript:location.href='vendedores.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html>