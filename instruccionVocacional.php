<?php
  $titulo="Instrucciones";
	include("php/head.php");
?>
<body>
<?php
  require_once("php/nivel.php");
?>

<div class="container">
 <div class="row">
        <div class="col-md-12 text-center">
          <h3>Test Vocacional</h3>
        </div>
      </div>

 <div class="row">
    <div class="col-md-6 col-md-offset-3 text-justify">
        <p class="margen" align="justify">¿Como ir paso a paso?<br> 
        <ul>
        	<li>Lee Atentamente cada una de las actividades.</li>
        	<li>Marca con una "<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>"en las columnas "Me interesa" o "No me interesa " segun tu propia decision.</li>
        	<li>En general no existen respuestas correctas o incorrectas; lo importante es que contestes con sinceridad y confianza para que puedas conocer mejor tus intereses vocacionales</li>
        </ul>
        </p>

    </div>
 </div>
	 <div class="row">
	    <div class="col-md-2 col-md-offset-5 margen">
        <div class="form-group">
          <a  href="testVocacional.php" class="btn btn-primary" >Iniciar</a>
        </div>            
	   </div>
	 </div>
 </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="js/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>