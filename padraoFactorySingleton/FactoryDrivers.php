<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 18/06/18
 * Time: 18:31
 */

require_once "MonitorSingleton.php";
require_once "AbstractFactoryDrivers.php";
require_once "InterfaceAudioSingleton.php";
require_once "KeyboardSingleton.php";

class FactoryDrivers extends AbstractFactoryDrivers
{
    public function build(int $type){

        switch ($type) {

            case '1':
                return MonitorSingleton::instPlugAndPlayMonitor();
                break;
            case '2':
                return KeyboardSingleton::instPlugAndPlayKeyboard();
                break;
            case '3':
                return InterfaceAudioSingleton::instPlugAndPlayInterfaceAudio();
                break;
            default:
                return MonitorSingleton::instPlugAndPlayMonitor();
                break;
        }

    }

}