<?php
	$us = $_POST['control'];
	$psw = $_POST['pass'];
	require_once ("conexion.php");
	$entro = false;
	try {
		$vquery = "SELECT idUsuario, nombre, contrasena FROM usuarios";
		$resultado = $db->query($vquery);
	} catch (Exception $e) {
		echo "La consulta no se ha podido realizar ".$vquery;				
	}
	$usuarios = $resultado ->fetchALL(PDO::FETCH_ASSOC);
	//var_dump($usuarios);
	foreach ($usuarios as $user) {
		if($us==$user['idUsuario'] && password_verify($psw, $user['contrasena'])){
			session_start();
			$_SESSION['idUsuario'] = $user['idUsuario'];
			$_SESSION['nombre'] = $user['nombre'];
			$_SESSION['puesto'] = "usuario";
			$entro = true;
			header("Location: ../principal");
		}
	}

	try {
		$vquery = "SELECT * FROM administrador";
		$resultado2 = $db->query($vquery);
	} catch (Exception $e) {
		echo "La consulta no se ha podido realizar ".$vquery;
	}
	$usuarios = $resultado2 ->fetchALL(PDO::FETCH_ASSOC);
	var_dump($usuarios);
	foreach ($usuarios as $user) {
		if($us==$user['idAdministrador'] && $psw == $user['contrasena']){
			session_start();
			$_SESSION['idUsuario'] = $user['idAdministrador'];
			$_SESSION['nombre'] = $user['nombre'];
			$_SESSION['puesto'] = "administrador";
			$entro = true;
			header("Location: ../principal.php");
		}
	}

	if($entro==false){
		header("Location: ../index.php?error=1");
	}
?>