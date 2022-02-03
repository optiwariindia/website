<?php
namespace optiwariindia\website;

class request{
    public static function get($key){
        if(isset($_GET[$key])){
            return $_GET[$key];
        }
        return false;
    }
    public static function post($key){
        if(isset($_POST[$key]))return $_POST[$key];
        return false;
    }
    public static function action(){
        if(!isset($_REQUEST['action'])){
            return false;
        }

        return $_REQUEST['action'];
    }
    public static function inputs(){
        $inputs=$_REQUEST;
        unset($inputs['action']);
        return $inputs;
    }
    public static function client(){
        return $_SERVER['REMOTE_ADDR'];
    }
    public static function method(){
        return $_SERVER['REQUEST_METHOD'];
    }
    public static function timestamp(){
        return $_SERVER['REQUEST_TIME'];
    }
    public static function useragent(){
        return $_SERVER['HTTP_USER_AGENT'];
    }
    public static function url(){
        $url=explode('/',self::texturl());
        array_shift($url);
        return $url;
    }
    public static function texturl(){
        $url=explode('?',$_SERVER['REQUEST_URI']);
        return $url[0];
    }
}