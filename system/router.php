<?php

class Router
{
    public static function route()
    {
        if (Url::count() == 2
                && Url::segment(1) == '') {
            require_once 'public/controllers/home.php';

            $className  = 'homeController';
            $class = new $className;
            print_r($class->index());

        } elseif (Url::count() == 2
                    && Url::segment(1) != ''
                    && Url::segment(1) != 'home') {
            $autoloader = new autoloader;
            $className  = Str::slug(Url::segment(1));

            print_r($autoloader->init($className.'Controller'));

        } elseif (Url::count() > 2) {
            $autoloader = new autoloader;

            $className      = Str::slug(Url::segment(1));
            $functionName   = Str::slug(Url::segment(2));

            print_r($autoloader->init($className.'Controller', $functionName));
        }
    }
}
