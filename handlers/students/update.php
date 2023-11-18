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
    if (Validation::required($address)){
        $errors->add("Address is required");
    }
    if (Validation::required($phone)){
        $errors->add("Phone is required");
    }
    if ($email!=$old_email){
        if(!Validation::unique('students','email',$email)) {
            $errors->add("Email Already Existed");
        }
    }
    if ($errors->errorsExist()){
        Session::set('errors', $errors->all());
        redirect('pages/students/edit.php?id='.$id);
    } else {
        $data = [
            "id"=>$id,
            "name"=>$name,
            "email"=>$email,
            "phone"=>$phone,
            "address"=>$address
        ];
        
        if(Student::update($data)){
            Session::set('success', "Student Updated Successfully");
            redirect('pages/students/edit.php?id='.$id);
        }
        else {
            $errors->add("Something Went Wrong");
            Session::set('errors', $errors->all());
            redirect('pages/students/index.php');
        }
    }
    
}