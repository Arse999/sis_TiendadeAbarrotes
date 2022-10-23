<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta  charset=utf-8">
	{literal}
	<script type="text/javascript">
		function validar(){
			id_cliente = document.formu.id_cliente.value;
			if (document.formu.id_cliente.value == "") {
				alert("por favor seleccione el cliente");
				document.formu.id_cliente.focus();
				return;
			}
			ventanaCalendario = window.open("clientes2_selec1.php?id_cliente="+ id_cliente , "calendario" , "width=600 , height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO") 
			}
	</script>
	{/literal}
</head>
<body>
<div class="formu_ingreso_datos"> 
	<h2>Clientes</h2>
	<form method="post" name="formu" >
		<p>
			<b>*seleccione el cliente</b>
			<select name="id_cliente">
				<option value="">--Seleccione--</option>
				<option value="T">TODOS</option>
				{foreach item=r from=$clientes2}
				<option value="{$r.id_cliente}">{$r.id_cliente}</option>
				{/foreach}	
			</select>
		</p>
		<p>
			<input type="hidden" name="accion" value="">
			<input type="button" value="Aceptar" onclick="validar();" class="boton">
		</p>
	</form>
</div>	

</body>
</html>