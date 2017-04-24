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
                        <a href="<?php echo e(url('/home')); ?>">Inicio</a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>">Iniciar Sesion</a>
                        <!-- <a href="<?php echo e(url('/register')); ?>">Registrarme</a> -->
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                  Sistema de Gestión de Curso
                </div>

                 <div class="links">
                    <!-- <a href="https://laravel.com/docs">Documentación</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>
            </div>
        </div>
    </body>
</html>
