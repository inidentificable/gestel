<?php
/**
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