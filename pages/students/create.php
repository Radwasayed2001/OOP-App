<?php
include('../../app/bootstrap.php');
include(path('pages/inc/header.php'));
?>
<div class="row">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-info border">
                        <span class="fs-2 text-white fw-bold">Add Student</span>
                        <a href="<?= url('pages/students/index.php') ?>" class="btn btn-danger float-end">Back</a>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="<?= url('handlers/students/store.php') ?>">
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label text-white">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputName1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPhone1" class="form-label text-white">Phone</label>
                            <input name="phone" type="tel" class="form-control" id="exampleInputPhone1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputAddress1" class="form-label text-white">Address</label>
                            <textarea name="address" class="form-control" id="exampleInputAddress1" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-info border fs-4 rounded-pill text-white w-25">Add</button>
                        </form>
                    </div>
                </div>
            </div>
</div>
<?php include(path('pages/inc/footer.php'));?>
