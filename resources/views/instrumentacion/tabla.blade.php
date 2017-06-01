@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Cursos
                </div>
                <div class="panel-body">
                  <table class="table table-hover" style="width: 100%;">
                    <thead>
                      <tr>
                        <th >#</th>
                        <th >Clave</th>
                        <th >Nombre</th>
                        <th >Grupo</th>
                      </tr>
                    </thead>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
