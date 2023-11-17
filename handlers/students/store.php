<?php

use App\Classes\Student;
use App\Helpers\ErrorsBag;
use App\Helpers\Request;
use App\Helpers\Session;
use App\Helpers\Validation;

include('../../app/bootstrap.php');
if (Request::isPost()){
    $errors = new ErrorsBag;
    foreach(Request::all() as $key => $value){
        $$key = Validation::sanitization($value);
        
    }
    if (Validation::required($name)){
        $errors->add("Name is required");
    }
    elseif (Validation::minVal($name, 3)) {
        $errors->add("name must be greater than 2 characters");
    }
    elseif (Validation::maxVal($name, 29)) {
        $errors->add("name must be less than 30 characters");
    }
    if (Validation::required($email)){
        $errors->add("Email is required");
    }elseif (!Validation::validEmail($email)){
        $errors->add("Email Not Valid");
    }
    elseif(!Validation::unique('students','email',$email)) {
        $errors->add("Email Already Existed");
    }
    if (Validation::required($address)){
        $errors->add("Address is required");
    }
    if (Validation::required($phone)){
        $errors->add("Phone is required");
    }
    if ($errors->errorsExist()){
        Session::set('errors', $errors->all());
        redirect('pages/students/create.php');
    } else {
        $data = [
            "name"=>$name,
            "email"=>$email,
            "phone"=>$phone,
            "address"=>$address
        ];
        if(Student::create($data)){
            Session::set('success', "Student Added Successfully");
            redirect('pages/students/create.php');
        }
        else {
            $errors->add("Something Went Wrong");
            Session::set('errors', $errors->all());
            redirect('pages/students/create.php');
        }
    }
    
}