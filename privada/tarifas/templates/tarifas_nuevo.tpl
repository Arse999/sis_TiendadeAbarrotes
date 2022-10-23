<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_tarifas.js"></script>
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar() {
		var d1,contenedor,url;
		contenedor = document.getElementById('empresa');
		contenedor2 = document.getElementById('empresa_seleccionado');
		contenedor3 = document.getElementById('empresa_insertado');

		d1 = document.formu.nombre.value;
		d2 = document.formu.direccion.value;
		ajax = nuevoAjax();
		url	="ajax_buscar_tarifa.php";
		param = "nombre="+d1+"&direccion="+d2;
		ajax.open("POST", url, true);
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		ajax.onreadystatechange = function(){
			if (ajax.readyState == 4) {
				contenedor.innerHTML = ajax.responseText;
				contenedor2.innerHTML = "";
				contenedor3.innerHTML = "";
			}
		}
		ajax.send(param);

		}
		function buscar_tarifa(id_empresa){
			var d1, contenedor, url;
			contenedor = document.getElementById('empresa_seleccionado');
			contenedor2 = document.getElementById('empresa');
			document.formu.id_empresa.value = id_empresa;

			d1 = id_empresa;

			ajax = nuevoAjax();
			url = "ajax_buscar_tarifa1.php";
			param = "id_empresa="+d1;
			ajax.open("POST",url, true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){

				if (ajax.readyState == 4) {
					contenedor.innerHTML = ajax.responseText;
					contenedor2.innerHTML = "";
					
				}
			}
			ajax.send(param);
		}
		function insertar_tarifa(){

			var d1, contenedor, url;
			contenedor = document.getElementById('empresa_seleccionado');
			contenedor2 = document.getElementById('empresa');
			contenedor3 = document.getElementById('empresa_insertada');
			d1 = document.formu.nombre1.value;
			d2 = document.formu.direccion1.value;
			d3 = document.formu.telefono11.value;
			d4 = document.formu.telefono21.value;

		if (d1=="") {
			alert("El Nombre es incorrrecto o el campo esta vacio");
			document.formu.nombre1.focus();
			return;
		}
		if (d2 == "") {
			alert("La direccion es incorrecto  o el campo esta vacio");
			document.formu.direccion1.focus();
			return;
		}
		if (d3 == "") {
			alert("El telefono1 es incorrecto  o el campo esta vacio");
			document.formu.telefono11.focus();
			return;
		}
		
		ajax = nuevoAjax();
		url	="ajax_inserta_empresa.php";

		param = "nombre1="+d1+"&direccion1="+d2+"&telefono11="+d3+"&telefono21="+d4;
		
		ajax.open("POST", url, true);
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		ajax.onreadystatechange = function () {
			if (ajax.readyState == 4) {
				contenedor.innerHTML = "new value";
				contenedor2.innerHTML ="new value";
				contenedor3.innerHTML = ajax.responseText;
			}
		}
		ajax.send(param);
		}
	</script>
</head>
<body>
	<h1> REGISTRAR TARIFA RURAL</h1>
	<center>
		<form action="tarifas_nuevo1.php" method="post" name="formu">
			<table border="1">
				<tr>
					<th align="right">Seleccione Empresa (*)</th>
					<th>:</th>
					<td>
						<table>
							<tr>
								<td>
									<b>NOMBRE EMPRESA</b><br>
									<input type="text" name="nombre" value="" size="10" onkeyup="buscar()">
								</td>
								<td>
									<b>Direccion</b><br>
									<input type="text" name="direccion" value="" size="10" onkeyup="buscar()">
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="6">
						<table width="100%">
						 <tr>
						  <td colspan="3">
						   <div id="empresa"> </div>
						  </td>
						 </tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="6">
						<table width="100%">
							<tr>
								<td colspan="3">
									<div id="empresa_seleccionado"> </div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="6">
						<table width="100%">
							<tr>
								<td colspan="3">
									<input type="hidden" name="id_empresa">
									<div id="empresa_insertada"> </div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th align="right">Lugar (*)</th>
					<th>:</th>
					<td><input type="text" name="lugar"> </td>
				</tr>
				<tr>
					<th align="right">Tarifa Carretera (*)</th>
					<th>:</th>
					<td><input type="text" name="tarifa_carrera"> </td>
				</tr>
				<tr>
					<td align="center" colspan="3">
						<input type="hidden" name="accion" value="">
						<input type="button" value="Aceptar" onclick="validar();">
						<input type="button" value="Cancelar" onclick="javascript.location.href='tarifas.php';">
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td colspan="3" align="center"><b>(*) Campos Obligatorios</b></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>