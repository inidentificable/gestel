<?php if (!defined('ENTRADA')) exit('no puedes acceder directamente a este contenido, vuelve al indice http://www.Gestel.cl');

//Definiendo los paquetes del directorio interno

define('ControlDatos', '/ControlDatos');
define('ControlUbicacion', '/ControlUbicacion');
define('ControlUsuario', '/ControlUsuario');
define('RegistroClienteProveedor', '/RegistroClienteProveedor');
define('RegistroPropiedad', '/RegistroPropiedad');
define('Ventas', '/Ventas');

//función que carga las clases de un paquete determinado

function CargarPaquete($nombreModulo)
{
    // let's get the folders and info...
    $clases = array();

    if (is_dir($nombreModulo)) {
        if ($fp = opendir($nombreModulo)) {
            while (($paquete = readdir($fp)) !== false) {

                //ignora el index y carga todas las otras clases

                if (!strpos($paquete, 'index', 0) === 0)
                    $clases[] = $paquete;
            }
        }
        closedir($fp);
        foreach ($clases as $cargar) {
            include_once $nombreModulo . $cargar;
        }

    }
    return;
}

?>