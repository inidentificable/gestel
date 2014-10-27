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
 * Date: 18-10-14
 * Time: 11:39 PM
 */

define("AYUDANTES", PORTAL . "/Ayudantes");
define("BASEDATOS", PORTAL . "/BaseDatos");
define("CONFIGURACION", PORTAL . "/Configuracion");
define("GESTEL", PORTAL . "/Gestel");
define("LENGUAJE", PORTAL . "/Lenguaje");
define("LIBRERIA", PORTAL . "/Libreria");
define("MODULOS", PORTAL . "/Modulos");
define("RECURSOS", PORTAL . "/Recursos");

$cargaPortal = new Archivos();
$cargaPortal->cargarArchivos(AYUDANTES);
$cargaPortal->cargarArchivos(BASEDATOS);
$cargaPortal->cargarArchivos(CONFIGURACION);
$cargaPortal->cargarArchivos(LENGUAJE);
$cargaPortal->cargarArchivos(LIBRERIA);
$cargaPortal->cargarArchivos(MODULOS);

include_once(GESTEL . "/index.php");

?>