<?php

class Helpers
{
    public static function Str()
    {
        require_once 'Str/Str.php';
    }

    public static function Url()
    {
        require_once 'Url/Url.php';
    }

    public static function start()
    {
        self::Str();
        self::Url();
    }
}
