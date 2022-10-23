"use strict"
function validar(){
	var nombre = document.formu.nombre.value;
	var apellido = document.formu.apellido.value;
	var celular = document.formu.celular.value;
	var fecha_ingreso = document.formu.fecha_ingreso.value;
	var fecha_salida = document.formu.fecha_salida.value;


	if (!v1.test(nombre)) {
		alert("Los nombres son incorrectos o el campo esta vacio");
		document.formu.nombre.focus();
		return;
	}
	if (apellido=="") {
		alert("Por favor introduzca un Apellido");
		document.formu.apellido.focus();
	}
	if (fecha_ingreso=="") {
		alert("Por favor seleccione la fecha");
		document.formu.fecha_venta.focus();
		return;
	}
	if ((fecha_salida!="")||(fecha_salida=="")) {
	}
	document.formu.submit();
}