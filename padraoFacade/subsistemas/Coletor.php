<?php
/**
 * Created by PhpStorm.
 * User: viih
 * Date: 23/04/2018
 * Time: 21:53
 */

class Coletor
{
    private $value;

    function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}