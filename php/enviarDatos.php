<?php
	session_start();
  	if (!isset($_SESSION['idUsuario'])) {
    	header("Location: index.php?error=2");
  	}
	require_once ("conexion.php");
	$idUsuario=$_SESSION['idUsuario'];
	$datosVocacional;
	$datosAptitud;
	$error=false;
	$formulario=$_POST["tipo"];
	$ArteyCreatividad=0;
	$CiensiasSociales=0;
	$EconomiaAdministrativayFinanciera=0;
	$CienciasyTecnologia=0;
	$CienciasEcologicasBiologiasySalud=0;

	switch ($formulario) {
		case 'aptitud':
			for ($i=1; $i <= 120; $i++) {
				$datosAptitud[$i]=$_POST['respuesta'.$i];
				//var_dump($datosAptitud);
			}

			for ($i=1; $i <= 120; $i++) { 
				$insertar = "INSERT INTO usuario_testaptitud( idUsuario, idPregunta, resultado) VALUES ('$idUsuario','$i','$datosAptitud[$i]')";
				try {
					$stmt = $db->prepare($insertar);
					$stmt->execute();
				} catch (PDOException $e) {
					header("Location: ../tests.php");
					$error=true;
				}
			}

			require_once('compararAptitud.php');

				$insertarResultados = "INSERT INTO resultadosaptitud ( idUsuario, cientifica, coordinacionVisomotriz, numerica, verbal, persuasiva, mecainca, social, directiva, organizacional, musical, artisticoPlastico, espacial) VALUES ('$idUsuario','$total[0]','$total[1]','$total[2]','$total[3]','$total[4]','$total[5]','$total[6]','$total[7]','$total[8]','$total[9]','$total[10]','$total[11]')";

//				echo $insertarResultados;
				try {
					$stmt = $db->prepare($insertarResultados);
					$stmt->execute();
				} catch (PDOException $e) {
					header("Location: ../tests.php");
					$error=true;
				}



			if ($error==false) {
				$vsql='UPDATE usuarios SET realizadoAptitud="1", fechaAptitud="'.date('Y-m-d').'" WHERE idUsuario ='.$idUsuario;
				echo $vsql;
				$db->exec($vsql);
				header("Location: ../tests.php");
			}
			break;
		
		case 'vocacional':
			for ($i=1; $i <= 80; $i++) {
				$datosVocacional[$i]=$_POST['respuesta'.$i];
			}
			
			require_once('compararVocacional.php');
	
			for ($i=1; $i <= 80; $i++) { 
				$insertar = "INSERT INTO usuario_testvocacional( idUsuario, idPregunta, resultado) VALUES ('$idUsuario','$i','$datosVocacional[$i]')";
				try {
					$stmt = $db->prepare($insertar);
					$stmt->execute();
				} catch (PDOException $e) {
					header("Location: ../tests.php");
					$error=true;
				}
			}

			
			$insertar = "INSERT INTO resultadosvocacional( idUsuario, ArteyCreatividad, CiensiasSociales, EconomiaAdministrativayFinanciera, CienciasyTecnologia, CienciasEcologicasBiologiasySalud) VALUES ('$idUsuario','$ArteyCreatividad','$CiensiasSociales','$EconomiaAdministrativayFinanciera', '$CienciasyTecnologia', '$CienciasEcologicasBiologiasySalud')";
			try {
				$stmt = $db->prepare($insertar);
				$stmt->execute();
			} catch (PDOException $e) {
				header("Location: ../tests.php");
				$error=true;
			}

			if ($error==false) {
				$vsql='UPDATE usuarios SET realizadoVocacional="1", fechaVocacional="'.date('Y-m-d').'" WHERE idUsuario ='.$idUsuario;
				echo $vsql;
				$db->exec($vsql);
				header("Location: ../resultadoVocacionalUsuario.php");
			}
			break;
	}
	
	//var_dump($datosVocacional);
?>