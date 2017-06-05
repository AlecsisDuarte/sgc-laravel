@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cursos</div>

                <div class="panel-body">

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
                    <tr id="<?php echo $i; ?>">
                       <td>{{$curso->id}}</td>
                       <td>{{$curso->clave}}</td>
                       <td>{{$curso->nombre_materia}}</td>
                       <td>{{$curso->grupo}}</td>
                     </tr>
                    @endforeach

                  </table>


<script>

    var id,clave,table = document.getElementById('table_cursos'),rIndex;

    for(var i = 0; i < table.rows.length; i++){
      table.rows[i].onclick = function()
      {
        rIndex = this.rowIndex;
        id = document.getElementById(rIndex).cells[0].innerText;
        clave = document.getElementById(rIndex).cells[1].innerText;

        document.location.href = "inicio?id="+id+"?clave="+clave;//en vez de inicio a la nueva vista donde se mostrara lo que se debe
        //console.log(document.getElementById(rIndex).cells[0].innerText);
      }
    }

</script>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
