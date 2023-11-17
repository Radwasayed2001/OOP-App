<?php

use App\Classes\Student;
use App\Helpers\ErrorsBag;
use App\Helpers\Request;
use App\Helpers\Session;
use App\Helpers\Validation;

include('../../app/bootstrap.php');
if (Request::isGET()){
    $errors = new ErrorsBag;
    if (Request::has('id')){
        $id = Request::get('id');
        if(Student::delete($id)){
            Session::set('success', "Student Deleted Successfully");
            redirect('pages/students/index.php');
        }
        else {
            $errors->add("Something Went Wrong");
            Session::set('errors', $errors->all());
            redirect('pages/students/index.php');
        }
    }
    else {
        Session::set('errors', "Missing id form url");
        redirect('pages/students/index.php');
    }
     
    
}