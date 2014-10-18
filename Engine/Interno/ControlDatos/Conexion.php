<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.gestel.cl');

/**
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