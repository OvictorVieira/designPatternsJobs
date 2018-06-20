<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 01/06/18
 * Time: 18:19
 */

require_once "Armamento.php";

class canhaoLaser implements Armamento
{
    private $incorporacao = 0;
    private $canhaoLaser = ['5','9','13'];

    public function getPower()
    {

        if($this->incorporacao < 3) {
            $armaPower = $this->canhaoLaser[$this->incorporacao];
            echo "Canhão Laser - PODER NÍVEL: " . $armaPower . PHP_EOL;
        }
        else {
            echo "A Nave possui o máximo (3) de canhões do tipo Laser suportado.";
        }

        $this->incorporacao += 1;

        return $armaPower;
    }
}