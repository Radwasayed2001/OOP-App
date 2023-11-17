<?php

use App\Classes\Student;
use App\Helpers\Database;
include('../../app/bootstrap.php');
require_once path('pages/inc/header.php');
$db = new Database;
$students = Student::getAll();
?>
<h1 class="text-white">All Students</h1>
<table class="table mt-4">
<thead>
          <tr>
              <th class="bg-info text-white fs-4" scope="col">ID</th>
              <th class="bg-info text-white fs-4" scope="col">Name</th>
              <th class="bg-info text-white fs-4" scope="col">Phone</th>
              <th class="bg-info text-white fs-4" scope="col">Email</th>
              <th class="bg-info text-white fs-4" scope="col">Address</th>
              <th colspan="2" class="bg-info text-white fs-4" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student): ?>
          <tr>
              <td scope="row"><?= $student['id'] ?></td>
              <td><?= $student['name'] ?></td>
              <td><?= $student['phone'] ?></td>
              <td><?= $student['email'] ?></td>
              <td><?= $student['address'] ?></td>
              <td><a href="<?= url("pages/students/edit.php?id={$student['id']}") ?>" class="btn btn-primary text-white">Edit</a></td>
              <td><a href="<?= url("handlers/students/destroy.php?id={$student['id']}") ?>" class="btn btn-danger">Remove</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
</table>
      <a href="<?= url('pages/students/create.php') ?>" class="btn btn-outline-info text-white rounded-pill fw-bold fs-5">Add New Student</a>
      <?php include(path('pages/inc/footer.php'));?>
