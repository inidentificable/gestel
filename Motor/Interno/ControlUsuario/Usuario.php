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
            echo '<form class="navbar-form navbar-right" role="form">
            <div class="form-group">';
            if (isset($_GET["errorusuario"]) && $_GET["errorusuario"] == "si") {
                echo '<span style="color:#ed1337"><b>Datos incorrectos</b></span>';
            } else {
                echo '<span class="Estilo2">Introduce tu clave de acceso </span>';
            }
            echo '
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>';
        }
    }

    public function generarMenu($perfil)
    {
        echo '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">


                <li><a href="index.php">Inicio</a></li>
			    <li><a href="empresa.php">La Empresa</a></li>
			    <li><a href="propiedades.php">Propiedades</a></li>
			    <li><a href="contacto.php">Cont&aacute;ctenos</a></li>';

        switch ($perfil) {
            case "Administrador" :
                echo '<li><a href="bien_admin.php">Configuraci&oacute;n</a></li>';
                break;
            case "Cliente-Proveedor":
                echo '<li><a href="bien_clipro.php">Configuraci&oacute;n</a></li>
                      <li><a href="cargar_propiedad.php">Cargar Propiedades</a></li>';
                break;
        }
        echo '</ul>
                </li>
            </ul>';
        $this->imprimirSeccionLogin();
        echo '</div><!--/.navbar-collapse -->
      </div>
    </nav>

<br><div id="logo"><h1><img src="images/logo.png" alt="24" width="166" height="151"></h1></div> <!-- div logo -->';

    }
}