<?php
	$titulo="Test Aptitud";
	require("php/head.php");
	require('php/conexion.php');
	$idUsuario=$_SESSION['idUsuario'];
	
	try {
		$resultadoConsulta = $db->query("SELECT realizadoAptitud FROM usuarios WHERE idUsuario='".$idUsuario."'");
	} catch (Exception $e) {
		echo "La consulta no se a realizado";
		exit;
	}
	$existe = $resultadoConsulta->fetchALL(PDO::FETCH_ASSOC);
	//var_export($existe);
	foreach ($existe as $key) {
		if ($key['realizadoAptitud']=='1') {
			header("Location: tests.php");
		}
	}

	try {
		$vsql=("SELECT idPregunta, pregunta FROM testaptitud ORDER BY idPregunta");
		$resultadoConsulta = $db->query($vsql);
	} catch (Exception $e) {
		echo "La consulta no se a realizado";
		exit;
	}
	$testAptitud = $resultadoConsulta->fetchALL(PDO::FETCH_ASSOC);
?>
	<body>
<?php
	include("php/menu.php");
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
	        	<h3>Test Aptitud</h3>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-9 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<form method="POST" action="php/enviarDatos.php" id="formAptitud" >
						    <div class='row text-left'>
									<div class='col-md-12'>
									<input type="hidden" name="tipo" id="tipo" value="aptitud">
								</div>
							</div>

							<?php

								$i=0;
									foreach ($testAptitud as $testAp) {
										$i++;
										echo "<div class='row text-left'>";
											echo "<div class='col-md-12'>";
												echo "<label>$i".". ".$testAp['pregunta']."</label>";
											echo "</div>";
										echo "</div>";

										echo "<div class='row text-center'>";
											echo "<div class='col-md-2'>";
												echo "<input type='radio' name='respuesta$i' id='respuesta$i' value='5'>Mucho muy habil</input>";
											echo "</div>";
											echo "<div class='col-md-2'>";
												echo "<input type='radio' name='respuesta$i' id='respuesta$i' value='4'>Muy habil</input>";
											echo "</div>";
											echo "<div class='col-md-3'>";
												echo "<input type='radio' name='respuesta$i' id='respuesta$i' value='3'>Medianamente habil</input>";
											echo "</div>";
											echo "<div class='col-md-2'>";
												echo "<input type='radio' name='respuesta$i' id='respuesta$i' value='2'>Poco habil</input>";
											echo "</div>";
											echo "<div class='col-md-2'>";
												echo "<input type='radio' name='respuesta$i' id='respuesta$i' value='1'>Nada Habil</input>";
											echo "</div>";
										echo "</div>";
										echo "<br>";
									}
								?>
							<input class="btn btn-primary" type="submit" value="Enviar">
		  				</form>
					</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/validarForm.js"></script>
		<script type="text/javascript" src="js/formatoForm.js"></script>
	</body>
</html>