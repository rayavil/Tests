<?php
  $titulo="Usuarios";
  require("php/head.php");
  if ($_SESSION['puesto']!='administrador') {
    header("Location: principal.php");
  }
  require("php/conexion.php");

  try {
    $resultadoConsulta = $db->query("SELECT idUsuario, nombre, apellidos, correo FROM usuarios ORDER BY idUsuario");
  } catch (Exception $e) {
    echo "La consulta no se a realizado";
    exit;
  }
  if ($resultadoConsulta!=NULL) {
    $usuarios = $resultadoConsulta->fetchALL(PDO::FETCH_ASSOC);
  }

  require_once("php/nivel.php");

?>
 <body>

  <div class="container">
   	<div class="row">
   		<div class="col-md-8 col-md-offset-2 margen">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Usuarios</h3></div>
            <div class="panel-body">
     			<table id="alumnos" class="table table-hover display">
  	            <thead>
  	       			<tr>
  	       				<th>Usuario</th>
  	       				<th>Nombre</th>
  	       				<th>Apellidos</th>
  	       				<th>Correo</th>
  	       				<th>Editar/Buscar</th>
  	       			</tr>
  	            </thead>
  	            <tfoot>
  	            	<tr>
  	               		<th>Usuario</th>
  	                	<th>Nombre</th>
  	                	<th>Apellidos</th>
  	                	<th>Correo</th>
  	                	<th>Editar/Buscar</th>
  	              </tr>
  	            </tfoot>
       			<tbody>
       				<?php //data-target='#editarUsuario'
       					foreach ($usuarios as $user) {
  							echo "<tr>";
  	     						echo "<td id='tidUsuario".$user['idUsuario']."'>".$user['idUsuario']."</td>";
  	     						echo "<td id='tnombre".$user['idUsuario']."'>".$user['nombre']."</td>";
  	     						echo "<td id='tapellidos".$user['idUsuario']."'>".$user['apellidos']."</td>";
  	     						echo "<td id='tcorreo".$user['idUsuario']."'>".$user['correo']."</td>";
  	     						echo "<td>
  	       <button type='button' class='btn btn-default' aria-label='Left Alin' data-toggle='modal' onclick='editaUsuario(".$user['idUsuario'].");'>
  					                    <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
  					          </button>
  					                <button type='button' class='btn btn-default' aria-label='Left Alin' data-toggle='modal' onclick='eliminarUsuario(".$user['idUsuario'].")'>
  					                    <span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
  					                </button>
  		                			</td>";
  		                	echo "</tr>";
       					}
       				?>
              </tbody>
       	</table>
          </div>
        </div>
   		</div>
   	</div>

      <!-- Modal editar-->
    <div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form method="POST" action="php/modificar.php" id="formEditar">
                          <input type="hidden" name="tipo" id="tipo" value="editar">
                        <div class="form-group">
                          <label id="lbUsuario" for="usuario" class=""><span class="glyphicon glyphicon-user"></span> Usuario</label>
                          <input type="text" class="form-control" name="usuario" id="usuario" placeholder="No. control" readonly>
                        </div>
                        <div class="form-group">
                          <label id="lbContrasena" for="contrasena" class=""><span class="glyphicon glyphicon-asterisk"></span> Contraseña</label>
                          <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="contraseña">
                        </div>
                        <div class="form-group">
                          <label id="lbNombre" for="nombre" class="" ><span class="glyphicon glyphicon-user"></span> Nombre</label>
                          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                          <label id="lbApellidos" for="apellidos" class=""><span class="glyphicon glyphicon-user"></span> Apellidos</label>
                          <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                          <label id="lbCorreo" for="correo" class=""><span class="glyphicon glyphicon-envelope"></span> Correo Electronico</label>
                          <input type="email" class="form-control" name="correo" id="correo" placeholder="correo">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

  	<!-- Small modal eliminar-->
  	<div class="modal fade" id="eliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel2">¿Está seguro de eliminarlo?</h4>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form method="POST" action="php/modificar.php">
                      <input type="hidden" name="tipo" value="eliminar">
                      <input type="hidden" name="eUsuario" id="eUsuario" value="">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              		    <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <script type="text/javascript" src="js/datatables.min.js"></script>
  <script type="text/javascript" src="js/tablas.js"></script>
  <script type="text/javascript" src="js/validarForm.js"></script>
  <script>
    function editaUsuario(id){
        $('#editarUsuario').modal('show');
          $('#usuario').val(id);
          $('#nombre').val($('#tnombre'+id).text());
          $('#apellidos').val($('#tapellidos'+id).text());
          $('#correo').val($('#tcorreo'+id).text());

       }

       function eliminarUsuario(id){
        $('#eliminarUsuario').modal('show');
        $('#eUsuario').val(id);
    }
  </script>
</body>
</html>