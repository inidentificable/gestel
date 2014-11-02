<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.Gestel.cl');

define('CONTROLDATOS', INTERNO . '/ControlDatos');
define('CONTROLUBICACION', INTERNO . '/ControlUbicacion');
define('CONTROLUSUARIO', INTERNO . '/ControlUsuario');
define('REGISTROCLIENTEPROVEEDOR', INTERNO . '/RegistroClienteProveedor');
define('REGISTROPROPIEDAD', INTERNO . '/RegistroPropiedad');
define('VENTAS', INTERNO . '/Ventas');

$cargarInterno = new Archivos();
$cargarInterno->cargarArchivos(CONTROLDATOS);
$cargarInterno->cargarArchivos(CONTROLUBICACION);
$cargarInterno->cargarArchivos(CONTROLUSUARIO);
$cargarInterno->cargarArchivos(REGISTROPROPIEDAD);
$cargarInterno->cargarArchivos(VENTAS);

?>
