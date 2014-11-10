<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.Gestel.cl');

define('INTERNO', MOTOR . '/Interno');
define('EXTERNO', MOTOR . '/Externo');

include_once(INTERNO . '/index.php');
//include_once(EXTERNO . '/index.php');

include_once(MOTOR . '/UsuarioInterno.php');
include_once(MOTOR . '/Modulo.php');
include_once(MOTOR . '/Accion.php');

include_once(MOTOR . '/Motor.php');

$motor = new Motor();
$conexion = new Conexion(localhost, gstl, P2l141987, gestel);

?>