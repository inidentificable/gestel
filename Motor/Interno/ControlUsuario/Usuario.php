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
            if (isset($_GET["errorusuario"]) && $_GET["errorusuario"] == "si") {
                echo '<a href="index.php"> Datos incorrectos </a> ';
            } else {
                echo '<form class="navbar-form navbar-right" role="form">
                        <div class="form-group">
                            <input type="Usuario" placeholder="Usuario" class="form-control">
                            <input type="Clave" placeholder="Clave" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Ingresar</button>
                      </form>';
            }
        }
    }

    public function generarMenu($perfil)
    {
        echo '<div class="navbar-wrapper">
                <div class="container">
                    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="http://localhost/GESTEL/">GESTEL</a>
                            </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Inicio</a></li>
			                    <li><a href="empresa.php">La Empresa</a></li>
			                    <li><a href="propiedades.php">Propiedades</a></li>
			                    <li><a href="contacto.php">Cont&aacute;ctenos</a></li>';

        if ($perfil != 'Ninguno') {
            echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu Usuario <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">';

            switch ($perfil) {
                case "Administrador" :
                    echo '<li><a href="bien_admin.php">Configuraci&oacute;n</a></li>';
                    break;
                case "Cliente-Proveedor":
                    echo '<li><a href="bien_clipro.php">Configuraci&oacute;n</a></li>
                      <li><a href="cargar_propiedad.php">Cargar Propiedades</a></li>';
                    break;
            }
            echo '</ul>';
        }
        echo ' </ul>';
        $this->imprimirSeccionLogin();
        echo '</div><!--/.navbar-collapse -->
        </div>
    </nav>
    </div>
    </div>';

    }
}