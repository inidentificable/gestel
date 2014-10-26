<?php
if (isset($_SESSION["usuario"])) {
    echo ' Bienvenido ' . $_SESSION["usuario"] . ' ' . $_SESSION["perfil"];
    echo '<a href="salir.php"> Cerrar Sesi&oacute;n </a> ';
} else {
    ?>
    <form action="control.php" method="POST">
        <table align="right" width="169" cellspacing="2" cellpadding="2" border="0" background="images/login.png">
            <tr>
                <td colspan="2" align="center"
                    <?php if ($_GET["errorusuario"] == "si"){ ?> ><span style="color:#ed1337"><b>Datos
                            incorrectos</b></span>
                    <?php } else { ?> <span class="Estilo2">Introduce tu clave de acceso </span>
                    <?php } ?></td>
            </tr>
            <tr>
                <td width="61" align="right">
                    <div align="left" class="Estilo11">
                        <div align="right"><span class="Estilo2">Usuario:</span></div>
                    </div>
                </td>
                <td width="94"><input type="Text" name="usuario" size="8" maxlength="50"></td>
            </tr>
            <tr>
                <td align="right">
                    <div align="left" class="Estilo11">
                        <div align="right"><span class="Estilo2">Clave</span>:</div>
                    </div>
                </td>
                <td><input type="password" name="contrasena" size="8" maxlength="50"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="Submit" value="ENTRAR"></td>
            </tr>
        </table>
    </form>
    </div>
<?php } ?>