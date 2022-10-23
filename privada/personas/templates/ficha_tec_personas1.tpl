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
    <body style='cursor:pointer;cursor:hand' onclick='imprimir();'>
        <table width="100%" border="0">
            <tr>
                <td>
                    <img src="../../imagenes/{$logo}" width="70%">
                </td>
                <td align="center" width="80%">
                    <h1> FICHA TECNICA DE PERSONAS</h1>
                </td>
            </tr>
        </table>
        <br>
        <center>
            <table border="1" cellspacing="0">
                <tr>
                    <td>
                        <table border="0">
                            {foreach item=r from=$persona}
                            <tr>
                                <th>CI</th><th>:</th>
                                <td><input type="text" name="ci" value="{$r.Ci}" disabled=""> </td>
                            </tr>
                            <tr>
                                <th>NOMBRES</th><th>:</th>
                                <td><input type="text" name="nombre" value="{$r.nombre}" disabled=""> </td>
                            </tr>
                            <tr>
                                <th>APELLIDO PATERNO</th><th>:</th>
                                <td><input type="text" name="ap" value="{$r.ap}" disabled=""> </td>
                            </tr>
                            <tr>
                                <th>APELIDO MATERNO</th><th>:</th>
                                <td><input type="text" name="am" value="{$r.am}" disabled=""> </td>
                            </tr>
                            <tr>
                                <th>DIRECCION</th><th>:</th>
                                <td><input type="text" name="direccion" value="{$r.direccion}" disabled=""> </td>
                            </tr>
                            <tr>
                                <th>TELEFONO</th><th>:</th>
                                <td><input type="text" name="telefono" value="{$r.telefono}" disabled=""> </td>
                            </tr>
                            <tr>
                                <th>GENERO</th><th>:</th>
                                <td>
                                    {if %r.genero == 'M'} <input type="text" name="genero" value="MASCULINO" disabled="">/if}
                                    {if %r.genero == 'F'} <input type="text" name="genero" value="FEMENINO" disabled="">/if}
                                </td>
                            </tr>
                            {/foreach}
                        </table>
                    </td>
                </tr>
            </table>
        </center> 
    </body>
</html>