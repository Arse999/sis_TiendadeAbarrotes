"use strict"
function validar (){
	var Nombre_tienda = document.formu.Nombre_tienda.value;
	var direccion = document.formu.direccion.value;
	var celular = document.formu.celular.value;
	var correo = document.formu.correo.value;
    var NIT = document.formu.NIT.value;

	if (!v1.test(Nombre_tienda=="")) {
		alert("Por favor ingrese el nombre de la tienda");
		document.formu.Nombre_tienda.focus();
		return;
	}
	if (!v1.test(direccion=="")) {
		alert("Por favor ingrese la direccion de la tienda");
		document.formu.direccion.focus();
		return;
	}
	if (celular=="") {
		alert("Por favor ingrese su numero de celular");
		document.formu.celular.focus();
		return;
	}
	if (!v3.test(correo)) {
		document.formu.correo.focus();
	}
	if (NIT=="") {
		alert("Porfavor ingrese su NIT");
		document.formu.NIT.focus();
		return;
	}
	document.formu.submit();
}