<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 19/06/18
 * Time: 17:49
 */

abstract class AbstractFactoryDrivers
{
    abstract function build(int $type);
}