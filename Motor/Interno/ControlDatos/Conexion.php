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
 * Time: 11:12 PM
 */

namespace ControlDatos;

class Conexion
{
    function conecta_base()
    {
        $link = mysql_connect( /*leer desde archivo*/);
        if (!$link) {
            die("No existe Conexion con el motor de Base de Datos" . mysql_error());
        }
        $base = mysql_select_db( /*leer desde archivo*/);
        if (!$base) {
            die("No se encuentra la Base de Datos" . mysql_error());
        }

    }


}

?>