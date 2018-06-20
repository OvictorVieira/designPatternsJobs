<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 01/06/18
 * Time: 18:19
 */

require_once "Armamento.php";

class canhaoPlasma implements Armamento
{
    private $incorporacao = 0;
    private $canhaoPlasma = ['10','20','30'];

    public function getPower()
    {

        if($this->incorporacao < 3) {
            $armaPower = $this->canhaoPlasma[$this->incorporacao];
            echo "Canhão Plasma - PODER NÍVEL: " . $armaPower . PHP_EOL;
        }
        else {
            echo "A Nave possui o máximo (3) de canhões do tipo Plasma suportado.";
        }

        $this->incorporacao += 1;

        return $armaPower;
    }
}