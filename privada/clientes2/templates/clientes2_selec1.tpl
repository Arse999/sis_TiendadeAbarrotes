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
	 			<h1>---Clientes2---</h1>
	 		</td> 
	 	</tr> 
	 	</table> 
	 	<br> 
	 	<center> 
	 		<table border="1" cellspacing="0"> 
	 		<tr>
	 		 <th>NRO</th><th>Clientes</th></tr> 
	 		 {assign var="b" value="1"}
	 		 {foreach item=r from=$clientes2_selec1}
	 		 <tr> 
	 		 	<td align = "center ">{$b}</td>
	 		 	<td>{$r.nombres}.{$r.apellidos}</td>
	 		 	{assign var="b" value="`$b+1`"} 
				{/foreach} 
				</tr>
		</table> 
	<br><br> 
		</center> 
	</body> 
</html>