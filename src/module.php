<?php

namespace optiwariindia;

class module extends \optiwariindia\database
{
    private static $db;
    private static $config;
    public static function init()
    {
        if (!isset(self::$config)) return false;
        if (!isset(self::$db))
            self::$db = new module(self::$config);
        return self::$db;
    }
    public static function config($config){
        self::$config=$config;
    }
    public static function trace($var){
        header(" content-type: application/json");
        echo json_encode($var);
        die;
    }
}
