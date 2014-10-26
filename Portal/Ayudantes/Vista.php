<?php
/**
 * Created by PhpStorm.
 * User: inidentificable
 * Date: 26-10-14
 * Time: 03:02 AM
 */

include_once(AYUDANTES . "/Archivos.php");

class Vista
{

    private $directorioCss;
    private $directorioJs;
    private $directorioLetras;
    private $listados;

    public function Vista($css, $js, $letras)
    {
        $this->directorioCss = $css;
        $this->directorioJs = $js;
        $this->directorioLetras = $letras;
        $this->listados = new Archivos();
    }

    public function listarCss()
    {
        $listadoCss = (array)$this->listados->listarArchivos($this->directorioCss);
        echo '<!--  Seccion ingreso css -->';
        $x = 0;
        foreach ($listadoCss as $listando) {
            echo '<link rel="stylesheet" type="text/css" href="' . $listadoCss[$x] . '" >';
            $x++;
        }
    }

    public function listarJs()
    {
        $listadoJs = (array)$this->listados->listarArchivos($this->directorioJs);
        echo '<!--  Seccion ingreso js -->';
        $x = 0;
        foreach ($listadoJs as $listando) {
            echo '<script src="' . $listadoJs[$x] . '"></script>';
            $x++;
        }
    }

    public function listarLetras()
    {
        $listadoLetras = (array)$this->listados->listarArchivos($this->directorioLetras);
        echo '<!--  Seccion ingreso letras -->';
        $x = 0;
        foreach ($listadoLetras as $listando) {
            echo '<link href="' . $listadoLetras[$x] . '" rel="stylesheet" type="text/css">';
            $x++;
        }
    }

} 