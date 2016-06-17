<?php
	require_once ("conexion.php");
	$tipo=$_POST['tipo'];

	switch ($tipo) {
		case 'editar':
			$usuario=$_POST['usuario'];
			$contrasena=password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
			$nombre=$_POST['nombre'];
			$apellidos=$_POST['apellidos'];
			$correo=$_POST['correo'];
			
			if ($contrasena!="") {
				$vsql='UPDATE usuarios SET nombre="'.$nombre.'", apellidos="'.$apellidos.'", correo="'.$correo.'", contrasena="'.$contrasena.'" WHERE idUsuario = "'.$usuario.'"';
			}else{
				$vsql='UPDATE usuarios SET nombre="'.$nombre.'", apellidos="'.$apellidos.'", correo="'.$correo.'" WHERE idUsuario = "'.$usuario.'"';
			}


			try {
				echo $vsql;
				$db->exec($vsql);
				header("Location: ../usuarios.php");
			} catch (Exception $e) {
				header("Location: ../usuarios.php");
			}

			break;
		
		case 'eliminar':
			$eUsuario=$_POST['eUsuario'];
			echo $eUsuario;

			try {
				$vsql='DELETE FROM usuarios WHERE idUsuario = "'.$eUsuario.'"';

				echo $vsql;
				$db->exec($vsql);
				header("Location: ../usuarios.php");
			} catch (PDOException $ex) {
				echo "No se pudo eliminar el registro".$ex->getMessage(); 
			}
			break;
	}
?>