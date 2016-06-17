<?php
  $titulo="Ingresar";
  require("php/headInicio.php");

  if (isset($_SESSION['idUsuario'])) {
  	echo "string";
  	header("Location: principal.php");
  }
?>
  <body>
  <?php
    include("php/menuInicio.php");
  ?>

    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3" >
	        <div class="panel panel-primary">
            	<div class="panel-heading text-center">Bienvenido al Sistema Tests!</div>
                <div class="panel-body">
	                <?php
		                if (isset($_GET['error'])) {
		                  if ($_GET['error']==1) {
		                    echo "El usuario o contraseña son incorrectos";
		                  }elseif ($_GET['error']==2) {
		                    echo "Primero logeate";
		                  }
		                }
              		?>
		          <form id="formulario" method="POST" action="php/validarUsuario.php">
		              <div class="form-group">
		                <label for="usuario">Numero de control</label>
		                <input type="text" class="form-control" id="usuario" name="control">
		              </div>
		              <div class="form-group">
		                <label for="contraseña">Contraseña</label>
		                <input type="password" class="form-control" id="contrasena" name="pass">
		              </div>
		              <div class="form-group">
                          <a href="registrar.php" class="btn btn-link col-md-6" >Registrar Nuevo</a>
                          <button class="btn btn-primary col-md-6" type="submit" >Entrar</button>
		              </div>
		          </form>

		        </div>
                <div class="panel-footer text-center">Datos de la Institucion <?php echo date("Y"); ?></div>

            </div>
        </div>
      </div>
    </div>

      <script type="text/javascript">
    $(':checkbox').checkboxpicker();
  </script>
</body>
</html>