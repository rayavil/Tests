<?php
	if ($_SESSION['puesto']=='usuario') {
		include("php/menu.php");
	}else{
		include("php/menuAdministrador.php");
	}
?>

