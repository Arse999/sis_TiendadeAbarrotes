<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript">
            var ventanaCalendario=false
            function imprimir(){
                if(confirm('Desea Imprimir ?')){
                    window.print();
                }
            }
        </script>
    </head>
    <body style='cursor:pointer;cursor:hand' onClick='imprimir();'>
        <table width="100%" border="0">
            <tr>
                <td><img src="../../imagenes/{$logo}" width="70%"></td>
                <td align="center" width="80%"><h1>PERSONAS_USUARIOS</h1></td>
            </tr>
        </table>
        <br>
        <center>
            <table border="1" cellspacing="0">
                <tr>
                    <th>NRO</th><th>PERSONA</th><th>USUARIO</th>
                </tr>
                {assign var="b" value="1"}
                {foreach item=r from=$personas_usuarios}
                <tr>
                    <td align="center">{$b}</td>
                    <td>{$r.nombre} {$r.ap} {$r.am}</td>
                    <td><i>{$r.usuario1}</i></td>
                    {assign var="b" value="`$b+1`"}
                    {/foreach}
                </tr>
            </table>
            <br><br>
            <b>Fecha:</b>{$fecha}
        </center> 
    </body>
</html>