<?php

class autoloader {

	public static $loader;

    public static function init($className, $functionName = null)
    {   
        if ($functionName == null) {
            if (preg_match('/Controller/', $className)) {
                self::controller($className);
            }
        } elseif ($functionName != null) {
            if (preg_match('/Controller/', $className)) {
                self::controller($className, $functionName);
            }
        }
    }

	public static function controller($className, $functionName = null)
    {   
        $class = substr($className, 0, -10);

        require_once 'public/controllers/'.$class.'.php';

        if ($functionName != null) {
            $class = new $className;
            print_r($class->$functionName());
        } elseif ($functionName == null) {
            $class = new $className;
            print_r($class->index());
        }
    }

}