<?php
	$titulo="Resultados";
 	require("php/head.php");
 	
	if ($_SESSION['puesto']!='administrador') {
    	header("Location: principal.php");
	}
?>
  <body>
<?php
	require_once("php/nivel.php");
?>

  <div class="container">
  	<div class="row">
  		<div class="col-md-12 text-center">
  			<h3>Resultados</h3>
  		</div>
  	</div>
  	
  	<div class="row">
  		<div class="col-md-12 text-right">
  			<form class="form-inline">
  				<div class="radio margenBuscar">
					<label><input type="radio" name="busqueda" value="v" checked="checked">Vocacional</input></label>
				</div>
		    	<div class="radio margenBuscar">
					<label><input type="radio" name="busqueda" value="a">Aptitud</input></label>
				</div>
				<div class="input-group">
				   	<input id="numControl" type="text" class="form-control" placeholder="No. control">
				   	<span class="input-group-btn">
			        <button id="buscar" class="btn btn-default" type="button">
			        	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			        </button>
				   	</span>
				</div>
  			</form>
  		</div>
  	</div>
		<div id="contenido">
			  				
		</div>
  </div>
    <script src="js/buscar.js"></script>
</body>
</html>