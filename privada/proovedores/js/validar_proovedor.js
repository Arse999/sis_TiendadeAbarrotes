"use strict"
function validar(){
	var nombre_empresa = document.formu.nombre_empresa.value;
	var nit = document.formu.nit.value;
	var celular = document.formu.celular.value;
	var direccion = document.formu.direccion.value;

	
	if (!v1.test(nombre_empresa)) {
		alert("El nombre_empresa es incorrecto o el campo esta vacio");
		document.formu.nombre_empresa.focus();
		return;
	}
	if (nit=="") {
		alert("Por favor ingrese el nit");
		document.formu.nit.focus();
		return;
	}
	if (celular=="") {
		alert("Por favor ingrese el numero de celular");
		document.formu.celular.focus();
		return;
	}
	if (direccion=="") {
		alert("Por favor ingrese la direccion");
		document.formu.direccion.focus();
		return;
	}
	document.formu.submit();
}