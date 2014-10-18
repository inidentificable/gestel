<?php

/**
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