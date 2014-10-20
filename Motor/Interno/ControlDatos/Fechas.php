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
 * Time: 03:05 PM
 */

namespace ControlDatos;


class Fechas
{
    function fecha_hoy()
    {
        $fecha = date("d-m-Y");
        return $fecha;
    }

    function hora()
    {
        $hora = date("H:i:s");
        return $hora;
    }

    function fecha_es($fecha)
    {
        $ano = substr($fecha, 0, 4);
        $mes = substr($fecha, 5, 2);
        $dia = substr($fecha, 8, 2);

        $fecha = $dia . "-" . $mes . "-" . $ano;

        return $fecha;
    }

    function fecha_bd($fecha)
    {
        $dia = substr($fecha, 0, 2);
        $mes = substr($fecha, 3, 2);
        $ano = substr($fecha, 6, 4);

        $fecha = $ano . "-" . $mes . "-" . $dia;

        return $fecha;
    }
} 