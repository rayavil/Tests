$(document).ready(function(){
	
  $("#buscar").click(function () {
    var tipoBusqueda = document.getElementsByName("busqueda");
    var numControl = $("#numControl").val();
    var vacio='<div class="row margen">     <div class="col-md-8 col-md-offset-2">      <div class="alert alert-warning" role="alert">Ingrese numero de control</div>   </div>  </div>'
    if (numControl=="") {
      $("#contenido").html(vacio);
    }else{
      if (tipoBusqueda[0].checked) {
        $.get("resultadoVocacional.php?numControl="+numControl, function(htmlexterno){
                $("#contenido").html(htmlexterno);
            });
      }else if(tipoBusqueda[1].checked){
        $.get("resultadoAptitud.php?numControl="+numControl, function(htmlexterno){
                $("#contenido").html(htmlexterno);
            });
      }
    } 
  });


});