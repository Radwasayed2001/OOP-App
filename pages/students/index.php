<?php
include('../../app/bootstrap.php');
require_once path('pages/inc/header.php');
?>
<h1 class="text-white">All Students</h1>
<table class="table mt-4">
<thead>
          <tr>
              <th class="bg-info text-white fs-4" scope="col">name</th>
              <th class="bg-info text-white fs-4" scope="col">age</th>
              <th class="bg-info text-white fs-4" scope="col">Department</th>
              <th class="bg-info text-white fs-4" scope="col">ID</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td scope="row">1</td>
              <td>Radwa</td>
              <td>22</td>
              <td>Computer</td>
          </tr>
          <tr>
              <td scope="row">2</td>
              <td>Ahmed</td>
              <td>22</td>
              <td>IT</td>
          </tr>
          <tr>
              <td scope="row">3</td>
              <td>Rana</td>
              <td>22</td>
              <td>AI</td>
          </tr>
        </tbody>
</table>
      <a href="<?= url('pages/students/create.php') ?>" class="btn btn-outline-info text-white rounded-pill fw-bold fs-5">Add New Student</a>
      <?php include(path('pages/inc/footer.php'));?>
