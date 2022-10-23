"use strict"
function buscar_personas() {
    var d1, d2, d3, d4, ajax, url, param, contenedor;
    contenedor = document.getElementById('personas1');
    d1 = document.formu.nombres.value; /*por revisar */
    d2 = document.formu.apellidos.value;
    d3 = document.formu.direccion.value;
    d4 = document.formu.telefono.value;
    ajax = nuevoAjax();
    url = "ajax_buscar_clientes2.php"
    param = "nombres="+d1+"&apellidos="+d2+"&direccion="+d3+"&telefono="+d4;
    //alert(param);
    ajax.open("POST", url, true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.send(param);
}