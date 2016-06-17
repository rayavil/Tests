<?php
	$numControl = $_GET['numControl'];
	$idUsuario=$_GET['numControl'];
	$existe=false;
	require_once ("php/conexion.php");

	try {
		$vquery = "SELECT idUsuario, nombre, apellidos, realizadoAptitud, fechaAptitud FROM usuarios WHERE idUsuario=".$numControl;
		$resultado = $db->query($vquery);
	} catch (Exception $e) {
		echo "La consulta no se ha podido realizar ".$vquery;				
	}
//	var_dump($resultado);
	if ($resultado==false) {
		
	}else{
		$usuarios = $resultado ->fetchALL(PDO::FETCH_ASSOC);
		foreach ($usuarios as $use) {
			if ($use['idUsuario']==$numControl && $use['realizadoAptitud']==1) {
				$existe=true;
				$nombreCompleto=$use['nombre']." ".$use['apellidos'];
				$fecha=$use['fechaAptitud'];
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
			$vquery2 = "SELECT idUsuario, idPregunta, resultado FROM usuario_testaptitud WHERE idUsuario=".$numControl;
			$resultado1 = $db->query($vquery2);
		} catch (Exception $e) {
			echo "La consulta no se ha podido realizar ".$vquery2;
		}
		$resultadosAptitud = $resultado1 ->fetchALL(PDO::FETCH_ASSOC);

		try {
    $resultadoConsulta = $db->query("SELECT cientifica, coordinacionVisomotriz, numerica, verbal, persuasiva, mecainca, social, directiva, organizacional, musical, artisticoPlastico, espacial FROM resultadosaptitud WHERE idUsuario='".$idUsuario."'");
  } catch (Exception $e) {
    echo "La consulta no se a realizado";
    exit;
  }
      $resultados = $resultadoConsulta->fetchALL(PDO::FETCH_ASSOC);
  if ($resultados!=NULL) {


    foreach ($resultados as $res) {
    	$tabla= array (
    		"cientifica"=>$res["cientifica"], 
			"coordinacionVisomotriz"=>$res['coordinacionVisomotriz'],
			"numerica"=>$res['numerica'],
    		"verbal"=>$res['verbal'],
    		"persuasiva"=>$res['persuasiva'],
    		"mecainca"=>$res['mecainca'],
    		"social"=>$res['social'],
    		"directiva"=>$res['directiva'],
    		"organizacional"=>$res['organizacional'],
    		"musical"=>$res['musical'],
    		"artisticoPlastico"=>$res['artisticoPlastico'],
    		"espacial"=>$res['espacial']
    	);
    }
    require_once("php/tablaAptitud.php");
  }else{
   // header("Location: principal.php");
  }
?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Resultado test aptitud</h2>
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
				<div class="col-md-5 col-md-offset-1 blanco margen">
					<div id="grafica">
						
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
            	<h4 class="modal-title" id="myModalLabel">Tabla de resultados aptitud</h4>
            </div>
            <div class="modal-body">
              	<div class="panel panel-primary">
  				<div class="panel-heading">
  					<div class="row">
  						<div class="col-md-4 col-md-offset-1">
  							Nombre: <?php echo $nombreCompleto;?>
  						</div>
  						<div class="col-md-5 col-md-offset-1">
  							Fecha de aplicación: <?php echo $fecha;?>
  						</div>
  					</div>
  				</div>
			  	<div class="panel-body">
			  		<div class="row">
  							<div class="col-md-2">
  								<table class="table table-hover">
  									<tr>
  										<th colspan="2"><br>Cientifica</th>
  									</tr>
  									<?php
  										$total=array(0,0,0,0,0,0,0,0,0,0,0,0);
  										$cientifica= array(1,21,36,38,51,70,78,93,96,107);
  										foreach ($resultadosAptitud as $apt) {
  											for ($i=0; $i < 10; $i++) { 
  												if($apt['idPregunta']==$cientifica[$i]){
  													echo "<tr>";
	  													echo "<td class='colorColumna'>$cientifica[$i].</td>";
	  													echo "<td>".$apt['resultado']."</td>";
	  												echo "</tr>";
	  												$total[0]=$total[0]+$apt['resultado'];
  												}
	  											
	  										}
  										}
	  										
  									?>
  								</table>
  							</div>
					  		<div class="col-md-2">
					  			<table class="table table-hover">
					  				<tr>
					  					<th colspan="2">Coordinacion <br>o visomotriz</th>
					  				</tr>
					  				<?php
  										$coordinacionVisomotriz= array(2,13,35,44,56,65,74,88,101,114);
  										foreach ($resultadosAptitud as $apt) {
  											for ($i=0; $i < 10; $i++) { 
  												if($apt['idPregunta']==$coordinacionVisomotriz[$i]){
  													echo "<tr>";
  													
	  													echo "<td class='colorColumna'>$coordinacionVisomotriz[$i].</td>";
	  													echo "<td>".$apt['resultado']."</td>";
	  												echo "</tr>";
	  												$total[1]=$total[1]+$apt['resultado'];
  												}
	  											
	  										}
  										}
  									?>
					  			</table>
					  		</div>
					  		<div class="col-md-2">
					  			<table class="table table-hover">
					  				<tr>
					  					<th colspan="2"><br>Numerica </th>
					  				</tr>
					  				<?php
  										$numerica= array(3,15,25,43,55,66,73,89,100,112);
  										foreach ($resultadosAptitud as $apt) {
  											for ($i=0; $i < 10; $i++) { 
  												if($apt['idPregunta']==$numerica[$i]){
  													echo "<tr>";
	  													echo "<td class='colorColumna'>$numerica[$i].</td>";
	  													echo "<td>".$apt['resultado']."</td>";
	  												echo "</tr>";
	  												$total[2]=$total[2]+$apt['resultado'];
  												}
	  											
	  										}
  										}
  									?>
					  			</table>
					  		</div>
					  		<div class="col-md-2">
					  			<table class="table table-hover">
					  				<tr>
					  					<th colspan="2"><br>Verbal</th>
					  				</tr>
					  				<?php
  										$verbal= array(4,16,27,41,53,68,80,91,98,110);
  										foreach ($resultadosAptitud as $apt) {
  											for ($i=0; $i < 10; $i++) { 
  												if($apt['idPregunta']==$verbal[$i]){
  													echo "<tr>";
  														echo "<td class='colorColumna'>$verbal[$i].</td>";
	  													echo "<td>".$apt['resultado']."</td>";
	  												echo "</tr>";
	  												$total[3]=$total[3]+$apt['resultado'];
  												}
	  											
	  										}
  										}
  									?>
					  			</table>
					  		</div>
					  		<div class="col-md-2">
					  			<table class="table table-hover">
					  				<tr>
					  					<th colspan="2"><br>Persuasiva</th>
					  				</tr>
					  				<?php
  										$persuasiva= array(5,20,34,46,50,71,77,85,104,117);
  										foreach ($resultadosAptitud as $apt) {
  											for ($i=0; $i < 10; $i++) { 
  												if($apt['idPregunta']==$persuasiva[$i]){
  													echo "<tr>";
  														echo "<td class='colorColumna'>$persuasiva[$i].</td>";
	  													echo "<td>".$apt['resultado']."</td>";
	  												echo "</tr>";
	  												$total[4]=$total[4]+$apt['resultado'];
  												}
	  											
	  										}
  										}
  									?>
					  			</table>
					  		</div>
					  		<div class="col-md-2">
					  			<table class="table table-hover">
					  				<tr>
					  					<th colspan="2"><br>Mecainca</th>
					  				</tr>
					  				<?php
  										$mecainca= array(6,19,29,40,58,63,76,86,103,116);
  										foreach ($resultadosAptitud as $apt) {
  											for ($i=0; $i < 10; $i++) { 
  												if($apt['idPregunta']==$mecainca[$i]){
  													echo "<tr>";
  														echo "<td class='colorColumna'>$mecainca[$i].</td>";
	  													echo "<td>".$apt['resultado']."</td>";
	  												echo "</tr>";
	  												$total[5]=$total[5]+$apt['resultado'];
  												}
	  											
	  										}
  										}
  									?>
					  			</table>
					  		</div>
				  	</div>
					<div class="row margenTabla">
					  		<div class="col-md-12">
						  		<table class="table table-hover">
						  			<tr>
						  				<?php
						  					for ($i=0; $i < 6; $i++) { 
						  						echo "<th>Total</th>";
						  						echo "<td>".$total[$i]."</td>";
						  					}
						  				?>
						  			</tr>
						  		</table>
					  		</div>
				  	</div>
			  	</div>
			  	<div class="panel-body">
							<div class="row">
						  		<div class="col-md-2">
							  			<table class="table table-hover">
							  				<tr>
							  					<th colspan="2"><br>Social</th>
							  				</tr>
							  				<?php
	  											$social= array(7,14,33,37,52,69,79,92,97,108);
	  											foreach ($resultadosAptitud as $apt) {
		  											for ($i=0; $i < 10; $i++) { 
		  												if($apt['idPregunta']==$social[$i]){
		  													echo "<tr>";
		  														echo "<td class='colorColumna'>$social[$i].</td>";
			  													echo "<td>".$apt['resultado']."</td>";
			  												echo "</tr>";
			  												$total[6]=$total[6]+$apt['resultado'];
		  												}
			  											
			  										}
		  										}
	  										?>
							  			</table>
						  		</div>
						  		<div class="col-md-2">
							  			<table class="table table-hover">
							  				<tr>
							  					<th colspan="2"><br>Directiva</th>
							  				</tr>
							  				<?php
		  										$directiva= array(8,18,30,39,57,64,75,87,102,115);
		  										foreach ($resultadosAptitud as $apt) {
		  											for ($i=0; $i < 10; $i++) { 
		  												if($apt['idPregunta']==$directiva[$i]){
		  													echo "<tr>";
		  														echo "<td class='colorColumna'>$directiva[$i].</td>";
			  													echo "<td>".$apt['resultado']."</td>";
			  												echo "</tr>";
			  												$total[7]=$total[7]+$apt['resultado'];
		  												}
			  											
			  										}
		  										}
		  									?>
							  			</table>
						  		</div>
						  		<div class="col-md-2">
							  			<table class="table table-hover">
							  				<tr>
							  					<th colspan="2"><br>Organizacional</th>
							  				</tr>
							  				<?php
		  										$organizacional= array(9,17,26,42,54,67,81,90,99,111);
		  										foreach ($resultadosAptitud as $apt) {
		  											for ($i=0; $i < 10; $i++) { 
		  												if($apt['idPregunta']==$organizacional[$i]){
		  													echo "<tr>";
		  														echo "<td class='colorColumna'>$organizacional[$i].</td>";
			  													echo "<td>".$apt['resultado']."</td>";
			  												echo "</tr>";
			  												$total[8]=$total[8]+$apt['resultado'];
		  												}
			  											
			  										}
		  										}
		  									?>
							  			</table>
						  		</div>
						  		<div class="col-md-2">
							  			<table class="table table-hover">
							  				<tr>
							  					<th colspan="2"><br>Musical</th>
							  				</tr>
							  				<?php
		  										$musical= array(10,31,47,60,72,83,105,109,113,118);
		  										foreach ($resultadosAptitud as $apt) {
		  											for ($i=0; $i < 10; $i++) { 
		  												if($apt['idPregunta']==$musical[$i]){
		  													echo "<tr>";
		  														echo "<td class='colorColumna'>$musical[$i].</td>";
			  													echo "<td>".$apt['resultado']."</td>";
			  												echo "</tr>";
			  												$total[9]=$total[9]+$apt['resultado'];
		  												}		
			  										}
		  										}
		  									?>
							  			</table>
						  		</div>
						  		<div class="col-md-2">
							  			<table class="table table-hover">
							  				<tr>
							  					<th colspan="2">Artistico-Plastico</th>
							  				</tr>
							  				<?php
		  										$artisticoPlastico= array(11,23,24,32,49,61,82,94,106,120);
		  										foreach ($resultadosAptitud as $apt) {
		  											for ($i=0; $i < 10; $i++) { 
		  												if($apt['idPregunta']==$artisticoPlastico[$i]){
		  													echo "<tr>";
		  														echo "<td class='colorColumna'>$artisticoPlastico[$i].</td>";
			  													echo "<td>".$apt['resultado']."</td>";
			  												echo "</tr>";
			  												$total[10]=$total[10]+$apt['resultado'];
		  												}
			  											
			  										}
		  										}
		  									?>
							  			</table>
					    		</div>
								<div class="col-md-2">
							  			<table class="table table-hover">
							  				<tr>
							  					<th colspan="2"><br>Espacial</th>
							  				</tr>
							  				<?php
		  										$espacial= array(12,22,28,45,48,59,62,84,95,119);
		  										foreach ($resultadosAptitud as $apt) {
		  											for ($i=0; $i < 10; $i++) { 
		  												if($apt['idPregunta']==$espacial[$i]){
		  													echo "<tr>";
		  														echo "<td class='colorColumna'>$espacial[$i].</td>";
			  													echo "<td>".$apt['resultado']."</td>";
			  												echo "</tr>";
			  												$total[11]=$total[11]+$apt['resultado'];
		  												}
			  											
			  										}
		  										}
		  									?>
							  			</table>
								</div>
							</div>
						  	<div class="row margenTabla">
						  		<div class="col-md-12">
							  		<table class="table table-hover">
							  			<tr>
							  				<?php
							  					for ($i=6; $i < 12; $i++) { 
							  						echo "<th>Total</th>";
							  						echo "<td>".$total[$i]."</td>";
							  					}
							  				?>
							  			</tr>
							  		</table>
							  		</div>
							  	</div>
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