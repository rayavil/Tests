<?php
	$titulo="Tests";
	require("php/head.php");
?>
<body>
<?php
	require_once("php/nivel.php");
	require_once ("php/conexion.php");
	$consulta="SELECT realizadoVocacional, fechaVocacional, realizadoAptitud, fechaAptitud FROM usuarios WHERE idUsuario=".$_SESSION['idUsuario'];

	try {
    	$resultadoConsulta = $db->query($consulta);
  	} catch (Exception $e) {
    	echo "La consulta no se a realizado";
    	exit;
  	}
  	$realizadoTest = $resultadoConsulta->fetchALL(PDO::FETCH_ASSOC);
?>

<div class="container">
	<div class="row">
        <div class="col-md-12 text-center">
          <h3>Test Aptitudes</h3>
        </div>
    </div>
 <div class="row">
    <div class="col-md-6 col-md-offset-3 text-justify">
        <p class="margen2">Las aptitudes son las capacidades que posee un individuo y que permiten desarrollar una tarea de forma satisfactoria. Son el resultado de una interacción entre la herencia y el entorno. Nacemos con unas determinadas aptitudes, pero si las entrenamos podemos seguir desarrollándolas. Ejemplos de aptitudes son capacidad espacial, razonamiento mecánico, razonamiento abstracto, razonamiento verbal, lenguaje, velocidad y precisión, cálculo mental, etc.</p>
    </div>
 </div>
	 <div class="row">
	    <div class="col-md-3 col-md-offset-5">
	    	<div class="form-group">
		        <?php 
		      		foreach ($realizadoTest as $rTest) {
		      			if ($rTest["realizadoAptitud"]==NULL) {
			      			echo '<a href="instruccionAptitud.php" class="btn btn-primary" >Realizar</a>';
			      		}else{
			      			echo '<a href="resultadoAptitudUsuario.php" class="btn btn-info" >ver Resultados</a>';
			      		}
		      		}
		      	?>
	      	</div>
	    </div>
	 </div>

      <div class="row margen">
         <div class="col-md-12 text-center">
            <h3>Test Vocacional</h3>
         </div>
      </div>
 <div class="row">
    <div class="col-md-6 col-md-offset-3 text-justify">
        <p class="margen2">Son una serie de pruebas tendientes a indagar diversos aspectos del sujeto para facilitar la comprensión de los intereses propios, habilidades y aptitudes, hábitos de estudios, preferencias profesionales, características de la persona, etc. Sin duda que los tests vocacionales representan una herramienta muy útil ya que te permiten contar con una gran cantidad de información sobre muchos de los aspectos a tener en cuenta ante tu futura elección.</p>
    </div>
 </div>

	 <div class="row">
	    <div class="col-md-3 col-md-offset-5">
	      <div class="form-group">
	      	<?php 
	      		foreach ($realizadoTest as $rTest) {
	      			if ($rTest["realizadoVocacional"]==NULL) {
		      			echo '<a href="instruccionVocacional.php" class="btn btn-primary" >Realizar</a>';
		      		}else{
		      			echo '<a href="resultadoVocacionalUsuario.php" class="btn btn-info" >ver Resultados</a>';
		      		}
	      		}
	      	?>
	      		
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