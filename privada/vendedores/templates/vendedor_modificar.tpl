<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"> </script>
	<script type="text/javascript" src="js/validar_vendedor.js"> </script>
</head>
<body>
 <div class="formu_ingreso_datos">
 	<form action="vendedor_modificar1.php" method="post" name="formu">
 		<h2>MODIFICAR VENDEDOR</h2>
 		{foreach item=r from=$vendedores}
 			<input type="text" name="nombre" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre}">(*)
 		<p>
 			<input type="text" name="apellido" size="15" placeholder="Apellidos" onkeyup="this.value=this.value.toUpperCase()" value="{$r.apellido}">(*)
 		</p>
 		<p>
 			<input type="text" name="celular" size="15" placeholder="Celular" onkeyup="this.value=this.value.toUpperCase()" value="{$r.celular}">(*)
 		</p>
 		<p>	

			FECHA INGRESO <input type="date" name="fecha_ingreso" size="15" placeholder="fecha_ingreso" onkeyup="this.value=this.value.toUpperCase()" value="{$r.fecha_ingreso}">
			</p>
			<p>

			 FECHA SALIDA <input type="date" name="fecha_salida" size="15" placeholder="fecha_salida" onkeyup="this.value=this.value.toUpperCase()" value="{$r.fecha_salida}">
			</p>
 		<p>
 			<input type="hidden" name="accion" value="" >
 			<input type="hidden" name="id_vendedor" value="{$r.id_vendedor}" >
 			<input type="button" value="Aceptar" onclick="validar();" class="boton2">
 			<input type="button" value="Cancelar" onclick="javascript:location.href='vendedores.php';" class="boton2">
 		</p>
 		{/foreach}
 		<p><b>(*)Campos Obligatorios</b></p>
 	</form>
 </div>

</body>
</html>