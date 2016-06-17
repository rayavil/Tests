<?php
	$titulo="Test Vocacional";
	require("php/head.php");
	require('php/conexion.php');
	$idUsuario=$_SESSION['idUsuario'];
	try {
		$resultadoConsulta = $db->query("SELECT realizadoVocacional FROM usuarios WHERE idUsuario='".$idUsuario."'");
	} catch (Exception $e) {
		echo "La consulta no se a realizado";
		exit;
	}
	$existe = $resultadoConsulta->fetchALL(PDO::FETCH_ASSOC);
	foreach ($existe as $key) {
		if ($key['realizadoVocacional']=='1') {
			header("Location: tests.php");
		}
	}
	
	try {
		$resultadoConsulta = $db->query("SELECT idPregunta, pregunta FROM testvocacional ORDER BY idPregunta");
	} catch (Exception $e) {
		echo "La consulta no se a realizado";
		exit;
	}
	$testVocacional = $resultadoConsulta->fetchALL(PDO::FETCH_ASSOC);
?>
<body>
<?php
	require_once("php/nivel.php");
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
        	<h3>Test Vocacional</h3>
        </div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-primary">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<form method="POST" action="php/enviarDatos.php" id="formVocacional">
							<?php
								echo "<div class='row text-left'>";
									echo "<div class='col-md-12'>";
										echo '<input type="hidden" name="tipo" id="tipo" value="vocacional">';
									echo "</div>";
								echo "</div>";

								$i=1;
								foreach ($testVocacional as $testVo) {
									echo "<div class='row text-left'>";
										echo "<div class='col-md-12'>";
											echo "<label>$i".". ".$testVo['pregunta']."</label>";
										echo "</div>";
									echo "</div>";
									echo "<div class='row text-center'>";
										echo "<div class='col-md-4 col-md-offset-2'>";
											echo "<input type='radio' name='respuesta$i' id='respuesta$i' value='1'> Me interesa</input>";
										echo "</div>";
										echo "<div class='col-md-4'>";
											echo "<input type='radio' name='respuesta$i' id='respuesta$i' value='0'> No me interesa</input>";
										echo "</div>";
									echo "</div>";
									echo "<br>";
									$i++;
								}
							?>
							<input class="btn btn-primary" type="submit" value="Enviar">
						</form>
					</div>
				</div>
		</div>
	</div>
</div>
	<script>
    	$(':checkbox').checkboxpicker();
    </script>
    <script type="text/javascript" src="js/validarForm.js"></script>
    <script type="text/javascript" src="js/formatoForm.js"></script>
    
</body>
</html>