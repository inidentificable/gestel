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
 * Date: 11-10-14
 * Time: 04:27 PM
 */
class Cliente
{
    function clienteAsociado($cod)
    {
        if (!empty($cod)) {
            conecta_base();
            $sql1 = "SELECT nombre_user, apellido_user FROM usuario WHERE activo_user = 1 AND id_usuario= " . $cod;
            $res1 = mysql_query($sql1);
            if (mysql_num_rows($res1) == 1) {
                $dato = mysql_fetch_array($res1);
                $html = $dato[0] . " " . $dato[1];
            } else {
                $html = "Sin due&ntilde;o";
            }
            return $html;
        }
    }
} 