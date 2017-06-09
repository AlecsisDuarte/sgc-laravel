@extends('layouts.nav')

@section ('title') Instrumentacion @endsection

@section('content')
<script type="text/javascript" src="{{ asset('js/code.js') }}"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cursos</div>

                <div class="panel-body">

                  <!--div class="row" align="right">
                    <form class="form-inline">
                      <input id="search" class="form-control input-lg" name="search" type="text" placeholder="Busqueda por nombre materia">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div-->

                <table id="table_cursos" class="table table-hover" style="width: 100%;">

                    <thead>
                      <tr>
                        <th >#</th>
                        <th >Clave</th>
                        <th >Nombre</th>
                        <th >Grupo</th>
                      </tr>
                    </thead>

                    <?php $i = 0;?>

                    @foreach ($cursos as $curso)
                    <?php $i = $i+1;?>
                    <tr class="table-info" id="<?php echo $i; ?>" onclick="table_link();">
                       <td>{{$curso->id}}</td>
                       <td>{{$curso->clave}}</td>
                       <td>{{$curso->nombre_materia}}</td>
                       <td>{{$curso->grupo}}</td>
                     </tr>
                    @endforeach

                  </table>




                </div>
            </div>
        </div>
    </div>
</div>


<!-- MODAL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">¿Que desea hacer?</h4>
      </div>

      <div class="modal-body">
        <p>Esta modificando;</p>
        Materia: <q id="materia_nombre"></q>, Clave: <q id="materia_clave"></q>, Grupo: <q id="materia_grupo"></q>
        <p>Subir archivo</p>
      </div>

      <div class="modal-footer">
        <button type="button"
           class="btn btn-default"
           data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
@endsection
