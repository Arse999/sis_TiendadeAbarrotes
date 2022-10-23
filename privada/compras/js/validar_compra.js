"use strict"
function validar(){
	var id_proovedor = document.formu.id_proovedor.value;
	var fecha_compra = document.formu.fecha_compra.value;
	var monto_total_comp = document.formu.monto_total_comp.value;

	if (id_proovedor=="") {
		alert("Por favor seleccione");
		document.formu.id_proovedor.focus();
		return;
	}

	if (!v1.test(fecha_compra=="")) {
		alert("Por favor seleccione la fecha");
		document.formu.fecha_compra.focus();
		return;
	}
	if (!v22.test(monto_total_comp =="")) {
		alert("Por favor ingrese el monto total");
		document.formu.monto_total_comp.focus();
		return;
	}
	document.formu.submit();
}