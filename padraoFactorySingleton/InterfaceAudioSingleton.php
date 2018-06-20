<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 19/06/18
 * Time: 17:37
 */

class InterfaceAudioSingleton
{
    public static $InterfaceAudioSingleton;

    public static function instPlugAndPlayInterfaceAudio()
    {
        if(!isset(self::$InterfaceAudioSingleton)) {
            self::$InterfaceAudioSingleton = new InterfaceAudioSingleton();
        }
        echo PHP_EOL . 'Driver de Interface de Audio instanciado.' . PHP_EOL;
        return self::$InterfaceAudioSingleton;
    }

    protected function __construct(){
        //
    }
}