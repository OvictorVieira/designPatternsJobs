<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 18/06/18
 * Time: 20:17
 */

class DecoratorCanhao implements Armamento
{
    protected $canhao;

    public function __construct(Armamento $arma)
    {
        $this->canhao = $arma;
    }

    public function getPower()
    {
        $this->canhao->getPower();
    }
}