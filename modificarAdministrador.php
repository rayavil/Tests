<?php
	$titulo="Modificar datos";
	require("php/head.php");
	
	if ($_SESSION['puesto']!='administrador') {
    	header("Location: principal.php");
	}
?>
<body>
<?php
	require("php/nivel.php");
?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 margen">
			<div class="panel panel-default">
	            <div class="panel-heading"><h3 align="center">Modificar datos de Administrador</h3></div>
	            <div class="panel-body">
	            	<?php
	                if (isset($_GET['status'])) {
	                  if ($_GET['status'] == 1) {
	                    echo '<div class="alert alert-success" role="alert">Se modificaron datos del administrador</div>';
	                  } if ($_GET['status'] == 0) {
	                    echo '<div class="alert alert-danger" role="alert">NO se modificaron datos del administrador</div>';
	                  } 
	                }
	              	?>
					<form method="POST" action="php/actualizarDatos.php" id="actualizarAdmin">
						<div class="form-group">
					    	<label id="labelContrasena" class="" for="actual">Contraseña acutal</label>
					    	<input type="password" class="form-control" name="contrasenaActual" id="contrasenaActual" placeholder="Contraseña">
					  	</div>
					  	<div class="form-group">
							<label id="labelIdUsuario" class="" for="idUsuario">Id usuario</label>
					    	<input type="text" class="form-control" name="idUsuario" id="idUsuario" placeholder="Id Usuario">
					  	</div>
						<div class="form-group">
							<label id="labelUsuario" class="" for="usuario">Nombre</label>
					    	<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Nombre usuario">
					  	</div>
					  	<div class="form-group">
					    	<label id="labelNueva" class="" for="nueva">Nueva contraseña</label>
					    	<input type="password" class="form-control" name="nueva" id="nueva" placeholder="Contraseña">
					  	</div>
					  	<div class="form-group">
					    	<label id="labelConfirmar" class="" for="confirmar">Confirmar contraseña</label>
					    	<input type="password" class="form-control" name="confirmar" id="confirmar" placeholder="Confirmar">
					  	</div>

					  	<button class="btn btn-primary" type="submit">Aceptar</button>
		                <a class="btn btn-warning" href="principal.php">Cancelar</a>
					</form>
				</div>
	        </div>
		</div>
	</div>
</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   	<script src="js/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/validarForm.js"></script>

</body>
</html>