"use strict"
function validar(){
	var id_cliente = document.formu.id_cliente.value;
	var fecha_venta = document.formu.fecha_venta.value;
	var monto_total = document.formu.monto_total.value;

	
	if (id_cliente=="") {
		alert("Por favor seleccione");
		document.formu.id_cliente.focus();
		return;
	}
	if (fecha_venta=="") {
		alert("Por favor seleccione la fecha");
		document.formu.fecha_venta.focus();
		return;
	}
	if (!v22.testmonto_total=="") {
		alert("Por favor ingrese el monto total");
		document.formu.monto_total.focus();
		return;
	}
	document.formu.submit();
}