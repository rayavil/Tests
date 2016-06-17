<?php
	require_once ("conexion.php");

	$actualContrasena=$_POST['contrasenaActual'];
	$idAdministrador;
	$idUsuario=$_POST['idUsuario'];
	$nombre=$_POST['usuario'];
	$nueva=$_POST['nueva'];
	$existe=false;
	try {
		$vquery = "SELECT idAdministrador, contrasena FROM administrador";
		$resultado = $db->query($vquery);
	} catch (Exception $e) {
		echo "La consulta no se ha podido realizar ".$vquery;				
	}
	$usuario = $resultado ->fetchALL(PDO::FETCH_ASSOC);	
	
		foreach ($usuario as $use) {
			if ($use['contrasena']==$actualContrasena) {
				$existe=true;
				$idAdministrador=$use['idAdministrador'];
			}
		}

	if ($existe==false) {
		header("Location: ../modificarAdministrador.php?status=0");
	}else{
		try {
			$vsql='UPDATE administrador SET idAdministrador="'.$idUsuario.'", contrasena="'.$nueva.'", nombre="'.$nombre.'" WHERE idAdministrador = "'.$idAdministrador.'"';
			echo $vsql;
			$db->exec($vsql);
			$_SESSION['nombre'] = $nombre;
			header("Location: ../modificarAdministrador.php?status=1");
		} catch (Exception $e) {
			header("Location: ../modificarAdministrador.php?status=0");
		}
	}
?>