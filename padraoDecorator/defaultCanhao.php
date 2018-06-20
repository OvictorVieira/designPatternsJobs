<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 01/06/18
 * Time: 18:15
 */

require_once "Armamento.php";

class defaultCanhao implements Armamento
{
    private $incorporacao = 0;
    private $defaultCanhao = ['1','3','5'];

    public function getPower()
    {

        if($this->incorporacao < 3) {
            $armaPower = $this->defaultCanhao[$this->incorporacao];
            echo "Canhão Básico - PODER NÍVEL: " . $armaPower . PHP_EOL;
        }
        else {
            echo "A Nave possui o máximo (3) de canhões do tipo Básico suportado.";
        }

        $this->incorporacao += 1;

        return $armaPower;
    }
}