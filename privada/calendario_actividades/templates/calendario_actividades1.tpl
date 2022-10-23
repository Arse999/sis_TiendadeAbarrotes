<!DOCTYPE html> 
<html> 
	<head> 
	<script type="text/javascript">
		var ventanaCalendario=false
			function imprimir(){
				if (confirm('Desea Imprimir ?')){
					window.print();
				}
			}
	</script> 
	</head> 
	<body style='cursor:pointer;cursor:hand' onclick="imprimir();">
	 <table width="100%" border="0"> 
	 	<tr> 
	 		<td><img src="../../imagenes/{$logo}" width="70%">
	 		</td>
	 		<td align="center" width="80%">
	 			<h1>Calendario--Actividades</h1>
	 		</td> 
	 	</tr> 
	 	</table> 
	 	<br> 
	 	<center> 
	 		<table border="1" cellspacing="0"> 
	 		<tr>
	 		 <th>NRO</th><th>Equipo Basquet</th><th>ACTIVIDADES PROGRAMADAS</th><th>LUGAR</th><th>FECHA</th></tr> 
	 		 {assign var="b" value="1"}
	 		 {foreach item=r from=$calendario_actividades1}
	 		 <tr> 
	 		 	<td align = "center ">{$b}</td>
	 		 	<td>{if $r.nombre=='VIKINGOS'}VIKINGOS{else if($r.nombre=='LA SALLE')}LA SALLE{else ($r.nombre=='PICHINCHA')}PICHINCHA{/if}</td> 
	 		 	<td>{$r.dpto}</td>
	 		 	<td>{$r.fec_creacion}</td>
	 		 	{assign var="b" value="`$b+1`"} 
				{/foreach} 
				</tr>
		</table > 
	<br><br> 
	<b>Fecha Creacion:</b>{$fec_creacion}
		</center> 
	</body> 
</html>