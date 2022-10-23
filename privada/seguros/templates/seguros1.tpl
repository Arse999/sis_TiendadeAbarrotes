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
	 			<h1>Ficha Tecnica de Seguros</h1>
	 		</td> 
	 	</tr> 
	 	</table> 
	 	<br> 
	 	<center> 
	 		<table border="1" cellspacing="0"> 
	 		<tr>
	 		 <td>
			 <table>
	 		 {foreach item=r from=$seguros}
			 <tr>
			 <th>
			 <b>Cliente</b><br>
			 <td><input type="text" name="nombres" value="{$r.nombres}" disabled=""></td>
			 </th>
			 </tr>

			 <tr>
			 <th>
			 <b>Descripcion</b><br>
			 <td><input type="text" name="descripcion" value="{$r.descripcion}" disabled=""></td>
			 </th>
			 </tr>

			 <tr>
			 <th>
			 <b>Monto</b><br>
			 <td><input type="text" name="monto" value="{$r.monto}" disabled=""></td>
			 </th>
			 </tr>
			 {/foreach}
			 </table>
			 </td>
			 </tr>
		</table > 
		</center> 
	</body> 
</html>