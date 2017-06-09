function table_link(){

    var id,clave,table = document.getElementById('table_cursos'),rIndex;

    for(var i = 0; i < table.rows.length; i++){
      table.rows[i].onclick = function()
      {
        rIndex = this.rowIndex;
        id = document.getElementById(rIndex).cells[0].innerText;
        clave = document.getElementById(rIndex).cells[1].innerText;

        document.location.href = "instrumentacion?id="+id+"?clave="+clave;
        document.getElementById(rIndex).className = "success";
        //$('#myModal').modal('show');

        //console.log(document.getElementById(rIndex).cells[0].innerText);
      }
    }
}

function hello(){
  alert('Un mensaje de prueba');
}
