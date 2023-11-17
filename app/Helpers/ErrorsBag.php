<?php
namespace App\Helpers;

class ErrorsBag{
    private array $errorsList = [];
    public function add($message){
        $this->errorsList[] = $message;
    }
    public function all() :array {
        return $this->errorsList;
    }
    public function errorsExist():bool {
        return !empty($this->errorsList);
    }
}