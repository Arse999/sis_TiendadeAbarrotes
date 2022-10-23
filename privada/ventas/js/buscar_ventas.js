"use strict"
function buscar_ventas(){
    var d1, d2, d3, ajax, url, param, contenedor;
    contenedor = document.getElementById('ventas1');
    d1 = document.formu.cliente.value; /*por revisar */
    d2 = document.formu.fecha.value;
    d3 = document.formu.monto_total.value;
    ajax = nuevoAjax();
    url = "ajax_buscar_venta.php"
    param = "cliente="+d1+"&fecha="+d2+"&monto_total="+d3;
     //alert(param);
     ajax.open("POST", url, true);
     ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 3) { /*CUENTA DEL 3 LA CANTIDAD DE d1 que uso si es d3 debe ir 3*/
             contenedor.innerHTML = ajax.responseText;
         }
     }
     ajax.send(param);
} 