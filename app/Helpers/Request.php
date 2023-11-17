<?php

namespace App\Helpers;

class Request{
    public static function isPost() :bool
    {
        return $_SERVER['REQUEST_METHOD'] == "POST";
    }
    public static function isGET() :bool
    {
        return $_SERVER['REQUEST_METHOD'] == "GET";
    }
    public static function has($key):bool {
        if (isset($_REQUEST[$key])){
            return true;
        }
        return false;
    }
    public static function get($key) {
        if (self::has($key)){
            return $_REQUEST[$key];
        }
    }
    public static function all(){
        return $_REQUEST;
    }
}