function table_link(){

    var id,clave,nombre_materia,grupo,table = document.getElementById('table_cursos'),rIndex;

    for(var i = 0; i < table.rows.length; i++){
      table.rows[i].onclick = function()
      {
        rIndex = this.rowIndex;
        id = document.getElementById(rIndex).cells[0].innerText;
        clave = document.getElementById(rIndex).cells[1].innerText;
        nombre_materia = document.getElementById(rIndex).cells[2].innerText;
        grupo = document.getElementById(rIndex).cells[3].innerText;

        //document.location.href = "instrumentacion?id="+id+"?clave="+clave;
        document.getElementById(rIndex).className = "success";

        document.getElementById('materia_nombre').innerHTML = nombre_materia;
        document.getElementById('materia_clave').innerHTML = clave;
        document.getElementById('materia_grupo').innerHTML = grupo;

        $('#myModal').modal('show');

        //console.log(document.getElementById(rIndex).cells[0].innerText);
      }
    }
}

/*function search(e, value){
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==13) comprueba(value);
}

function comprueba(value){
  var nombre_materia,table = document.getElementById('table_cursos');

  for(var i = 0; i < table.rows.length; i++){
      nombre_materia = document.getElementById(i).cells[2].innerText;
      if(nombre_materia.localeCompare(value)){
        document.getElementById(i).className = "warning";
      }

    }
}*/
// onkeypress = "search(event,this.form.search.value);"  onblur="comprueba(this.form.pass.value);"


//SABER SI ES UN DISPOSITIVO MOVIL
  var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
//FIN FUNCTION
