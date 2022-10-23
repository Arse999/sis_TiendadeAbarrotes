<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="titulo_listado">
	<h1>
		PRODUCTOS 
	</h1>
</div>
<div class="titulo_nuevo">
	<form name="formNuevo" method="post" action="productos_nuevo.php">
	<a href="javascript:document.formNuevo.submit();">
		Nuevo>>>
	</a>
	</form>
	</div>
<center>	
	<table class="listado">
		<tr>
			<th>NRO</th><th>CODIGO</th><th>NOMBRE</th><th>CATEGORIA</th><th>ELABORACION</th><th>VENCIMIENTO</th>
			<th><img src="../../imagenes/modificar.png" height="50" width="50"></th><th><img src="../../imagenes/borrar.png" height="40" width="50"></th>
		</tr>
		{assign var="b" value="0"}
		{assign var="total" value="`$pagina-1`"}
		{assign var="a" value="`$numreg*$total`"}
		{assign var="b" value="`$b+1+$a`"}
		{foreach item=r from=$productos}
		<tr>
			<td align="center">{$b}</td>
			<td>{$r.codigo}</td>
			<td>{$r.nombre}</td>
			<td>{$r.categoria}</td>
			<td align="center">{$r.fecha_elaboracion}</td>
			<td align="center">{$r.fecha_vencimiento}</td>
			<td align="center">
				<form name="formModif{$r.id_producto}" method="post" action="productos_modificar.php">
					<input type="hidden" name="id_producto" value="{$r.id_producto}">
					<a href="javascript:document.formModif{$r.id_producto}.submit();" title="Modificar Producto Sistema">
						Modificar>>
					</a>
				</form>
			</td>
			<td align="center">
				<form name="formElimi{$r.id_producto}" method="post" action="productos_eliminar.php">
				<input type="hidden" name="id_producto" value="{$r.id_producto}">
				<a href="javascript:document.formElimi{$r.id_producto}.submit();" title="Eliminar Producto Sistema" onclick=" javascript:return(confirm('Desea realmente Eliminar el Producto ..?')); location.href='productos_eliminar.php'">
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
		</center>
	</body>
</html>