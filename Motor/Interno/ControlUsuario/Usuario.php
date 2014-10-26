<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.Gestel.cl');

/**
 *GESTEL is free software: you can redistribute it and/or modify
 *it under the terms of the GNU General Public License as published by
 *the Free Software Foundation, either version 3 of the License, or
 *(at your option) any later version.
 *GESTEL is distributed in the hope that it will be useful,
 *but WITHOUT ANY WARRANTY; without even the implied warranty of
 *MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *GNU General Public License for more details.
 *You should have received a copy of the GNU General Public License
 *along with GESTEL.  If not, see <http://www.gnu.org/licenses/>.
 * Created by PhpStorm.
 * User: inidentificable
 * Date: 30-09-14
 * Time: 10:51 PM
 */

class Usuario
{
// Declaración de la propiedad
    public $nombreUsuario;
    private $idEsAdministrador;
    private $claveUsuario;
    private $emailUsuario;

    public function EliminarUsuario()
    {

    }

    public function ModificarUsuario()
    {

    }

    public function ListarUsuario()
    {

    }

    public function ModificarClaveUsuario()
    {

    }

    public function ModificarEmailUsuario()
    {

    }

    public function AsignarAdministrador()
    {

    }

    public function EliminarAdministrador()
    {

    }

    function usuarioAsociado($cod)
    {
        if (!empty($cod)) {
            conecta_base();
            $sql2 = "SELECT nombre_user, apellido_user FROM usuario WHERE activo_user = 1 AND id_usuario = " . $cod;
            $res2 = mysql_query($sql2);
            if (mysql_num_rows($res2) == 1) {
                $dato = mysql_fetch_array($res2);
                $html = $dato[0] . " " . $dato[1];
            } else {
                $html = "Sin usuario";
            }
            return $html;
        }
    }

    public function imprimirSeccionLogin()
    {
        if (isset($_SESSION["usuario"])) {
            echo ' Bienvenido ' . $_SESSION["usuario"] . ' ' . $_SESSION["perfil"];
            echo '<a href="salir.php"> Cerrar Sesi&oacute;n </a> ';
        } else {
            echo '<form action="control.php" method="POST">
            <table align="right" width="169" cellspacing="2" cellpadding="2" border="0" background="images/login.png">
                <tr>
                    <td colspan="2" align="center"';
            if (isset($_GET["errorusuario"]) && $_GET["errorusuario"] == "si") {
                echo '<span style="color:#ed1337"><b>Datos incorrectos</b></span>';
            } else {
                echo '<span class="Estilo2">Introduce tu clave de acceso </span>';
            }
            echo '</td>
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
        </div>';
        }
    }
}