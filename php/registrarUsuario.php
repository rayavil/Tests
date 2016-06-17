<?php
	$usuario=$_POST['usuario'];
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellido'];
	$correo=$_POST['correo'];
	$contrasena=password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
	$entro = false;
	require_once ("conexion.php");

	try {
		$vquery = "SELECT idUsuario FROM usuarios WHERE idUsuario=".$usuario;
		$resultado = $db->query($vquery);
	} catch (Exception $e) {
		echo "La consulta no se ha podido realizar ".$vquery;				
	}
	$usuarios = $resultado ->fetchALL(PDO::FETCH_ASSOC);
	foreach ($usuarios as $user) {
		if ($user['idUsuario']==$usuario) {
			header("Location: ../registrar.php?status=1");
		}
	}


	$insertar = "INSERT INTO usuarios ( idUsuario, nombre, apellidos, correo, contrasena, realizadoVocacional, fechaVocacional, realizadoAptitud, fechaAptitud) VALUES ('$usuario','$nombre','$apellidos','$correo', '$contrasena', NULL, NULL, NULL,NULL)";
		try {
		$stmt = $db->prepare($insertar);
		$stmt->execute();
	} catch (PDOException $e) {
		header("Location: ../registrar.php?status=0");
	}


	try {
		$vquery = "SELECT idUsuario, nombre FROM usuarios WHERE idUsuario=".$usuario;
		$resultado = $db->query($vquery);
	} catch (Exception $e) {
		echo "La consulta no se ha podido realizar ".$vquery;				
	}
	$usuarios = $resultado ->fetchALL(PDO::FETCH_ASSOC);
	foreach ($usuarios as $user) {
		if ($user['idUsuario']==$usuario) {
			session_start();
			$_SESSION['idUsuario'] = $user['idUsuario'];
			$_SESSION['nombre'] = $user['nombre'];
			$_SESSION['puesto'] = "usuario";
			$entro = true;
		}
	}
	
	if (isset($_SESSION['idUsuario'])) {
		header("Location: ../principal.php");
	}
	if ($entro==false) {
		header("Location: ../registrar.php?status=0");
	}
?>