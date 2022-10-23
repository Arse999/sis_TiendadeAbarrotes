<?php
/* Smarty version 3.1.36, created on 2022-10-23 02:19:40
  from 'C:\wamp64\www\sistema\sis_TiendadeAbarrotes\privada\usuarios\templates\usuario_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6354a4bc1f2022_38018015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd91b723751db0501e4b988f76c47ce09e8d81fa6' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema\\sis_TiendadeAbarrotes\\privada\\usuarios\\templates\\usuario_nuevo.tpl',
      1 => 1665885276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6354a4bc1f2022_38018015 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
"type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_usuario.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		function buscar() {
		var d1,contenedor,url;
		contenedor = document.getElementById('personas');
		contenedor2 = document.getElementById('persona_seleccionado');
		contenedor3 = document.getElementById('persona_insertado');

		d1 = document.formu.ap.value;
		d2 = document.formu.am.value;
		d3 = document.formu.nombre.value;
		d4 = document.formu.Ci.value;
		ajax = nuevoAjax();
		url	="ajax_buscar_persona.php"
		param = "ap="+d1+"&am="+d2+"&nombre="+d3+"&Ci="+d4;
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
		function buscar_persona(id_persona){
			var d1, contenedor, url;
			contenedor = document.getElementById('persona_seleccionado');
			contenedor2 = document.getElementById('personas');
			document.formu.id_persona.value = id_persona;

			d1 = id_persona;

			ajax = nuevoAjax();
			url = "ajax_buscar_persona1.php";
			param = "id_persona="+d1;
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
		function insertar_persona(){

			var d1, contenedor, url;
			contenedor = document.getElementById('persona_seleccionado');
			contenedor2 = document.getElementById('personas');
			contenedor3 = document.getElementById('persona_insertado');
			d1 = document.formu.ap1.value;
			d2 = document.formu.am1.value;
			d3 = document.formu.nombre1.value;
			d4 = document.formu.Ci1.value;
			d5 = document.formu.direccion1.value;
			d6 = document.formu.telefono1.value;
			f = document.formu.genero1[0].checked;
			m = document.formu.genero1[1].checked;

		if (f == true)
			d7="f";
		else if(m == true)
			d7="m";
		else
			d7="";

		if(d4 ==""){
			alert("El ci es incorrecto o el campo esta vacio");
			document.formu.Ci1.focus();
			return;
		}
		if ((d1=="")&&(d2=="")) {
			alert("El Apellido es incorrrecto o el campo esta vacio");
			document.formu.ap1.focus();
			return;
		}
		if (d3 == "") {
			alert("El nombre es incorrecto  o el campo esta vacio");
			document.formu.nombre1.focus();
			return;
		}
		if (d7 == "") {
			alert("El genero esta vacio");
			return;
		}
		ajax = nuevoAjax();
		url	="ajax_inserta_persona.php";
		param = "ap1="+d1+"&am1="+d2+"&nombre1="+d3+"&Ci1="+d4+"&direccion1="+d5+"&telefono1="+d6+"&genero1="+d7;
		ajax.open("POST", url, true);
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		ajax.onreadystatechange = function () {
			if (ajax.readyState == 4) {
				contenedor.innerHTML = "";
				contenedor2.innerHTML ="";
				contenedor3.innerHTML = ajax.responseText;
			}
		}
		ajax.send(param);
		}
	<?php echo '</script'; ?>
>
</head>
<body>
	<h1> REGISTRAR USUARIO</h1>
	<center>
		<form action="usuario_nuevo1.php" method="post" name="formu">
			<table border="1">
				<tr>
					<th align="right">Seleccione Persona (*)</th>
					<th>:</th>
					<td>
						<table>
							<tr>
								<td>
									<b>Paterno</b><br>
									<input type="text" name="ap" value="" size="10" onkeyUp="buscar()">
								</td>
								<td>
									<b>Materno</b><br>
									<input type="text" name="am" value="" size="10" onkeyUp="buscar()">
								</td>
								<td>
									<b>Nombres</b><br>
									<input type="text" name="nombre" value="" size="10" onkeyUp="buscar()">
								</td>
								<td>
									<b>C.I.</b><br>
									<input type="text" name="Ci" value="" size="10" onkeyUp="buscar()">
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
						   <div id="personas"> </div>
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
									<div id="persona_seleccionado"> </div>
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
									<input type="hidden" name="id_persona">
									<div id="persona_insertada"> </div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th align="right">Usuario (*)</th>
					<th>:</th>
					<td><input type="text" name="usuario1"> </td>
				</tr>
				<tr>
					<th align="right">Clave (*)</th>
					<th>:</th>
					<td><input type="password" name="clave"> </td>
				</tr>
				<tr>
					<td align="center" colspan="3">
						<input type="hidden" name="accion" value="">
						<input type="button" value="Aceptar" onclick="validar();">
						<input type="button" value="Cancelar" onclick="javascript:location.href='usuarios.php';">
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
</html><?php }
}
