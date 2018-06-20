<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 18/05/18
 * Time: 17:58
 */

class Bomba
{
    private $qntd;

    function __construct($qnt)
    {
        $this->qntd = $qnt;
    }

    /**
     * @return mixed
     */
    public function getQntd()
    {
        return $this->qntd;
    }

    /**
     * @param mixed $qntd
     */
    public function setQntd($qntd)
    {
        $this->qntd = $qntd;
    }

}