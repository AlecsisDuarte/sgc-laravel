@extends('layouts.nav')

@section ('title') Archivos @endsection

@section('styles')
<link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
<link href="{{ asset('/css/listfile.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/dropzone.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/code.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

              <div class="panel panel-primary">
                <div id="head-table" class="panel-heading"><h3 class="panel-title">Archivos de {{$user_d[0]->username}}!</h3></div>

                <div id="myFiles">

                  @if(Session::has('estado'))
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    Archivo borrado
                  </div>
                  @endif

                  <ul class="list-group">

                    @foreach($files as $file)
                    <div class="row">
                      <div class="col-md-6">

                        <?php  $id = Auth::user()->id;
                          $fileid = $file->id;
                          $dir = 'id_'.$id.'/'.$file->nombre;?>

                          <a href="/pdf?file=uploads/<?php echo($dir)?>" title="Click para ver archivo" class="list-group-item list-group-item-info">

                        <i class="fa fa-file"></i>
                        <span class="badge">{{
                          number_format(doubleval($file->tamaño),2,'.',' ').'KB'}}</span>
                          <span class="glyphicon glyphicon-folder-open"></span>
                          &emsp;{{$file->nombre}}
                        </a>

                      </div>

                      <div>
                        <div title="borrar" onclick="envia_param_file('deletefile',<?php echo($fileid)?>)">
                          <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Borrar">
                            <span class="glyphicon glyphicon-trash"></span></button>
                          </div>
                        </div>

                    </div>
                    @endforeach
                  </ul>

                </div>

              </div>

          </div>
    </div>
</div>

@endsection
