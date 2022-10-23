"use strict"
function validar(){
	var id_empresa= document.formu.id_empresa.value;
	var lugar = document.formu.lugar.value;
	var tarifa_carrera = document.formu.tarifa_carrera.value;

	if (id_empresa=="") {
		alert("Por favor seleccione Empresa");
		document.formu.id_empresa.focus();
		return;
	}
	if (lugar=="") {
		alert("El Lugar es incorrecto o el campo esta vacio");
		document.formu.lugar.focus();
		return;
	}
	if (tarifa_carrera=="") {
		alert("La tarifa es incorrecta o el campo esta vacio");
		document.formu.tarifa_carrera.focus();
		return;
	}
	document.formu.submit();
}