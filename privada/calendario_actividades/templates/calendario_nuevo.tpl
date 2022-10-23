<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}"type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_usuario.js"></script>
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar() {
		var d1,contenedor,url;
		contenedor = document.getElementById('equipo_basquet');
		contenedor2 = document.getElementById('equipo_selecionado');
		contenedor3 = document.getElementById('equipo_insertado');

		d1 = document.formu.nombre.value;
		d2 = document.formu.dpto.value;
		ajax = nuevoAjax();
		url	="ajax_buscar_equipo_basquet.php"
		param = "nombre="+d1+"&dpto="+d2;
		ajax.open("POST", url, true);
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		ajax.onreadystatechange = function(){
			if (ajax.readyState == 2) {
				contenedor.innerHTML = ajax.responseText;
				contenedor2.innerHTML = "";
			}
		}
		ajax.send(param);
		}
		function buscar_equipo(id_equipo_basquet){
			var d1, contenedor, url;
			contenedor = document.getElementById('equipo_selecionado');
			contenedor2 = document.getElementById('equipo_basquet');
			document.formu.id_equipo_basquet.value = id_equipo_basquet;

			d1 = id_equipo_basquet;

			ajax = nuevoAjax();
			url = "ajax_buscar_equipo_basquet1.php";
			param = "id_equipo_basquet="+d1;
			ajax.open("POST",url, true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange function(){
				if (ajax.readyState == 2) {
					contenedor.innerHTML = ajax.responseText;
					contenedor2.innerHTML = "";
				}
			}
			ajax.send(param);
		}
		function insertar_equipo(){
			var d1, contenedor, url;
			contenedor = document.getElementById('equipo_selecionado');
			contenedor2 = document.getElementById('equipo_basquet');
            contenedor3 = document.getElementById('equipo_insertada');
			d1 = document.formu.nombre1.value;
			d2 = document.formu.dpto1.value;

		if(d1 ==""){
			alert("El nombre es incorrecto o el campo esta vacio");
			document.formu.nombre1.focus();
			return;
		}
		if (d2 == "") {
			alert("El departamento es incorrecto  o el campo esta vacio");
			document.formu.dpto1.focus();
			return;
		}
		ajax = nuevoAjax();
		url	="ajax_inserta_equipo.php";
		param = "nombre1="+d1+"&dpto1="+d2;
		ajax.open("POST", url, true);
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		ajax.onreadystatechange = function () {
			if (ajax.readyState == 2) {
				contenedor.innerHTML = "";
				contenedor2.innerHTML = ajax.responseText;
			}
		}
		ajax.send(param);
		}
	</script>
</head>
<body>
	<h1> REGISTRAR EQUIPO</h1>
	<center>
		<form action="calendario_nuevo1.php" method="post" name="formu">
			<table border="1">
				<tr>
					<th align="right">Seleccione Equipo Basquet (*)</th>
					<th>:</th>
					<td>
						<table>
							<tr>
								<td>
									<b>Nombre</b><br>
									<input type="text" name="nombre" value="" size="10" onkeyUp="buscar()">
								</td>
								<td>
									<b>Departamento</b><br>
									<input type="text" name="dpto" value="" size="10" onkeyUp="buscar()">
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
						   <div id="equipo_basquet"> </div>
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
									<div id="equipo_seleccionado"> </div>
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
									<input type="hidden" name="id_equipo_basquet">
									<div id="equipo_insertada"> </div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="3">
						<input type="hidden" name="accion" value="">
						<input type="button" value="Aceptar" onclick="validar();">
						<input type="button" value="Cancelar" onclick="javascript:location.href='calendario_actividades.php';">
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