<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion del Curso</title>
        @include('plantillas.welcome')
        <script type="text/javascript" src="{{ asset('js/code.js') }}"></script>
    </head>
    <body>
        <header>
          @if (Route::has('login'))
            <div align="center">
                <div id="mobile" class="links">
                    @if (Auth::check())
                        <a href="{{ url('/inicio') }}">Inicio</a>
                        <a href="{{ url('/cerrarSesion') }}">Cerrar Sesion</a>
                    @else
                        <a href="{{ url('/iniciarSesion') }}">Iniciar Sesion</a>
                    @endif
                </div>
            </div>
          @endif
        </header>

        <div class="flex-center position-ref full-height">
          <div class="top-left links">
            <a href="http://www.itmexicali.edu.mx">Instituto Tecnologico de Mexicali</a>
          </div>

            @if (Route::has('login'))
                    <div id="desk" class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/inicio') }}">Inicio</a>
                            <a href="{{ url('/cerrarSesion') }}">Cerrar Sesion</a>
                        @else
                            <a href="{{ url('/iniciarSesion') }}">Iniciar Sesion</a>
                        @endif
                    </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  Sistema de Gestión de Curso
                </div>
            </div>
        </div>
    </body>
</html>
