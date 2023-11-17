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
    public static function all(){
        return $_REQUEST;
    }
}