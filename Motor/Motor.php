<?php

/**
 * Created by PhpStorm.
 * User: inidentificable
 * Date: 03-11-14
 * Time: 11:56 AM
 */
class Motor
{
    public $quien;
    public $que;
    public $donde;
    public $cuando;
    public $porque;
    public $como;

    public function Motor()
    {
        $this->quien = new Usuario();
        $this->que = new Accion();
        $this->donde = new Modulo();
        $this->cuando = new Tiempo();
        $this->porque = new Argumento();
        $this->como = new Funcion();
    }

    public function procesaPeticion()
    {

    }


} 