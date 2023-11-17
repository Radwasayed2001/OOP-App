<?php
namespace App\Helpers;
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
class Session{
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }
    public static function get($key) {
        if (self::has($key)) {
            return $_SESSION[$key];
        }
    }
    public static function unsetSession($key) {
        if (self::has($key)) {
            unset($_SESSION[$key]);
        }
    }
    public static function has($key){
        return isset($_SESSION[$key]);
    }
    public static function flash($key){
        $value = null;
        if (self::has($key)){
            $value = self::get($key);
            self::unsetSession($key);
            return $value;
        }
    }

}