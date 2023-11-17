<?php
include('./app/bootstrap.php');
include(path('pages/inc/header.php'));
?>
<div class="container  d-lg-flex justify-content-between align-items-center">
        <div class="des py-5 px-lg-5 mt-lg-5">
            <h3 class="text-white fw-bold fs-1 pt-5">
            A better way to learn to code websites, apps, and games
            </h3>
            <p class="text-white-50 fs-5 pt-5">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa ex voluptas incidunt magni. Blanditiis saepe, numquam quis ea ipsa ex repellendus eum nam sequi excepturi quod soluta, cum facere consequuntur!
            </p>
            <button type="button" class="btn btn-outline-info btn-lg fs-4 fw-bold my-5 text-white rounded-pill">View all courses</button>
        </div>
        <div class="image py-5" style="width:70%">
            <img src="<?= url('assets/images/background(1).png') ?>" style="width: 100%;" >
    </div>
</div>
<?php include(path('pages/inc/footer.php'));?>
