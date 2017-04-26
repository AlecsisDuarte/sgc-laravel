<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion del Curso</title>
        <?php echo $__env->make('plantillas.welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <div class="top-left links">
            <a href="http://www.itmexicali.edu.mx">Instituto Tecnologico de Mexicali</a>
          </div>
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/inicio')); ?>">Inicio</a>
                        <a href="<?php echo e(url('/cerrarSesion')); ?>">Cerrar Sesion</a>

                    <?php else: ?>
                        <a href="<?php echo e(url('/iniciarSesion')); ?>">Iniciar Sesion</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                  Sistema de Gestión de Curso
                </div>
            </div>
        </div>
    </body>
</html>
