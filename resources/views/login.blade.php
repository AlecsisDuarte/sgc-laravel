<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Iniciar Sesion</title>
  @include('plantillas.welcome')
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
  <form action="/iniciarSesion" method="POST">
    {{ csrf_field()}}
    <div class="flex-center position-ref full-height">
      <div class="top-right links">
        <a href="{{ url('/') }}"><span class="glyphicon glyphicon-arrow-left"></span>Regresar</a>
      </div>
      <div class="content">
        <div class="sub-title m-b-md">
          Iniciar Sesion
        </div>

        @if($errors->has('message'))
          <div class="row">
            <div class="col-md-12">
              <span class="help-block">
                <strong>What the fuck</strong>
              </span>
            </div>
          </div>
        @endif
        <div class="row">
          <div class="col-md-12">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

              <input type="text"  name="username" class="form-control"  placeholder="Usuario" value="{{ old('username') }}">
              @if ($errors->has('username'))
                <span class="help-block">
                  <strong>{{ $errors->first('username') }}</strong>
                </span>
              @endif
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12 m-b-md">
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input type="password" name="password" class="form-control" placeholder="Contraseña">
              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
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
