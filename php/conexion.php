<?php
		//configuracion de la base de datos
	define("HOST", "localhost");
	define("BD_NOMBRE", "test");
	define("USUARIO", "ray");
	define("PASS", "ray123");
	try {
		$db = new PDO('mysql:host='.HOST.';dbname='.BD_NOMBRE.';charset=utf8mb4', USUARIO, PASS);
	} catch (Exception $e) {
		echo 'Error conectando a la BBDD. '.$ex->getMessage();
	}
?>