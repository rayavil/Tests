<?php
	$titulo="Resultado Aptitud";
	require("php/head.php");
	require_once ("php/conexion.php");
	require_once("php/nivel.php");
	$idUsuario=$_SESSION['idUsuario'];
	
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
    header("Location: principal.php");
  }
?>
<body>
    <div class="container">
    	<div class="row">
    			<div class="col-md-12">
    				<h2>Resultado test aptitud</h2>
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