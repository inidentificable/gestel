<?php

/**
 * Created by PhpStorm.
 * User: inidentificable
 * Date: 20-10-14
 * Time: 07:25 PM
 */
class Archivos
{
    function listarArchivos($directorioAListar)
    {
        $devuelve = array();
        $listar = null;
        $directorio = opendir($directorioAListar); //ruta a listar
        while ($elemento = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
        {
            if ($elemento != '.' && $elemento != '..' && !is_dir($directorioAListar . $elemento)) //verificamos que no sea un directorio
            {
                $devuelve[] = $directorioAListar . '/' . $elemento;
            }
        }
        closedir($directorio);
        return $devuelve;
    }

    function cargarArchivos($directorioAListar)
    {
        $devuelve = array();
        $listar = null;
        $directorio = opendir($directorioAListar); //ruta a listar
        while ($elemento = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
        {
            if ($elemento != '.' && $elemento != '..' && !is_dir($directorioAListar . $elemento)) //verificamos que no sea un directorio
            {
                $devuelve[] = $directorioAListar . '/' . $elemento;
            }
        }
        closedir($directorio);
        $x = 0;
        foreach ($devuelve as $cargar) {
            include_once $devuelve[$x];
            $x++;
        }
    }

    function cargarPaqueteRecursivo($direccionAListar)
    {
        $listadoClases = array();
        $listar = null;
        $directorio = opendir($direccionAListar); //ruta a listar
        while ($elemento = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
        {
            if ($elemento != '.' && $elemento != '..' && !is_dir($direccionAListar . $elemento)) //verificamos que no sea un directorio
            {
                if (!strpos($elemento, 'index', 0) === 0 && strpos($elemento, '.php') !== false) {
                    $listadoClases[] = $direccionAListar . '/' . $elemento;
                }
            } elseif ($elemento == '.') {
                $this->cargarPaqueteRecursivo($direccionAListar . '/' . $elemento);
            }
        }
        closedir($directorio);
        $x = 0;
        foreach ($listadoClases as $cargar) {
            include_once $listadoClases[$x];
            $x++;
        }
    }
}