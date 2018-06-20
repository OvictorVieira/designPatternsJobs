<?php
/**
 * Created by PhpStorm.
 * User: viih
 * Date: 23/04/2018
 * Time: 21:53
 */

class Broca
{
    private $tipo;

    function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    function setTipo($val)
    {
        $this->tipo = $val;
    }

    function getTipo()
    {
        return $this->tipo;
    }
}