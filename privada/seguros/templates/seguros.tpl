<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
	function buscar(){
    var d1, d2, d3, ajax, url, param, contenedor;
    contenedor = document.getElementById('seguros1');

    d1 = document.formu.nombres.value;
    d2 = document.formu.descripcion.value;
    d3 = document.formu.monto.value;
	
    ajax = nuevoAjax();
    url = "ajax_buscar_seguros.php"
    param = "nombres="+d1+"&descripcion="+d2+"&monto="+d3;
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

function mostrar(id_seguro){
    var d1, ventanaCalendario;
    d1 = id_seguro;
    //alert(id_seguro);
    ventanaCalendario = window.open("seguros1.php?id_seguro=" + d1 , "calendario", "width=600, height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
}
	</script>
</head>
<body>

	<table width="100%" border="0">
		<tr>
			<td width="33%">
				<table border="0">
					<tr>
					</tr>	
				</table>		
			</td>
			<td align="center" width="33%">
				<h1>Seguros</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuevo" method="post" action="calendario_nuevo.php">
					<a href="javascript:document.formNuevo.submit();">
						Nuevo>>>
					</a>
				</form>
			</td>
		</tr>
				
	</table>
	<!--Inicio Buscador-->
	<center>
		<form action="#" method="post" name="formu">
		<table border="1" class="listado">
			<tr>
				<th>
				<b>Clientes</b><br>
				<th>
				<select name="nombres" onchange="buscar()">
					<option value="">Seleccione</option>
				{foreach item=r from=$clientes2}
				<option value="{$r.nombres}">{$r.nombres}</option>
				{/foreach}				
					</select>
				</th>
				</th>
				<th>
				<b>descripcion</b><br />
				<input type="text" name="descripcion" value="" size="10" onKeyUp="buscar()">
				</th>
				<th>
				<b>Monto</b><br />
				<input type="text" name="monto" value="" size="10" onKeyUp="buscar()">
				</th>
			</tr>
		</table>
		</form>
	</center>
	<!----------------------fin Buscador----------------->
	<br><br>

	<center>
		<div id="seguros1">
	</div>
	</center>
</body>
</html>