<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../{$direc_css}" type="text/css">
        <script type="text/javascript" src="../js/expresiones_regulares.js"> </script>
        <script type="text/javascript" src="js/validar_tienda.js"> </script> <!--JS REBIZAR-->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <br>
        <center>
            <h1>TIENDA</h1>
            <form action="tienda1.php" method="post" name="formu" enctype="multipart/form-data">
                <table border="1">
                    {foreach item=r from=$tienda}
                    <tr>
                        <th>Nombre (*)</th><th>:</th>
                        <td><input type="text" name="Nombre_tienda" onkeyup="this.value=this.value.toUpperCase()" value="{$r.Nombre_tienda}"> </td>
                    </tr>
                    <tr>
                        <th align="right">Direccion</th><th>:</th>
                        <td><input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()" value="{$r.direccion}"> </td>
                    </tr>
                    <tr>
                        <th align="right">Celular</th><th>:</th>
                        <td><input type="text" name="celular" onkeyup="this.value=this.value.toUpperCase()" value="{$r.celular}"> </td>
                    </tr>
                    <tr>
                        <th>Correo</th><th>:</th>
                        <td><input type="text" name="correo" onkeyup="this.value=this.value.toUpperCase()" value="{$r.correo}"> </td>
                    </tr>
                    <tr>
                        <th>NIT</th><th>:</th>
                        <td><input type="text" name="NIT" onkeyup="this.value=this.value.toUpperCase()" value="{$r.NIT}"> </td>
                    </tr>
                    <tr>
                        <th>Logo(*)</th><th>:</th>
                        <td>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                            <input type="file" name="logo">
                            <input type="hidden" name="logo1" value="{$r.logo}">
                            <br><b>{$r.logo}</b>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3">
                            <input type="hidden" name="accion" value="">
                            <input type="hidden" name="id_tienda" value="{$r.id_tienda}">
                            <input type="button" value="Aceptar" onclick="validar();">
                        </td>
                    </tr>
                    {/foreach}
                </table>
                <table>
                    <tr>
                        <td colspan="3" align="center"><b>(*) Campos Obligatorios</b></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>