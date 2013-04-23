<?php

class Database {

    public static $link = null;

    public static function getLink () {
        if(static::$link === null) {
            try {
                static::$link = new PDO('mysql:host=localhost;dbname=marnixelmo;charset=utf8', 'root', 'secret');
                static::$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }
            return static::$link;
        }
} 
?>