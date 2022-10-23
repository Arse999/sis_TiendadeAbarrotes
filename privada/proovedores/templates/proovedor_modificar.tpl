<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"> </script>
	<script type="text/javascript" src="js/validar_proovedor.js"> </script>
</head>
<body>
 <div class="formu_ingreso_datos">
 	<form action="proovedor_modificar1.php" method="post" name="formu">
 		<h2>MODIFICAR PROOVEDOR</h2>
 		{foreach item=r from=$proovedores}
 			<input type="text" name="nombre_empresa" size="15" placeholder="Nombre Empresa" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre_empresa}">(*)
 		<p>
 			<input type="text" name="nit" size="15" placeholder="nit" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nit}">(*)
 		</p>
 		<p>
 			<input type="text" name="celular" size="15" placeholder="Celular" onkeyup="this.value=this.value.toUpperCase()" value="{$r.celular}">(*)
 		</p>
 		<p>
 			<input type="text" name="direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()" value="{$r.direccion}">
		</p>
 		<p>
 			<input type="hidden" name="accion" value="" >
 			<input type="hidden" name="id_proovedor" value="{$r.id_proovedor}" >
 			<input type="button" value="Aceptar" onclick="validar();" class="boton2">
 			<input type="button" value="Cancelar" onclick="javascript:location.href='proovedores.php';" class="boton2">
 		</p>
 		{/foreach}
 		<p><b>(*)Campos Obligatorios</b></p>
 	</form>
 </div>

</body>
</html>