<?php
namespace core;
class App{
    public static $config = [
        // "config" => require "config.php";
    ];
    public static function bind($key,$value){
        static::$config[$key] = $value;
    }
    public static function get($key){
        return static::$config[$key];
    }
}