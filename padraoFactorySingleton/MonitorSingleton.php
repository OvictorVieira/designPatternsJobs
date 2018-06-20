<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 19/06/18
 * Time: 17:37
 */

class MonitorSingleton
{
    public static $MonitorSingleton;

    public static function instPlugAndPlayMonitor()
    {
        if(!isset(self::$MonitorSingleton)) {
            self::$MonitorSingleton = new MonitorSingleton();
        }
        echo PHP_EOL . 'Driver do Monitor instanciado.' . PHP_EOL;
        return self::$MonitorSingleton;
    }

    protected function __construct(){
        //
    }
}