<?php
	$numControl = $_GET['numControl'];
	$idUsuario=$_GET['numControl'];
	$existe=false;
	$nombreCompleto;
	$fecha;
	require_once ("php/conexion.php");

	try {
		$vquery = "SELECT idUsuario, nombre, apellidos, realizadoVocacional, fechaVocacional FROM usuarios WHERE idUsuario=".$numControl;
		$resultado = $db->query($vquery);
	} catch (Exception $e) {
		echo "La consulta no se ha podido realizar ".$vquery;				
	}
//	var_dump($resultado);
	if ($resultado==false) {
		
	}else{
		$usuarios = $resultado ->fetchALL(PDO::FETCH_ASSOC);
		foreach ($usuarios as $use) {
			if ($use['idUsuario']==$numControl && $use['realizadoVocacional']==1) {
				$existe=true;
				$nombreCompleto=$use['nombre']." ".$use['apellidos'];
				$fecha=$use['fechaVocacional'];
			}
		}
	}

	if (!$existe) {
?>
	<div class="row margen">
  		<div class="col-md-8 col-md-offset-2">
			<div class="alert alert-warning" role="alert">Usuario no encontrado o no ha realizado el test</div>
		</div>
	</div>
<?php
	}else{
		try {
			$vquery2 = "SELECT idUsuario, idPregunta, resultado FROM usuario_testvocacional WHERE idUsuario=".$numControl;
			$resultado1 = $db->query($vquery2);
		} catch (Exception $e) {
			echo "La consulta no se ha podido realizar ".$vquery2;
		}
		$resultadosVocacional = $resultado1 ->fetchALL(PDO::FETCH_ASSOC);
		//var_dump($usuarios);


		  try {
  	$consulta="SELECT ArteyCreatividad, CiensiasSociales, EconomiaAdministrativayFinanciera, CienciasyTecnologia, CienciasEcologicasBiologiasySalud FROM resultadosvocacional WHERE idUsuario='".$idUsuario."'";
    $resultadoConsulta = $db->query($consulta);
  } catch (Exception $e) {
    echo "La consulta no se a realizado";
    exit;
  }
  
  $resultados = $resultadoConsulta->fetchALL(PDO::FETCH_ASSOC);
  //var_export($resultadoConsulta);
  if ($resultados!=NULL) {
    foreach ($resultados as $res) {
    	$tabla= array (
    		"ArteyCreatividad"=>$res["ArteyCreatividad"], 
			"CiensiasSociales"=>$res['CiensiasSociales'],
			"EconomiaAdministrativayFinanciera"=>$res['EconomiaAdministrativayFinanciera'],
    		"CienciasyTecnologia"=>$res['CienciasyTecnologia'],
    		"CienciasEcologicasBiologiasySalud"=>$res['CienciasEcologicasBiologiasySalud']
    	);
    }
  }else{
  	
  }
  require_once('php/tablaVocacional.php');
?>

<div class="row">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Resultado test vocacional</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-7">
				<button type="button" class="btn btn-info" id="resultados" name="resultados" data-toggle="modal" data-target="#myModal">Tabla de resultados</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-justify">
					<p>
						<br>
						<?php 
							echo $descripcion[0];
						?>
						<br>
						<?php 
							echo $descripcion[1];
						?>
						<br>
						<?php 
							echo $descripcion[2];
						?>

						<br>
					</p>
			</div>
			<div class="col-md-6 blanco margen">
				<div id="grafica">				
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	}
?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Tabla de resultados vocacional</h4>
            </div>
            <div class="modal-body">
              	<div class="panel panel-primary">
		  			<div class="panel-heading">
		  				<div class="row">
		  					<div class="col-md-5 col-md-offset-1">
		  						Nombre: <?php echo $nombreCompleto;?>
		  					</div>
		  					<div class="col-md-5 col-md-offset-1">
		  						Fecha de aplicación: <?php echo $fecha;?>
			  				</div>
			  			</div>
			  		</div>
					<div class="panel-body">
			  		<table class="table table-hover">
						<tr>
							<th>Areas</th>
								<th colspan="16">Preguntas</th>
								<th>Total</th>
							</tr>
							<tr>
								<th>Area I: Arte y Creatividad</th>
						<?php
								$arteCreatividad= array(4,9,12,20,28,31,35,39,43,46,50,65,67,68,75,77);
								$total=array(0,0,0,0,0);
								foreach ($resultadosVocacional as $voc) {
										for ($i=0; $i < 16; $i++){
											if ($voc['idPregunta']==$arteCreatividad[$i]) {
												if ($voc['resultado']==1) {
													echo "<td class='colorCelda'>$arteCreatividad[$i]</td>";
															$total[0]=$total[0]+1;
														}else{
															echo "<td>$arteCreatividad[$i]</td>";
										}
									}
								}
								}
								echo "<td>$total[0]</td>";
						?>
							</tr>
							<tr>
								<th>Area II:Ciensias Sociales</th>
								<?php
								$cienciasSociales= array(6,13,23,25,34,37,38,42,49,52,55,63,66,70,72,78);
								foreach ($resultadosVocacional as $voc) {
									for ($i=0; $i < 16; $i++){
										if ($voc['idPregunta']==$cienciasSociales[$i]) {
											if ($voc['resultado']==1) {
												echo "<td class='colorCelda'>$cienciasSociales[$i]</td>";
												$total[1]=$total[1]+1;
											}else{
												echo "<td>$cienciasSociales[$i]</td>";
											}
										}
									}
								}
								echo "<td>$total[1]</td>";
											?>
							</tr>
							<tr>
								<th>Area III:Economia,<br> Administrativa y Financiera</th>
								<?php
								$economiaAdministracionFinanciera= array(5,10,15,19,21,26,29,33,36,44,53,56,59,62,71,80);
								foreach ($resultadosVocacional as $voc) {
									for ($i=0; $i < 16; $i++){
										if ($voc['idPregunta']==$economiaAdministracionFinanciera[$i]) {
											if ($voc['resultado']==1) {
												echo "<td class='colorCelda'>$economiaAdministracionFinanciera[$i]</td>";
												$total[2]=$total[2]+1;
											}else{
												echo "<td>$economiaAdministracionFinanciera[$i]</td>";
											}
										}
									}
								}
								echo "<td>$total[2]</td>";
								?>
							</tr>
							<tr>
								<th>Area IV:Ciencias y Tecnologia</th>
								<?php
									$cienciaTecnologia= array(1,7,11,17,18,24,30,41,48,51,58,60,61,64,73,79);
									foreach ($resultadosVocacional as $voc) {
										for ($i=0; $i < 16; $i++){
											if ($voc['idPregunta']==$cienciaTecnologia[$i]) {
												if ($voc['resultado']==1) {
													echo "<td class='colorCelda'>$cienciaTecnologia[$i]</td>";
													$total[3]=$total[3]+1;
												}else{
													echo "<td>$cienciaTecnologia[$i]</td>";
												}
											}
										}
									}
									echo "<td>$total[3]</td>";
								?>
							</tr>
							<tr>
								<th>Area V:Ciencias Ecologicas, <br>Biologias y de salud</th>
								<?php
									$cienciaEcologiaBiologiaSalud= array(2,3,8,14,16,22,27,32,40,45,47,54,57,69,74,76);
									$totalEcologia=0;
									foreach ($resultadosVocacional as $voc) {
										for ($i=0; $i < 16; $i++){
											if ($voc['idPregunta']==$cienciaEcologiaBiologiaSalud[$i]) {
												if ($voc['resultado']==1) {
													echo "<td class='colorCelda'>$cienciaEcologiaBiologiaSalud[$i]</td>";
													$total[4]=$total[4]+1;
												}else{
													echo "<td>$cienciaEcologiaBiologiaSalud[$i]</td>";
												}
											}
										}
									}
									echo "<td>$total[4]</td>";
								?>
							</tr>
						</table>
					</div>
		  		</div>
            </div>
        </div>
    </div>
</div>

<script> 
  Morris.Bar({
      // ID of the element in which to draw the chart.
      element: 'grafica',
   
      // Chart data records -- each entry in this array corresponds to a point
      // on the chart.
      data: [
              {y: '<?php echo $datosGrafica[0][0];?>', a: <?php echo $datosGrafica[0][1];?>},
              {y: '<?php echo $datosGrafica[1][0];?>', a: <?php echo $datosGrafica[1][1];?>},
              {y: '<?php echo $datosGrafica[2][0];?>', a: <?php echo $datosGrafica[2][1];?>}
           ],
   
      // The name of the data record attribute that contains x-values.
      xkey: ['y'],
   
      // A list of names of data record attributes that contain y-values.
      ykeys: ['a'],
   
      // Labels for the ykeys -- will be displayed when you hover over the
      // chart.
      labels: ['Total'],
   
      barColors: ['#0b6ee4'],
      xLabels: 'Total',
   
      // Disables line smoothing
      smooth: true,
      resize: true
  });
</script>