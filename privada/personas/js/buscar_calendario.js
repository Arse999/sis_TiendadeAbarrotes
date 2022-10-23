"use strict"
function buscar_personas() {
    var d1, d2, d3, ajax, url, param, contenedor;
    contenedor = document.getElementById('personas1');
    d1 = document.formu.equipo.value; /*por revisar */
    d2 = document.formu.actividad.value;
    d3 = document.formu.lu.value;
    ajax = nuevoAjax();
    url = "ajax_buscar_calendario_actividades.php"
    param = "equipo="+d1+"&actividad="+d2+"&lu="+d3;
    //alert(param);
    ajax.open("POST", url, true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 3) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.send(param);
}