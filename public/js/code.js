var id_row;
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
        //document.getElementById(rIndex).className = "success";

        document.getElementById('materia_nombre').innerHTML = nombre_materia;
        document.getElementById('materia_clave').innerHTML = clave;
        document.getElementById('materia_grupo').innerHTML = grupo;

        id_row = id;

        $('#myModal').modal('show');


        //console.log(document.getElementById(rIndex).cells[0].innerText);
      }
      /*table.rows[i].onmouseover = function()
      {
          document.getElementById(this.rowIndex).style.cursor = "pointer";
      }*/
    }
}

function envia_param(){
  post('listfiles', {id: id_row});//id_row es el id correspondiente al registro que dio click
}

function envia_param_file(dir,val){
  post(dir, {file_id: val});
}

function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
         }
    }

    document.body.appendChild(form);
    form.submit();
}

function modal_to_upload(){
  $('#modal_upload').modal('show');
  $('#myModal').modal('hide');
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

window.onload = function() {
  if(!isMobile.any()){
    document.getElementById('desk').style.display = 'block';
    document.getElementById('mobile').style.display = 'none';
  }else{
    document.getElementById('desk').style.display = 'none';
    document.getElementById('mobile').style.display = 'block';
  }
}
