<?php

class Url
{
    public static function current()
    {
        $pageURL = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        
        return $pageURL;
    }

    public static function segment($num)
    {
        if (!is_numeric($num)) {
            return 'URL::segment() expects a number';
        }

        $value = explode('/', self::current());

        return $value[$num];
    }

    public static function count()
    { 
        // print_r(self::current());
        return count(explode('/', self::current()));
    }
}