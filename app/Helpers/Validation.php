<?php
namespace App\Helpers;
class Validation {
    public static function sanitization($input) {
        return trim(htmlentities(htmlspecialchars(stripslashes($input))));
    }
    public static function required($input){
        return empty($input);
    }
    public static function minVal($input , $length) {
        return strlen($input) < $length;
    }
    public static function maxVal($input , $length) {
        return strlen($input) > $length;
    }
    public static function unique($table, $column, $value){
        $db = new Database;
        $query = "SELECT * FROM `$table` WHERE `$column`= '$value'";
        $result = $db->query($query);
        return $result->num_rows <= 0;
    }
    public static function validEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}