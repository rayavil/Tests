$(document).ready(function(){	
  	$("#formVocacional").submit(function() {
  		mensaje="Falta por responder las preguntas ";
		  entro=true;
	  	for (var i = 1; i <= 80 ; i++) {
	  		if ($('input[name="respuesta'+i+'"]').is(':checked')) {
		        
		    } else {
		    	mensaje+=i+", ";
		        entro=false;
		    }
	  	}

	  	if (entro==false) {
	  		alert(mensaje);
	  		return false;
	  	}
		  return true;	
    });

    $("#formAptitud").submit(function() {
      mensaje="Falta por responder las preguntas ";
      entro=true;
      for (var i = 1; i <= 120 ; i++) {
        if ($('input[name="respuesta'+i+'"]').is(':checked')) {
            
        } else {
          mensaje+=i+", ";
          entro=false;
        }
      }

      if (entro==false) {
        alert(mensaje);
        return false;
      }
      return true;  
    });

    $("#registrar").submit(function() {
  		error=false;
  		$("#lusuario").removeClass("rojo");
  		$("#lnombre").removeClass("rojo");
  		$("#lapellido").removeClass("rojo");
  		$("#lcorreo").removeClass("rojo");
  		$("#lcontrasena").removeClass("rojo");
  		$("#lcontrasena2").removeClass("rojo");

  		if ($("#usuario").val()=="") {
  			$("#lusuario").addClass("rojo");
  			error=true;
  		}
  		if ($("#nombre").val()=="") {
  			$("#lnombre").addClass("rojo");
  			error=true;
  		}
  		if ($("#apellido").val()=="") {
  			$("#lapellido").addClass("rojo");
  			error=true;
  		}
  		if ($("#correo").val()=="") {
  			$("#lcorreo").addClass("rojo");
  			error=true;
  		}
  		if ($("#contrasena").val()=="") {
  			$("#lcontrasena").addClass("rojo");
  			error=true;
  		}
  		if ($("#contrasena").val()!=$("#contrasena2").val()) {
  			error=true;
  			$("#lcontrasena2").addClass("rojo");
  			$("#contrasena").val("");
  			$("#contrasena2").val("");
  		}

  		if(error==true){
  			return false;
  		}
  		return true;
    });

    $("#actualizarAdmin").submit(function() {
        error=false;
        $("#labelContrasena").removeClass("rojo");
        $("#labelIdUsuario").removeClass("rojo");
        $("#labelUsuario").removeClass("rojo");
        $("#labelNueva").removeClass("rojo");
        $("#labelConfirmar").removeClass("rojo");
        if ($("#contrasenaActual").val()=="") {
          $("#labelContrasena").addClass("rojo");
          error=true;
        }
        if ($("#idUsuario").val()=="") {
          $("#labelIdUsuario").addClass("rojo");
          error=true;
        }
        if ($("#usuario").val()=="") {
          $("#labelUsuario").addClass("rojo");
          error=true;
        }
        if ($("#nueva").val()=="") {
          $("#labelNueva").addClass("rojo");
          error=true;
        }
        if ($("#confirmar").val()!=$("#nueva").val() || $("#confirmar").val()=="") {
          $("#labelConfirmar").addClass("rojo");
          $("#nueva").val("");
          $("#confirmar").val("");
          error=true;
        }
        if(error==true){
          return false;
        }
        return true;
    });

    $("#formEditar").submit(function() {
      error=false;

      $("#lbNombre").removeClass("rojo");
      $("#lbApellidos").removeClass("rojo");
      $("#lbCorreo").removeClass("rojo");

      if ($("#nombre").val()=="") {
        $("#lbNombre").addClass("rojo");
        error=true;
      }
      if ($("#apellidos").val()=="") {
        $("#lbApellidos").addClass("rojo");
        error=true;
      }
      if ($("#correo").val()=="") {
        $("#lbCorreo").addClass("rojo");
        error=true;
      }
      if(error==true){
        return false;
      }
      return true;
    });

});