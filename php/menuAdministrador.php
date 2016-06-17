<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">ITSF</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
      <?php
        if ($titulo=="Principal") {
      ?>
        <li class="active" id="inicio" ><a href="principal.php">Inicio <span class="sr-only">(current)</span></a></li>
        <li class="" id="resultados"><a href="resultados.php">Resultados</a></li>
        <li class="" id="usuarios"><a href="usuarios.php">Usuarios</a></li>
        <li class="" id="modificarAdmin"><a href="modificarAdministrador.php">Modificar datos</a></li>
      <?php
        }elseif ($titulo=="Resultados") {
      ?>
        <li class="" id="inicio" ><a href="principal.php">Inicio <span class="sr-only">(current)</span></a></li>
        <li class="active" id="resultados"><a href="resultados.php">Resultados</a></li>
        <li class="" id="usuarios"><a href="usuarios.php">Usuarios</a></li>
        <li class="" id="modificarAdmin"><a href="modificarAdministrador.php">Modificar datos</a></li>
      <?php
        }elseif ($titulo=="Usuarios") {
      ?>
        <li class="" id="inicio" ><a href="principal.php">Inicio <span class="sr-only">(current)</span></a></li>
        <li class="" id="resultados"><a href="resultados.php">Resultados</a></li>
        <li class="active" id="usuarios"><a href="usuarios.php">Usuarios</a></li>
        <li class="" id="modificarAdmin"><a href="modificarAdministrador.php">Modificar datos</a></li>
      <?php
        }elseif ($titulo=="Modificar datos") {
      ?>
        <li class="" id="inicio" ><a href="principal.php">Inicio <span class="sr-only">(current)</span></a></li>
        <li class="" id="resultados"><a href="resultados.php">Resultados</a></li>
        <li class="" id="usuarios"><a href="usuarios.php">Usuarios</a></li>
        <li class="active" id="modificarAdmin"><a href="modificarAdministrador.php">Modificar datos</a></li>
      <?php
        }
      ?>
        
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="php/cerrar.php"><?php echo $_SESSION['nombre']. ", Salir";?></a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="js/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>