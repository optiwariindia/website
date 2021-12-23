<?php

namespace optiwariindia;

class session
{
    private static $instance;
    private function __construct()
    {
        session_start();
    }
    public static function init()
    {
        if (!isset(self::$instance))
            self::$instance = new session();
        return true;
    }
    public static function set($var,$value){
        $_SESSION[$var]=$value;
    }
    public static function get($var){
        return $_SESSION[$var]??false;
    }
}
