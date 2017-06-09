@extends('layouts.nav')

@section('content')
<div>
  <button class="btn btn-info" data-toggle="modal" data-target="#myModal">ABRIR</button>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">The Sun Also Rises</h4>
      </div>

      <div class="modal-body">
        <p>
        Please confirm you would like to add
        <b><span id="fav-title">The Sun Also Rises</span></b>
        to your favorites list.
        </p>
      </div>

      <div class="modal-footer">
        <button type="button"
           class="btn btn-default"
           data-dismiss="modal">Close</button>
      </div>

      <script type="text/javascript">
          $(window).load(function(){
              $('#myModal').modal('show');
          });
      </script>

    </div>
  </div>
</div>
@endsection
