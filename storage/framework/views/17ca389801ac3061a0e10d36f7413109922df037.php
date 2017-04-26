<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Iniciar Sesion</title>
  <?php echo $__env->make('plantillas.welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

</head>
<body>
  <form action="/iniciarSesion" method="POST">
    <?php echo e(csrf_field()); ?>

    <div class="flex-center position-ref full-height">
      <div class="top-right links">
        <a href="<?php echo e(url('/')); ?>"><span class="glyphicon glyphicon-arrow-left"></span>Regresar</a>
      </div>
      <div class="content">
        <div class="sub-title m-b-md">
          Iniciar Sesion
        </div>

        <?php if($errors->has('message')): ?>
          <div class="row">
            <div class="col-md-12">
              <span class="help-block">
                <strong>What the fuck</strong>
              </span>
            </div>
          </div>
        <?php endif; ?>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

              <input type="text"  name="username" class="form-control"  placeholder="Usuario" value="<?php echo e(old('username')); ?>">
              <?php if($errors->has('username')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('username')); ?></strong>
                </span>
              <?php endif; ?>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12 m-b-md">
            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
              <input type="password" name="password" class="form-control" placeholder="Contraseña">
              <?php if($errors->has('password')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button">Ingresar</button>
          </div>

        </div>
      </div>
    </div>
  </form>
</body>
</html>
