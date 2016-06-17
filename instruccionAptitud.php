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
          <h3>Test Aptitudes</h3>
        </div>
      </div>



 <div class="row">
    <div class="col-md-6 col-md-offset-3 text-justify">
        <p class="margen" align="justify">Importante:<br> 
        A continuacion se enumeran una serie de actividades que tienen como propòsito medir tu grado de habilidades para la ejecucion de las mismas. Al contestar los reactivos ten presente que no se busca tu gusto por esas actividades, ni pienses si deberia ser asi. Solo se te pide que contestes que tan habilmente puedes realizar la actividad citada independientemente de tus gustos o valores.</p>
        <p class="margen" align="justify"> Instrucciones:<br>
        A continuacion te presentamos una serie de actividades. Calificalas de acuerdo con tu grado de habilidad, guiate con la sigueiente escala:
         <ul>
        	<li>Mucho muy habil</li>
        	<li>Muy habil</li>
        	<li>Medianamente habil</li>
        	<li>Poco habil </li>
        	<li>Nada Habil</li>
        </ul>
        </p>
    </div>
 </div>
	 <div class="row">
	    <div class="col-md-3 col-md-offset-4 margen">
       
            <div class="form-group">
                   <a  href="testAptitud.php" class="btn btn-primary" >Iniciar</a>
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