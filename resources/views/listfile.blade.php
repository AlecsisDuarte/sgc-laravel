@extends('layouts.nav')

@section ('title') Upload @endsection

@section('styles')
<link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/dropzone.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">

              <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Mis Archivos!</h3></div>

                <div id="myFiles">

                  <ul class="list-group">

                    @foreach($files as $file)
                    <div class="row">
                      <div class="col-md-12">
                        <?php  $user_session = Auth::user()->username;
                        $id = Auth::user()->id;
                        $dir = $user_session.'id_'.$id.'/'.$file->nombre?>
                          <a href="/pdf?file=uploads/<?php echo($dir)?>" class="list-group-item list-group-item-info">

                        <i class="fa fa-file"></i>
                        <span class="badge">{{
                          number_format(doubleval($file->tamaño),2,'.',' ').'KB'}}</span>
                          {{$file->nombre}}
                        </a>

                      </div>

                    </div>
                    @endforeach
                  </ul>

                </div>

              </div>
    </div>
</div>

@endsection
