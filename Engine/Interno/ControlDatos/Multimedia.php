<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.gestel.cl');

/**
 * Created by PhpStorm.
 * User: inidentificable
 * Date: 11-10-14
 * Time: 03:07 PM
 */

namespace ControlDatos;


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