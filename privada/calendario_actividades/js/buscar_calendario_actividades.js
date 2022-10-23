"use strict"
function buscar_calendario_actividades() {
    var d1, d2, d3, ajax, url, param, contenedor;
    contenedor = document.getElementById('calendario_actividades1');
    d1 = document.formu.nombre.value; /*por revisar */
    d2 = document.formu.actividad_programada.value;
    d3 = document.formu.lugar.value;
    ajax = nuevoAjax();
    url = "ajax_buscar_equipo_basquet.php"
    param = "nombre="+d1+"&actividad_programada="+d2+"&lugar="+d3;
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