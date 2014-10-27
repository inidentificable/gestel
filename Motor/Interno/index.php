<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.Gestel.cl');

define('CONTROLDATOS', INTERNO . '/ControlDatos');
define('CONTROLUBICACION', INTERNO . '/ControlUbicacion');
define('CONTROLUSUARIO', INTERNO . '/ControlUsuario');
define('REGISTROCLIENTEPROVEEDOR', INTERNO . '/RegistroClienteProveedor');
define('REGISTROPROPIEDAD', INTERNO . '/RegistroPropiedad');
define('VENTAS', INTERNO . '/Ventas');

$cargarInterno = new Archivos();
$cargarInterno->listarArchivos(CONTROLDATOS);
$cargarInterno->listarArchivos(CONTROLUBICACION);
$cargarInterno->listarArchivos(CONTROLUSUARIO);
$cargarInterno->listarArchivos(REGISTROPROPIEDAD);
$cargarInterno->listarArchivos(VENTAS);

?>
