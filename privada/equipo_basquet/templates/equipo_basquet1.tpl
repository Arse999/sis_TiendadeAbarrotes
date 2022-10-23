<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript" src="js/buscar_equipo_basquet.js"> </script>
</head>
<body>
<div class="">
	<h1>
		calendario de actividades
	</h1>
</div>
	<!--Inicio Buscador-->
	<center>
		<form action="#" method="post" name="formu">
		<table border="1" class="listado">
			<tr>
				<th>actividad programada<td valign="top">:</td>
			<select name="nombre">
				{foreach item=r from=$calendario_actividades}
				<option value="$r.id_equipo_basqet">{$r.actividad_programada}</option>
				{/foreach}				
			</select></th>
			<th></th>
				
			</tr>
		</table>
		</form>
	</center>
	<!----------------------fin Buscador----------------->
	<br><br>
	<table width="100%" border="0">
		<tr>
			<td width="33%">
				<table border="0">
					<tr>
					</tr>	
				</table>		
			</td>
			<td align="center" width="33%">
				<h1>USUARIOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formNuevo" method="post" action="usuario_nuevo.php">
					<a href="javascript:document.formNuevo.submit();">
						Nuevo>>>
					</a>
				</form>
			</td>
		</tr>		
	</table>

<center>
	<div id="equipo_basquet1">
	<table class="listado">
		<tr>
			<th>NRO</th><th>NOMBRE</th><th>DEPARTAMENTO</th><th>FECHA DE CREACION</th>
		</tr>
		{assign var="b" value="0"}
		{assign var="total" value="`$pagina-1`"}
		{assign var="a" value="`$numreg*$total`"}
		{assign var="b" value="`$b+1+$a`"}
		{foreach item=r from=$equipo_basquet}
		<tr>
			<td align="center">{$b}</td>
			<td>{$r.nombre}</td>
			<td align="center">{$r.dpto}</td>
			<td align="center">{$r.fec_creacion}</td>
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