<?php
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
        $link = mysql_connect("localhost", "root", "123456");
        if (!$link) {
            die("No existe Conexion con el motor de Base de Datos" . mysql_error());
        }
        $base = mysql_select_db("gestel");
        if (!$base) {
            die("No se encuentra la Base de Datos" . mysql_error());
        }

    }

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

    function crearBotonBuscar()
    {
        $textoBoton = "Buscar";
        $nombreBoton = "buscar";
        $fxJS = "vBuscar(this.form)";
        $html = "<input type=\"button\" name=\"" . $nombreBoton . "\" value=\"" . $textoBoton . "\" class=\"boton\" onclick=\"" . $fxJS . "\" />\n<br /><br />\n";
        return $html;
    }

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

    function usuarioAsociado($cod)
    {
        if (!empty($cod)) {
            conecta_base();
            $sql2 = "SELECT nombre_user, apellido_user FROM usuario WHERE activo_user = 1 AND id_usuario = " . $cod;
            $res2 = mysql_query($sql2);
            if (mysql_num_rows($res2) == 1) {
                $dato = mysql_fetch_array($res2);
                $html = $dato[0] . " " . $dato[1];
            } else {
                $html = "Sin usuario";
            }
            return $html;
        }
    }

    function pacienteAsociado($cod)
    {
        if (!empty($cod)) {
            conecta_base();
            $sql3 = "SELECT nombre_mas FROM mascota WHERE estado_mas = 1 AND id_mascota = " . $cod;
            $res3 = mysql_query($sql3);
            if (mysql_num_rows($res3) == 1) {
                $dato = mysql_fetch_array($res3);
                $html = $dato[0];
            } else {
                $html = "Sin paciente";
            }
            return $html;
        }
    }

    function sucursalAsociada($codigo)
    {
        if (!empty($codigo)) {
            conecta_base();
            $sql4 = "SELECT sucursal FROM sucursales WHERE codigo_sucursal = '" . $codigo . "'";
            $res4 = mysql_query($sql4);
            if (mysql_num_rows($res4) == 1) {
                $dato = mysql_fetch_array($res4);
                $html = $dato[0];
            } else {
                $html = "Sin sucursal";
            }
            return $html;
        }
    }

    function horaAsociada($codigo)
    {
        if (!empty($codigo)) {
            conecta_base();
            $sql5 = "SELECT hora FROM horario WHERE id_hora = " . $codigo;
            $res5 = mysql_query($sql5);
            if (mysql_num_rows($res5) == 1) {
                $dato = mysql_fetch_array($res5);
                $html = $dato[0];
            } else {
                $html = "Sin hora";
            }
            return $html;
        }
    }

    function especieAsociada($cod)
    {
        if (!empty($cod)) {
            conecta_base();
            $sql6 = "SELECT * FROM tipo_mascota WHERE estado_tipo = 1 AND id_tipo_mas = " . $cod;
            $res6 = mysql_query($sql6);
            if (mysql_num_rows($res6) == 1) {
                $dato = mysql_fetch_array($res6);
                $html = $dato["nombre_tipo_mas"];
            } else {
                $html = "Sin tipo de mascota";
            }
            return $html;
        }
    }

    function razaAsociada($cod)
    {
        if (!empty($cod)) {
            conecta_base();
            $sql7 = "SELECT raza FROM raza WHERE estado_raza = 1 AND id_raza = " . $cod;
            $res7 = @mysql_query($sql7);
            if (@mysql_num_rows($res7) == 1) {
                $dato = mysql_fetch_array($res7);
                $html = $dato[0];
            } else {
                $html = "--";
            }
            return $html;
        }
    }

    function colorAsociado($cod)
    {
        if (!empty($cod)) {
            conecta_base();
            $sql8 = "SELECT color FROM color WHERE estado_color = 1 AND id_color = " . $cod;
            $res8 = mysql_query($sql8);
            if (mysql_num_rows($res8) == 1) {
                $dato = mysql_fetch_array($res8);
                $html = $dato[0];
            } else {
                $html = "";
            }
            return $html;
        }

    }

    function crearListaClientes($nombre_campo, $sel = 0)
    {
        $html = "<select name=\"" . $nombre_campo . "\" class=\"lista_form\">\n";
        $html .= "<option value=\"0\"";
        if ($sel == 0) $html .= " selected=\"selected\"";
        $html .= ">Seleccione:</option>\n";
        $html .= "<option value=\"\" onclick=\"location.href='index.php?modulo=clientes&amp;accion=1&amp;origen=pacientes'\" style=\"font-weight:bold\">Agregar cliente...</option>";

        conectar_bd();
        $sql9 = "SELECT * FROM clientes WHERE activo_cliente = 1 ORDER BY apellido_cliente";
        $res9 = mysql_query($sql9);
        while ($dato = mysql_fetch_array($res9)) {
            $html .= "<option value=\"" . $dato["id_cliente"] . "\"";
            if ($sel != 0 && $sel == $dato["id_cliente"]) {
                $html .= " selected=\"selected\"";
            }
            $html .= ">" . $dato["apellido_cliente"] . ", " . $dato["nombre_cliente"] . "</option>\n";
        }
        $html .= "</select>\n";
        return $html;
    }

    function hay_inyeccion()
    {
        if (substr_count($_SERVER["QUERY_STRING"], "'") == 0)
            return false;
        return true;
    }

    function varEsOK($variable)
    {
        if (isset($variable) && !empty($variable))
            return true;
        return false;
    }

    function incluir($archivo)
    {
        if (file_exists($archivo)) {
            include($archivo);
        }
    }
}

?>