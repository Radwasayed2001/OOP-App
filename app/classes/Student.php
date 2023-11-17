<?php

namespace App\Classes;
use App\Helpers\Database;

class Student{
    public static function create($data) :bool{
        $db = new Database;
        $query = "INSERT INTO `students`(`name`, `email`, `phone`, `address`) VALUES ('{$data['name']}','{$data['email']}','{$data['phone']}','{$data['address']}')";
        $result = $db->query($query);
        return $db->affected() > 0;
    }
    public static function delete($id) :bool{
        $db = new Database;
        $query = "DELETE FROM `students` WHERE `id` = $id";
        $result = $db->query($query);
        return $db->affected() > 0;
    }
    public static function getAll(){
        $db = new Database;
        $query = "SELECT * FROM `students` ORDER BY `id` DESC";
        $result = $db->query($query);
        $students = $result->fetch_all(MYSQLI_ASSOC);
        return $students;
    }
}