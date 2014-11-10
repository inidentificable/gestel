<?php

/**
 * Created by PhpStorm.
 * User: inidentificable
 * Date: 03-11-14
 * Time: 11:59 AM
 */
class Accion
{
    public $que;
    public $aDonde;

    public function gatillarEvento()
    {
        switch ($this->que) {
            case 'insertar':
                return 1;
                break;
            case 'eliminar':
                return 2;
                break;
            case 'modificar':
                return 3;
                break;
            default:
                return 0;
        }
    }
} 