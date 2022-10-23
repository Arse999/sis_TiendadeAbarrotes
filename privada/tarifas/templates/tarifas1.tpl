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
	 			<h1>TARIFA RURAL</h1>
	 		</td> 
	 	</tr> 
	 	</table> 
	 	<br> 
	 	<center> 
	 		<table border="1" cellspacing="0"> 
	 		<tr>
	 		 <th>NRO</th><th>EMPRESA</th><th>LUGAR</th><th>TARIFA CARRRERA</th></tr> 
	 		 {assign var="b" value="1"}
	 		 {foreach item=r from=$tarifas1}
	 		 <tr> 
	 		 	<td align = "center ">{$b}</td>
	 		 	<td>{$r.nombre}</td> 
	 		 	<td>{$r.lugar}</td>
	 		 	<td>{$r.tarifa_rural}</td>
	 		 	{assign var="b" value="`$b+1`"} 
				{/foreach} 
				</tr>
		</table > 
	<br><br>
		</center> 
	</body> 
</html>