<?php
	$total=array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
	try {
		$vquery2 = "SELECT idPregunta, resultado FROM usuario_testaptitud WHERE idUsuario=".$idUsuario;
		$resultado1 = $db->query($vquery2);
	} catch (Exception $e) {
		echo "La consulta no se ha podido realizar ".$vquery2;
	}
	$consultaAptitud = $resultado1 ->fetchALL(PDO::FETCH_ASSOC);

	$cientifica= array(1,21,36,38,51,70,78,93,96,107);
  	foreach ($consultaAptitud as $apt) {
  		for ($i=0; $i < 10; $i++) { 
  			if($apt['idPregunta']==$cientifica[$i]){
				$total[0]=$total[0]+$apt['resultado'];
			}	
		}
  	}

  	$coordinacionVisomotriz= array(2,13,35,44,56,65,74,88,101,114);
  	foreach ($consultaAptitud as $apt) {
  		for ($i=0; $i < 10; $i++) { 
  			if($apt['idPregunta']==$coordinacionVisomotriz[$i]){
  	  			$total[1]=$total[1]+$apt['resultado'];
  			}
	  		
	  	}
  	}

  	$numerica= array(3,15,25,43,55,66,73,89,100,112);
  	foreach ($consultaAptitud as $apt) {
  		for ($i=0; $i < 10; $i++) { 
  			if($apt['idPregunta']==$numerica[$i]){
	  			$total[2]=$total[2]+$apt['resultado'];
  			}
	  		
	  	}
  	}

  	$verbal= array(4,16,27,41,53,68,80,91,98,110);
  	foreach ($consultaAptitud as $apt) {
  		for ($i=0; $i < 10; $i++) { 
  			if($apt['idPregunta']==$verbal[$i]){
	  			$total[3]=$total[3]+$apt['resultado'];
  			}
	  		
	  	}
  	}

  	$persuasiva= array(5,20,34,46,50,71,77,85,104,117);
  	foreach ($consultaAptitud as $apt) {
  		for ($i=0; $i < 10; $i++) { 
  			if($apt['idPregunta']==$persuasiva[$i]){
	  			$total[4]=$total[4]+$apt['resultado'];
  			}
	  		
	  	}
  	}

  	$mecainca= array(6,19,29,40,58,63,76,86,103,116);
  	foreach ($consultaAptitud as $apt) {
  		for ($i=0; $i < 10; $i++) { 
  			if($apt['idPregunta']==$mecainca[$i]){
	  			$total[5]=$total[5]+$apt['resultado'];
  			}
	  	}
  	}

  	$social= array(7,14,33,37,52,69,79,92,97,108);
	foreach ($consultaAptitud as $apt) {
		for ($i=0; $i < 10; $i++) { 
			if($apt['idPregunta']==$social[$i]){
				$total[6]=$total[6]+$apt['resultado'];
			}
		}
	}

	$directiva= array(8,18,30,39,57,64,75,87,102,115);
	foreach ($consultaAptitud as $apt) {
		for ($i=0; $i < 10; $i++) { 
			if($apt['idPregunta']==$directiva[$i]){
				$total[7]=$total[7]+$apt['resultado'];
			}		
		}
	}

	$organizacional= array(9,17,26,42,54,67,81,90,99,111);
	foreach ($consultaAptitud as $apt) {
		for ($i=0; $i < 10; $i++) { 
			if($apt['idPregunta']==$organizacional[$i]){
				$total[8]=$total[8]+$apt['resultado'];
			}
		}
	}

	$musical= array(10,31,47,60,72,83,105,109,113,118);
	foreach ($consultaAptitud as $apt) {
		for ($i=0; $i < 10; $i++) { 
			if($apt['idPregunta']==$musical[$i]){
				$total[9]=$total[9]+$apt['resultado'];
			}		
		}
	}

	$artisticoPlastico= array(11,23,24,32,49,61,82,94,106,120);
	foreach ($consultaAptitud as $apt) {
		for ($i=0; $i < 10; $i++) { 
			if($apt['idPregunta']==$artisticoPlastico[$i]){
				$total[10]=$total[10]+$apt['resultado'];
			}		
		}
	}

	$espacial= array(12,22,28,45,48,59,62,84,95,119);
	foreach ($consultaAptitud as $apt) {
		for ($i=0; $i < 10; $i++) { 
			if($apt['idPregunta']==$espacial[$i]){
				$total[11]=$total[11]+$apt['resultado'];
			}
			
		}
	}
?>