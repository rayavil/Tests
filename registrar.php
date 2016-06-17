<?php
  $titulo="Registrar";
  require("php/headInicio.php");
?>
  <body>
  <?php
    include("php/menuInicio.php");
  ?>
  <div class="container">
      <div class="row margen2">
        <div class="col-md-3 col-md-offset-4"  >
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3>Registrar</h3>
              <?php
                if (isset($_GET['status'])) {
                  if ($_GET['status'] == 1) {
                    echo '<div class="alert alert-info" role="alert">Ya existe este usuario</div>';
                  }elseif ($_GET['status'] == 0) {
                    echo '<div class="alert alert-danger" role="alert">El usuario NO se agregó</div>';
                  }
                }
              ?>
            </div>
            <div class="panel-body">
                <form method="POST" action="php/registrarUsuario.php" id="registrar">
                    <div class="form-group" >
                      <label id="lusuario" class="" for="Usuario">*Numero de control</label>
                      <input type="text" class="form-control" name="usuario" id="usuario">
                    </div>
                    <div class="form-group">
                        <label id="lnombre" class="" for="nombre">*Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
        			  <div class="form-group">
                        <label id="lapellido" class="" for="apellido">*Apellidos</label>
                        <input type="text" class="form-control" name="apellido" id="apellido">
                    </div>
                    <div class="form-group">
                        <label id="lcorreo" class="" for="correo">Correo electronico</label>
                        <input type="text" class="form-control" name="correo" id="correo">
                    </div>

                    <div class="form-group">
                        <label id="lcontrasena" class="" for="contrasena">*Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" id="contrasena">
                    </div>
                    <div class="form-group">
                      <label id="lcontrasena2" class="" for="contrasena2">*Confirmar Contraseña</label>
                      <input type="password" class="form-control" id="contrasena2">
                    </div>
                    <div class="form-group">
                     <button class="btn btn-primary" type="submit" >Aceptar</button>
                     <a  href="index.php" class="btn btn-warning" >Cancelar</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/validarForm.js"></script>
</body>
</html>