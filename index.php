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
        <div class="col-md-3 col-md-offset-4" >
	        <div class="panel panel-default">
            	<div class="panel-heading">Bienvenido al Sistema Tests!</div>
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
		               <button class="btn btn-primary" type="submit" >Aceptar</button>
		               <a href="registrar.php" class="btn btn-primary" >Registrar</a>
		              </div>
		          </form>
		        </div>
		    </div>
        </div>
      </div>
    </div>

      <script type="text/javascript">
    $(':checkbox').checkboxpicker();
  </script>
</body>
</html>