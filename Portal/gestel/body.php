<?php
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
 * Date: 18-10-14
 * Time: 11:49 PM
 */
include_once("Motor/Interno/ControlUsuario/Usuario.php");
$gestionUsuario = new Usuario();

?>

<body>

<!-- Fixed navbar -->
<?php
$gestionUsuario->generarMenu(isset($_SESSION["perfil"]) ? $_SESSION["perfil"] : "Ninguno");
$muestra->insertarSlide('prueba');
?>
<h1>TEST</h1>
<?php
include(GESTEL . "/dbtest.php");
?>
<h1>/TEST</h1>
<?php
//include(GESTEL . "/container.php");
include(GESTEL . "/footer.php"); ?>
</body>