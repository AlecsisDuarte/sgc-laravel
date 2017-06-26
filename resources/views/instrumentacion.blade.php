@extends('layouts.nav')

@section ('title') Instrumentacion @endsection

@section('content')
<link rel="stylesheet" align="right" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="{{ asset('js/code.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/dropzone.js') }}"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div id="header-table" class="panel-heading">Cursos</div>

                <div class="panel-body">

                  <!--div class="row" align="right">
                    <form class="form-inline">
                      <input id="search" class="form-control input-lg" name="search" type="text" placeholder="Busqueda por nombre materia">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div-->

                <table id="table_cursos" class="table table-hover" style="width: 100%;">

                    <thead>
                      <tr id="title-table">
                        <th>#</th>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Grupo</th>
                      </tr>
                    </thead>

                    <?php $i = 0;?>

                    @foreach ($cursos as $curso)
                    <?php $i = $i+1;?>
                    <tr class="table-info" id="<?php echo $i; ?>" onmouseover="table_link();">
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


<!-- MODAL OPCIONES -->
<link href="{{ asset('css/tabla_model.css') }}" rel="stylesheet">

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
        <p>Esta modificando:</p>

        <div class="panel panel-default"></div>
        <p>
        Materia: <q id="materia_nombre"></q>
        </p>
        <p>
        Clave: <q id="materia_clave"></q>
        </p>
        <p>
        Grupo: <q id="materia_grupo"></q>
        </p>
        <div class="panel panel-default"></div>

        <div class="container">

            <table id="table_opciones" class="table table-hover">
              <thead>
                Opciones:
              </thead>
                  <tr>
                    <th title="Subir Archivo" onclick="modal_to_upload();">
                      <a href="/upload" class="glyphicon glyphicon-floppy-open" style="font-size:24px;color:blue;"></a>
                    </th>

                    <th title="Ver Archivo">
                      <a href="/pdf?file=archivos_pdf/instru.pdf" class="fa fa-file-pdf-o" style="font-size:24px;color:red"></a>
                    </th>
                  </tr>
                  <tr id="modal-names">
                    <td>
                      subir archivo
                    </td>
                    <td>
                      ver archivo
                    </td>
                  </tr>
              </table>

      </div>

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
