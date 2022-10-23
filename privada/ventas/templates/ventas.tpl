<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript" src="js/buscar_ventas.js"> </script>
</head>
<body>
<div class="titulo_listado">
	<h1>
		VENTAS
	</h1>
</div>
<div class="titulo_nuevo">
	<form name="formNuevo" method="post" action="venta_nuevo.php">
	<a href="javascript:document.formNuevo.submit();">
		Nuevo>>>
	</a>
	</form>
	</div>
	<!--Inicio Buscador-->
	<center>
		<form action="#" method="post" name="formu">
		<table border="1" class="listado">
			<tr>
				<th>
				<b>CLIENTE</b><br />
				<input type="text" name="cliente" value="" size="10" onKeyUp="buscar_ventas()">
				</th>
				<th>
				<b>FECHA</b><br />
				<input type="text" name="fecha" value="" size="10" onKeyUp="buscar_ventas()">
				</th>
				<th>
				<b>MONTO TOTAL</b><br />
				<input type="text" name="monto_total" value="" size="10" onKeyUp="buscar_ventas()">
				</th>
			</tr>
		</table>
		</form>
	</center>
	<!----------------------fin Buscador----------------->
	<br><br>

<center>
<div id="ventas1">
	<table class="listado">
		<tr>
			<th>NRO</th><th>CLIENTE</th><th>FECHA</th><th>MONTO TOTAL</th>
			<th><img src="../../imagenes/modificar.png" height="50" width="50"></th><th><img src="../../imagenes/borrar.png" height="40" width="50"></th>
		</tr>
		{assign var="b" value="0"}
		{assign var="total" value="`$pagina-1`"}
		{assign var="a" value="`$numreg*$total`"}
		{assign var="b" value="`$b+1+$a`"}
		{foreach item=r from=$ventas}
		<tr>
			<td align="center">{$b}</td>
			<td>{$r.nombre}{$r.apellido}</td>
			<td align="center">{$r.fecha_venta}</td>
			<td align="center">{$r.monto_total}</td>
			<td align="center">
				<form name="formModif{$r.id_venta}" method="post" action="venta_modificar.php">
					<input type="hidden" name="id_venta" value="{$r.id_venta}">
					<input type="hidden" name="id_cliente" value="{$r.id_cliente}"> 
					<!---revisar esto identificativos o ids que heredan -->
					<a href="javascript:document.formModif{$r.id_venta}.submit();" title="Modificar Ventas Sistema">
						Modificar>>
					</a>
				</form>
			</td>
			<td align="center">
				<form name="formElimi{$r.id_venta}" method="post" action="venta_eliminar.php">
				<input type="hidden" name="id_venta" value="{$r.id_venta} {$r.id_cliente}">
				<a href="javascript:document.formElimi{$r.id_venta}.submit();" title="Eliminar Ventas Sistema" onclick=" javascript:return(confirm('Desea realmente Eliminar a la Ventas..?')); location.href='Venta_eliminar.php'">
					Eliminar>>
				</a>
			  </form>
			</td>
			{assign var="b" value="`$b+1`"}
			{/foreach}
		</tr>
	</table>

	<!--PAGINACION--------------------->
	<table>
        <tr align="center">
          <td>
            {if !empty($urlback)}
              <a onclick="location.href='{$urlback}'" style="font-family: Verdana;font-size: 9px;cursor:pointer"; >&laquo;Anterior</a>
            {/if}
            {if !empty($paginas)}
              {foreach from=$paginas item=pag}
                {if $pag.npag == $pagina}
                   {if $pagina neq '1'}|{/if} <b style="color:#FB992F;font-size: 12px;"> {$pag.npag}</b>
                {else}
           | <a onclick="location.href ='{$pag.pagV}'" style="cursor:pointer;">{$pag.npag} </a>
                {/if}
              {/foreach}
            {/if}
            {if $numpaginas gt $numbotones and !empty($urlnext) and $pagina lt $numpaginas}
             | <a onclick="location.href='{$urlnext}'" style="font-family: Verdana;font-size: 9px;cursor:pointer">Siguiente&raquo;</a>
            {/if}
          </td>
        </tr>      
      </table>
	  </div>
		</center>
	</body>
</html>