"use strict"
function validar(){
	var nombre = document.formu.nombre.value;
	var apellido = document.formu.apellido.value;
	var celular = document.formu.celular.value;

	if (!v1.test(nombre)) {
		alert("El nombre son incorrecto o el campo esta vacio");
		document.formu.nombre.focus();
		return;
	}
	if (!v1.test(apellido)) {
		alert("Por favor introduzca su Apellido");
		document.formu.apellido.focus();
		return;
	}
	if (celular="") {
		return;
	}
	document.formu.submit();
}