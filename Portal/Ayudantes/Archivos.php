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
        $directorio = opendir($directorioAListar); //ruta a listar
        $archivo = readdir($directorio);
        foreach ($archivo as $leyendo) //obtenemos un archivo y luego otro sucesivamente
        {
            if (is_file($archivo)) //verificamos que no sea un directorio
            {
                $listadoArchivos = $archivo;
            }
        }
        return $listadoArchivos;
    }
} 