<?php
/**
 * Created by PhpStorm.
 * User: viih
 * Date: 23/04/2018
 * Time: 21:53
 */

class Motor
{
    private $empuxo;
    private $rotacao;

    function __construct($empuxo,$rotacao = '')
    {
        $this->empuxo = $empuxo;
        $this->rotacao = $rotacao;
    }

    /**
     * @return mixed
     */
    public function getEmpuxo()
    {
        return $this->empuxo;
    }

    /**
     * @param mixed $empuxo
     */
    public function setEmpuxo($empuxo)
    {
        $this->empuxo = $empuxo;
    }

    /**
     * @return mixed
     */
    public function getRotacao()
    {
        return $this->rotacao;
    }

    /**
     * @param mixed $rotacao
     */
    public function setRotacao($rotacao)
    {
        $this->rotacao = $rotacao;
    }


}