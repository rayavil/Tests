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

<script>


</script>

<div class="container">

	<div class="row">
		<div class="col-md-12 text-center">
        	<h3>Test Vocacional</h3>
        </div>
	</div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3>Test Vocacional</h3>
        </div>
    </div>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
            <div class="well well">

						<form method="POST" action="php/enviarDatos.php" id="formVocacional">
							<?php
								echo "<div class='row text-left'>";
									echo "<div class='col-md-12'>";
										echo '<input type="hidden" name="tipo" id="tipo" value="vocacional">';
									echo "</div>";
								echo "</div>";

								$i=1;
								foreach ($testVocacional as $testVo) {
                                    echo '<div id="panel'.$i.'" class="panel panel-default">
                                        <div class="panel-heading"><strong>'.$i.'.- '.$testVo['pregunta'].'</strong></div>
                                        <div class="panel-body" id="intro">';

									echo "<div class='row text-center '> <div class='btn-group col-xs-12' data-toggle='buttons'>";
                                    $var_selec="panel".$i;

										echo '<div class="col-xs-6 "  > <label  class="btn btn-warning ">';
											echo "<input  type='radio' name='respuesta$i' id='respuesta$i' value='0' onchange='seleccionado(\"".$var_selec."\");' autocomplete='off'> <span class='glyphicon glyphicon-thumbs-down' aria-hidden='true'></span> No me interesa           ";
										echo "</label></div>";

                                        echo '<div class=" col-xs-6"  > <label class="btn btn-success ">';
                                        echo "<input  type='radio' name='respuesta$i' id='respuesta$i' value='1' onchange='seleccionado(\"".$var_selec."\");' autocomplete='off'> <span class='glyphicon glyphicon-thumbs-up' aria-hidden='true'></span> Me interesa  ";
                                        echo "</label></div>";

									echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
									$i++;
								}
							?>
							<input class="btn btn-primary" type="submit" value="Enviar">
						</form>
					</div>
				</div>

        <div id="mensaje" class="col-sm-2">
            <div class="panel panel-info">
                <div class="panel-heading">Instrucciones</div>
                <div class="panel-body">
            Aqui va un parrafo que nos sigue con instrucciones...
                </div>
            </div>
            <div>

            </div>

        </div>

	</div>
</div>
	<script>


            /*$(':checkbox').checkboxpicker();*/

            function seleccionado(algoselec){
                $( "#"+algoselec ).removeClass( "panel-default" ).addClass( "panel-primary" );
            }

            $("#mensaje").stick_in_parent();





    </script>
    <script type="text/javascript" src="js/validarForm.js"></script>
    <script type="text/javascript" src="js/formatoForm.js"></script>
    
</body>
</html>