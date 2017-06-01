@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cursos</div>

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

                    <?php
                      $cursos = DB::table('cursos')->orderBy('id')->get();
                    ?>
                    @foreach ($cursos as $curso)
                    <tr>
                       <th><a href="{{ url('/inicio') }}">{{$curso->id}}</a></th><!--cambiara url por el que corresponde-->
                       <th>{{$curso->clave}}</th>
                       <th>{{$curso->Nombre}}</th>
                       <th>{{$curso->Grupo}}</th>
                     </tr>
                    @endforeach

                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
