"use strict"
function validar(){
	var actividad_programada = document.formu.actividad_programada.value;
	var lugar = document.formu.lugar.value;
	var fecha = document.formu.fecha.value;
	var hora = document.formu.hora.value;

	if (!v1.test(actividad_programada=="")) {
		alert("Por favor ingrese la actividadprogramada");
		document.formu.actividad_programada.focus();
		return;
	}
	if (!v1.test(lugar=="")) {
		alert("El Lugar es incorrecto o el campo esta vacio");
		document.formu.lugar.focus();
		return;
	}
	if (!v22.test(fecha=="")) {
		alert("La fecha es incorrecta o el campo esta vacio");
		document.formu.fecha.focus();
		return;
	}
	if (!v22.test(hora=="")) {
		alert("La hora es incorrecta o el campo esta vacio");
		document.formu.hora.focus();
		return;
	}
	document.formu.submit();
}