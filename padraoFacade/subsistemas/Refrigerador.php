<?php
/**
 * Created by PhpStorm.
 * User: viih
 * Date: 23/04/2018
 * Time: 21:53
 */

class Refrigerador
{
    private $potencia;

    function __construct($potencia)
    {
        $this->potencia = $potencia;
    }

    /**
     * @return mixed
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * @param mixed $potencia
     */
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
    }
}