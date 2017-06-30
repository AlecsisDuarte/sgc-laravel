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
                <div class="panel-heading"><h3 class="panel-title">Dropzone File upload whit db</h3></div>

                  <form id="my-dropzone" action="files" method="post" class="dropzone" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <!--input type="file" name="file[]" multiple><br />
                    <input type="submit"-->
                  </form>

              </div>
              <div class="hidden" id="message" style="color:red"></div>
    </div>
</div>

@endsection
