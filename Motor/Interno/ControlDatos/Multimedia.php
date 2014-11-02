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
 * Date: 11-10-14
 * Time: 03:07 PM
 */
class Multimedia
{
    function imagen($archivo)
    {
        $ruta = "../imagenes/" . $archivo;
        if (file_exists($ruta)) {
            $t = getimagesize($ruta);
            return '<img src="' . $ruta . '" border="0" width="' . $t[0] . '" height="' . $t[1] . '" alt="" style="vertical-align: middle;" />';
        }
        return '';

    }

    function espacio($ancho, $alto)
    {
        $ruta = "../imagenes/espacio.png";
        if (file_exists($ruta)) {
            return '<img src="' . $ruta . '" border="0" width="' . $ancho . '" height="' . $alto . '" alt="" />';
        }
        return '';
    }
} 