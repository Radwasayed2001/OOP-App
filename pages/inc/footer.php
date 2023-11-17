
        </div>
            </div>
<script src="<?= url('assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= url('assets/js/all.min.js') ?>"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    <?php

                use App\Helpers\Session;

    if (Session::has('errors')){
      $errors = Session::flash('errors');
      foreach($errors as $error):
      ?>
      alertify.set('notifier','position', 'top-right');
      alertify.error("<?=$error?>");
      <?php
      endforeach;
    }
    elseif (Session::has('success')){
      ?>
      alertify.set('notifier','position', 'top-right');
      alertify.success("<?=Session::flash('success')?>");
      <?php
    }
    ?>
  </script>
  </body>
</html>