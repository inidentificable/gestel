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
 * Time: 11:45 PM
 */

include_once(LIBRERIA . "/Archivos.php");

$listados = new Archivos();

$listadoCss = $listados->listarArchivos(CSS);
$listadoJs = $listados->listarArchivos(JS);
$listadoLetras = $listados->listarArchivos(LETRAS);

?>
<head>
    <title>GESTEL</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="Sistema de Gestion Inmobiliaria"/>
    <meta name="keywords" content="inmobiliaria"/>

    <!--  Seccion ingreso js -->

    <?php
    foreach ($listadoJs as $listando) {
        echo '<script src="' . JS . '/' . $listadoJs . '"></script>';
    }
    ?>

    <!--  Seccion ingreso css -->

    <?php
    foreach ($listadoCss as $listando) {
        echo '<link rel="stylesheet" href="' . CSS . '/' . $listadoCss . '" />';
    }
    ?>

    <!--  Seccion ingreso fonts -->

    <?php
    foreach ($listadoLetras as $listando) {
        echo '<link href="' . LETRAS . ´ / ´ . $listadoLetras . '" rel="stylesheet" type="text/css">';
    }
    ?>

</head>