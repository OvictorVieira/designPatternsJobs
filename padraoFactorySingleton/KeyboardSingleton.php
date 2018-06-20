<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 19/06/18
 * Time: 17:37
 */

class KeyboardSingleton
{
    public static $KeyboardSingleton;

    public static function instPlugAndPlayKeyboard()
    {
        if(!isset(self::$KeyboardSingleton)) {
            self::$KeyboardSingleton = new KeyboardSingleton();
        }
        echo PHP_EOL . 'Driver do Teclado instanciado.' . PHP_EOL;

        return self::$KeyboardSingleton;
    }

    protected function __construct(){
        //
    }
}