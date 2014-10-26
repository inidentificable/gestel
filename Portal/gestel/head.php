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

include_once(AYUDANTES . "/Archivos.php");

$listados = new Archivos();

$listadoCss = (array)$listados->listarArchivos(CSS);
$listadoJs = (array)$listados->listarArchivos(JS);
$listadoLetras = (array)$listados->listarArchivos(LETRAS);

?>
<head>
    <title>GESTEL</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="Sistema de Gestion Inmobiliaria"/>
    <meta name="keywords" content="inmobiliaria"/>

    <!--  Seccion ingreso js -->

    <?php
    $x = 0;
    foreach ($listadoJs as $listando) {
        echo '<script src="' . $listadoJs[$x] . '"></script>';
        $x++;
    }
    ?>

    <!--  Seccion ingreso css -->

    <?php
    $x = 0;
    foreach ($listadoCss as $listando) {
        echo '<link rel="stylesheet" type="text/css" href="' . $listadoCss[$x] . '" >';
        $x++;
    }
    ?>

    <!--  Seccion ingreso fonts -->

    <?php
    $x = 0;
    foreach ($listadoLetras as $listando) {
        echo '<link href="' . $listadoLetras[$x] . '" rel="stylesheet" type="text/css">';
        $x++;
    }
    ?>

</head>