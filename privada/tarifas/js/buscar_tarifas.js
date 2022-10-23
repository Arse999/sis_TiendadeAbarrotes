"use strict"
function buscar_tarifas() {
    var d1, d2, d3, ajax, url, param, contenedor;
    contenedor = document.getElementById('tarifas1');
    d1 = document.formu.nombre.value; /*por revisar */
    d2 = document.formu.lugar.value;
    d3 = document.formu.tarifa_carrera.value;
    ajax = nuevoAjax();
    url = "ajax_buscar_empresa.php"
    param = "nombre="+d1+"&lugar="+d2+"&tarifa_carrera="+d3;
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