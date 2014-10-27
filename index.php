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
 * Time: 11:39 PM
 */

//Protege (encapsula) el código interno del resto del sitio

define('ENTRADA', 'Adelante!');

//Define las constantes generales del sistema

define("ARCHIVOS", "Archivos");
define("MOTOR", "Motor");
define("PORTAL", "Portal");

//Se incluye la funcion que permite cargar clases y archivos

include_once(PORTAL . '/Ayudantes/Archivos.php');

//Se incluyen los index de motor y portal para cargar el FRAMEWORK

include_once(MOTOR . "/index.php");
include_once(PORTAL . "/index.php");

?>