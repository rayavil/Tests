<?php
	$titulo="Resultado Vocacional";
	require("php/head.php");
	require_once ("php/conexion.php");
	require_once("php/nivel.php");
	$idUsuario=$_SESSION['idUsuario'];
	
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
  	header("Location: principal.php");
  }
  require_once('php/tablaVocacional.php');
?>
<body>
<div class="container">
	<div class="row">
			<div class="col-md-12">
				<h2>Resultado test vocacional</h2>
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
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>