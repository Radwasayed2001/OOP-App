<?php

namespace App\Helpers;

class Request{
    public static function isPost() :bool
    {
        return $_SERVER['REQUEST_METHOD'] == "POST";
    }
}