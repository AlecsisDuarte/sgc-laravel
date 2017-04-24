<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion del Curso</title>
        @include('plantillas.welcome')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <div class="top-left links">
            <a href="http://www.itmexicali.edu.mx">Instituto Tecnologico de Mexicali</a>
          </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ url('/login') }}">Iniciar Sesion</a>
                        <!-- <a href="{{ url('/register') }}">Registrarme</a> -->
                    @endif
                </div>
            @endif

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
