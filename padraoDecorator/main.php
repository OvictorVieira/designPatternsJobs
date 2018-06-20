<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 01/06/18
 * Time: 18:17
 */

require_once 'Armamento.php';
require_once 'defaultCanhao.php';
require_once 'canhaoLaser.php';
require_once 'canhaoPlasma.php';
require_once 'DecoratorCanhao.php';

$basico = new defaultCanhao();
$laser = new canhaoLaser();
$plasma = new canhaoPlasma();

$nave = new DecoratorCanhao($basico);

$nave->getPower();
$nave->getPower();
$nave->getPower();
$nave->getPower();

$nave = new DecoratorCanhao($laser);

$nave->getPower();
$nave->getPower();
$nave->getPower();

$nave = new DecoratorCanhao($plasma);

$nave->getPower();
$nave->getPower();
$nave->getPower();
