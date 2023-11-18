<?php

use App\Classes\Student;
use App\Helpers\Request;
use App\Helpers\Session;

include('../../app/bootstrap.php');
include(path('pages/inc/header.php'));
if (!Request::isGET()){
    Session::set('errors', ["Something Went Wrong"]);
    redirect('pages/students/index.php');
}
if (!Request::has('id')){
    Session::set('errors', ["Missing id From url"]);
    redirect('pages/students/index.php');
}
$id = Request::get('id');
$student = Student::getById($id)[0];
if (empty($student)){
    Session::set('errors', ["Not Found"]);
    redirect('pages/students/index.php');
}
?>
<div class="row">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-info border">
                        <span class="fs-2 text-white fw-bold">Edit Student</span>
                        <a href="<?= url('pages/students/index.php') ?>" class="btn btn-danger float-end">Back</a>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="<?= url('handlers/students/update.php') ?>">
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label text-white">Name</label>
                            <input value="<?=$student['name']?>" name="name" type="text" class="form-control" id="exampleInputName1" required>
                            <input type="hidden" name="id" value="<?=$student['id']?>">
                            <input type="hidden" name="old_email" value="<?=$student['email']?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                            <input value="<?=$student['email']?>" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPhone1" class="form-label text-white">Phone</label>
                            <input value="<?=$student['phone']?>" name="phone" type="tel" class="form-control" id="exampleInputPhone1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputAddress1" class="form-label text-white">Address</label>
                            <textarea name="address" class="form-control" id="exampleInputAddress1" required><?=$student['address']?></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-info border fs-4 rounded-pill text-white w-25">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
</div>
<?php include(path('pages/inc/footer.php'));?>
