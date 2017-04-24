<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Iniciar Sesion</title>
  <?php echo $__env->make('plantillas.welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('plantillas.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
  <form action="/login" method="POST">
    <?php echo e(csrf_field()); ?>

    <div class="flex-center position-ref full-height">
      <div class="top-right links">
              <a href="<?php echo e(url('/')); ?>">Regresar</a>
            </div>
      <div class="content">
        <div class="sub-title m-b-md">
          Iniciar Sesion
        </div>


  <!-- if there are login errors, show them here -->
  <?php echo e($errors->first('username')); ?>

  <?php echo e($errors->first('password')); ?>

  <div class="row">
    <div class="col-md-12">

      <input type="text"  name="username" class="form-control"  placeholder="Usuario">
    </div>

  </div>
  <div class="row">
    <div class="col-md-12 m-b-md">

      <input type="password" name="password" class="form-control" placeholder="Contraseña">
    </div>
  </div>
  <div class="row">
<div class="col-md-12">
  <button type="submit" class="btn btn-primary" name="button">Ingresar</button>

</div>

  </div>
  </form>
</div>
</div>
</body>
</html>
