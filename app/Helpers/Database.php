<?php

namespace App\Helpers;

use Exception;
use mysqli;

class Database{
    private $hostname = DB_HOST;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;
    private $conn;
    public function __construct(){
       $this->connect();
    }
    public function query($query) {
        return $this->conn->query($query);
    }
    public function affected(){
        return $this->conn->affected_rows;
    }
    private function connect() {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);
            if(!$this->conn) {
                throw new Exception("Fail To Connect");
            }
    } 
    public function __destruct(){
        $this->conn->close();
    }
}