<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 19/06/18
 * Time: 18:07
 */

require_once 'FactoryDrivers.php';

$driverType = new FactoryDrivers();
$driverType->build(1);
$driverType->build(2);
$driverType->build(3);
$driverType->build(1);
$driverType->build(2);
$driverType->build(3);