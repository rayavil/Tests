<?php
	arsort($tabla);
	foreach ($tabla as $key => $val) {
		if($key == 'cientifica'){
			$datosGrafica[0][0]='Área Científica';
			$datosGrafica[0][1]=$val;
			$descripcion[0]='<h4>ÁREA CIENTÍFICA:</h4>
			<p>Manifiestan quienes encuentran placer en investigar la razón de les hechos o de las cosas, en descubrir sus causas y en resolver problemas de distinta índole, por mera curiosidad científica y sin pensar en los beneficios económicos que pueden resultar de sus descubrimientos. El interés científico es de gran importancia en el ejercicio de muchas carreras profesionales, aún en aquellas donde el móvil de la actividad puede ser de índole distinta al progreso de la ciencia. Los médicos, los farmaceutas, los químicos, los odontólogos, los veterinarios, los técnicos de laboratorio, les psicólogos etc. demuestran por lo general un alto interés científico.</p>';
			unset($tabla['cientifica']);
		}elseif ($key == 'coordinacionVisomotriz') {
			$datosGrafica[0][0]='Coordinación Visomotriz';
			$datosGrafica[0][1]=$val;
			$descripcion[0]='<h4>COORDINACIÓN VISOMOTRIZ:</h4>
			<p>Se refiere a la capacidad de tener movimientos finos que implican un dominio del propio cuerpo especialmente manos y dedos.</p>';
			unset($tabla['coordinacionVisomotriz']);
		}elseif ($key == 'numerica') {
		  	$datosGrafica[0][0]='Numérica';
		  	$datosGrafica[0][1]=$val;
		  	$descripcion[0]='<h4>NUMÉRICA:</h4>
		   	<p>Lo poseen aquellas personas a quienes gusta trabajar números. Un alto puntaje obtenido en esta área indica la posibilidad de que podría encontrar satisfacción en el ejercicio dé profesiones tales como: estadígrafo, profesor de matemáticas, economista, actuario, especialista en elaboración de presupuesto, etc., muchos ingenieros y todas las actividades relacionadas con el cálculo.</p>';
			unset($tabla['numerica']);
	   }elseif ($key == 'verbal') {
	    	$datosGrafica[0][0]='Verbal';
	    	$datosGrafica[0][1]=$val;
	    	$descripcion[0]='<h4>VERBAL:</h4>
	    	<p>Se refiere a la capacidad de manejar conceptos, de entender ideas expresadas en palabras y poner en términos verbales los razonamientos. De gran importancia para el aprendizaje de lenguas, historia y ciencias en general, para el estudio de todos los niveles de educación. Un alto puntaje es necesario para el éxito en las carreras profesionales tales cornos derecho, docencia, secretariado y en general en toda clase de actividades subalternas que necesitan instrucción oral o escrita.</p>';
			unset($tabla['verbal']);
		}elseif ($key == 'persuasiva') {
			$datosGrafica[0][0]='Persuasiva';
			$datosGrafica[0][1]=$val;
			$descripcion[0]='<h4>PERSUASIVO:</h4>
			<p>Lo poseen aquellas personas que gustan del trato con la gente, a quienes les agrada imponer sus puntos de vista, convencer a los demás respecto a algún proyecto, venderles algún artículo, etc. Abogados, periodistas, actores, comerciantes, agentes de; compañías de seguros, diplomáticos de carrera, etc., logran tener altos puntajes en este campo de intereses.</p>';
			unset($tabla['persuasiva']);
		}elseif ($key == 'mecainca') {
			$datosGrafica[0][0]='Mecainca';
			$datosGrafica[0][1]=$val;
			$descripcion[0]='<h4>MECÁNICA:</h4>
			<p>Un alto puntaje indica interés por trabajar con máquinas y herramientas, construir o arreglar objetos mecánicos, artefactos eléctricos, muebles, etc. Logran altos puntajes en esta área: los ingenieros de distintas especializaciones, civiles, Electricistas, industriales, mecánicos, los aviadores, los especialistas en radio y televisión y otras actividades afines, los carpinteros, los maquinistas, torneros, soldadores, etc.</p>';
			unset($tabla['mecainca']);
		}elseif ($key == 'social') {
			$datosGrafica[0][0]='Social';
			$datosGrafica[0][1]=$val;
			$descripcion[0]='<h4>SOCIAL:</h4>
			<p>Un alto puntaje en esta área del servicio social, indica un alto grado de interés por servir a los demás y en primer lugar a los necesitados, a los enfermos, a los niños y a los ancianos. Sacerdotes, misioneros, asistentes, sociales, enfermeras, educadores, etc., muestran una marcada preferencia para el trabajo en el campo social.</p>';
			unset($tabla['social']);
		}elseif ($key == 'directiva') {
			$datosGrafica[0][0]='Directiva';
			$datosGrafica[0][1]=$val;
			$descripcion[0]='<h4>DIRECTIVA:</h4>
			<p>Capacidad para centrar a los grupos laborales en el cumplimiento de sus responsabilidades.</p>';
			unset($tabla['directiva']);
		}elseif ($key == 'organizacional') {
			$datosGrafica[0][0]='Organizacional';
			$datosGrafica[0][1]=$val;
			$descripcion[0]='<h4>ORGANIZACIONAL:</h4>
			<p>Es propio de las personas a quienes gusta un tipo de trabajo de escritorio que requiere exactitud y precisión. Los contadores, tenedores de libros, archivistas, mecanógrafos, secretarias etc., marcan un alto puntaje de intereses en esta área.</p>';
			unset($tabla['organizacional']);
		}elseif ($key == 'musical') {
			$datosGrafica[0][0]='Musical';
			$datosGrafica[0][1]=$val;
			$descripcion[0]='<h4>MUSICAL:</h4>
			<p>En el campo del interés musical se sitúan las personas que denotan un marcado gusto por tocar instrumentos musicales, cantar, leer sobre música, estudiar la vida de destacados compositores, asistir a conciertos, etc. Los músicos profesionales, los compositores, los profesores de música, los artistas de ballet, son los que obtienen los más albos puntajes en esta área.</p>';
			unset($tabla['musical']);
		}elseif ($key == 'artisticoPlastico') {
			$datosGrafica[0][0]='Artistico - Plastico';
			$datosGrafica[0][1]=$val;
			$descripcion[0]='<h4>ARTÍSTICO - PLÁSTICO:</h4>
			<p>Las personas con un interés artístico plástico predominante, son aquellas a quienes gusta hacer trabajos de creación de tipo manual, usando combinación de colores, de materiales, formas y diseños. Los pintores, escultores, arquitectos, decoradores, diseñadores, fotógrafos profesionales, modistos, etc. están entre aquellos cuyos intereses se sitúan dentro de esta área.</p>';
			unset($tabla['artisticoPlastico']);
		}elseif ($key == 'espacial') {
			$datosGrafica[0][0]='Espacial';
			$datosGrafica[0][1]=$val;
			$descripcion[0]='<h4>ESPECIAL:</h4>
			<p>Altos puntajes obtenidos en esta área significan, que a la persona le gusta pasar la mayor parte del tiempo en el campo, en los bosques o en el mar y le agrada cultivar plantas o cuidar de los animales, etc. En cambio no se sentirá muy a gusto en una fábrica, en laboratorios o en una oficina. Los ingenieros agrónomos, los ingenieros forestales, de minas, los militares, los agricultores, los prácticos agrícolas, los jardineros profesionales, los pescadores profesionales, etc.';
			unset($tabla['espacial']);
		}
			break;
	}

	foreach ($tabla as $key => $val) {
		if($key == 'cientifica'){
			$datosGrafica[1][0]='Área Científica';
			$datosGrafica[1][1]=$val;
			$descripcion[1]='<h4>ÁREA CIENTÍFICA:</h4>
			<p>Manifiestan quienes encuentran placer en investigar la razón de les hechos o de las cosas, en descubrir sus causas y en resolver problemas de distinta índole, por mera curiosidad científica y sin pensar en los beneficios económicos que pueden resultar de sus descubrimientos. El interés científico es de gran importancia en el ejercicio de muchas carreras profesionales, aún en aquellas donde el móvil de la actividad puede ser de índole distinta al progreso de la ciencia. Los médicos, los farmaceutas, los químicos, los odontólogos, los veterinarios, los técnicos de laboratorio, les psicólogos etc. demuestran por lo general un alto interés científico.</p>';
			unset($tabla['cientifica']);
		}elseif ($key == 'coordinacionVisomotriz') {
			$datosGrafica[1][0]='Coordinación Visomotriz';
			$datosGrafica[1][1]=$val;
			$descripcion[1]='<h4>COORDINACIÓN VISOMOTRIZ:</h4>
			<p>Se refiere a la capacidad de tener movimientos finos que implican un dominio del propio cuerpo especialmente manos y dedos.</p>';
			unset($tabla['coordinacionVisomotriz']);
		}elseif ($key == 'numerica') {
		  	$datosGrafica[1][0]='Numérica';
		  	$datosGrafica[1][1]=$val;
		  	$descripcion[1]='<h4>NUMÉRICA:</h4>
		   	<p>Lo poseen aquellas personas a quienes gusta trabajar números. Un alto puntaje obtenido en esta área indica la posibilidad de que podría encontrar satisfacción en el ejercicio dé profesiones tales como: estadígrafo, profesor de matemáticas, economista, actuario, especialista en elaboración de presupuesto, etc., muchos ingenieros y todas las actividades relacionadas con el cálculo.</p>';
			unset($tabla['numerica']);
	   }elseif ($key == 'verbal') {
	    	$datosGrafica[1][0]='Verbal';
	    	$datosGrafica[1][1]=$val;
	    	$descripcion[1]='<h4>VERBAL:</h4>
	    	<p>Se refiere a la capacidad de manejar conceptos, de entender ideas expresadas en palabras y poner en términos verbales los razonamientos. De gran importancia para el aprendizaje de lenguas, historia y ciencias en general, para el estudio de todos los niveles de educación. Un alto puntaje es necesario para el éxito en las carreras profesionales tales cornos derecho, docencia, secretariado y en general en toda clase de actividades subalternas que necesitan instrucción oral o escrita.</p>';
			unset($tabla['verbal']);
		}elseif ($key == 'persuasiva') {
			$datosGrafica[1][0]='Persuasiva';
			$datosGrafica[1][1]=$val;
			$descripcion[1]='<h4>PERSUASIVO:</h4>
			<p>Lo poseen aquellas personas que gustan del trato con la gente, a quienes les agrada imponer sus puntos de vista, convencer a los demás respecto a algún proyecto, venderles algún artículo, etc. Abogados, periodistas, actores, comerciantes, agentes de; compañías de seguros, diplomáticos de carrera, etc., logran tener altos puntajes en este campo de intereses.</p>';
			unset($tabla['persuasiva']);
		}elseif ($key == 'mecainca') {
			$datosGrafica[1][0]='Mecainca';
			$datosGrafica[1][1]=$val;
			$descripcion[1]='<h4>MECÁNICA:</h4>
			<p>Un alto puntaje indica interés por trabajar con máquinas y herramientas, construir o arreglar objetos mecánicos, artefactos eléctricos, muebles, etc. Logran altos puntajes en esta área: los ingenieros de distintas especializaciones, civiles, Electricistas, industriales, mecánicos, los aviadores, los especialistas en radio y televisión y otras actividades afines, los carpinteros, los maquinistas, torneros, soldadores, etc.</p>';
			unset($tabla['mecainca']);
		}elseif ($key == 'social') {
			$datosGrafica[1][0]='Social';
			$datosGrafica[1][1]=$val;
			$descripcion[1]='<h4>SOCIAL:</h4>
			<p>Un alto puntaje en esta área del servicio social, indica un alto grado de interés por servir a los demás y en primer lugar a los necesitados, a los enfermos, a los niños y a los ancianos. Sacerdotes, misioneros, asistentes, sociales, enfermeras, educadores, etc., muestran una marcada preferencia para el trabajo en el campo social.</p>';
			unset($tabla['social']);
		}elseif ($key == 'directiva') {
			$datosGrafica[1][0]='Directiva';
			$datosGrafica[1][1]=$val;
			$descripcion[1]='<h4>DIRECTIVA:</h4>
			<p>Capacidad para centrar a los grupos laborales en el cumplimiento de sus responsabilidades.</p>';
			unset($tabla['directiva']);
		}elseif ($key == 'organizacional') {
			$datosGrafica[1][0]='Organizacional';
			$datosGrafica[1][1]=$val;
			$descripcion[1]='<h4>ORGANIZACIONAL:</h4>
			<p>Es propio de las personas a quienes gusta un tipo de trabajo de escritorio que requiere exactitud y precisión. Los contadores, tenedores de libros, archivistas, mecanógrafos, secretarias etc., marcan un alto puntaje de intereses en esta área.</p>';
			unset($tabla['organizacional']);
		}elseif ($key == 'musical') {
			$datosGrafica[1][0]='Musical';
			$datosGrafica[1][1]=$val;
			$descripcion[1]='<h4>MUSICAL:</h4>
			<p>En el campo del interés musical se sitúan las personas que denotan un marcado gusto por tocar instrumentos musicales, cantar, leer sobre música, estudiar la vida de destacados compositores, asistir a conciertos, etc. Los músicos profesionales, los compositores, los profesores de música, los artistas de ballet, son los que obtienen los más albos puntajes en esta área.</p>';
			unset($tabla['musical']);
		}elseif ($key == 'artisticoPlastico') {
			$datosGrafica[1][0]='Artistico - Plastico';
			$datosGrafica[1][1]=$val;
			$descripcion[1]='<h4>ARTÍSTICO - PLÁSTICO:</h4>
			<p>Las personas con un interés artístico plástico predominante, son aquellas a quienes gusta hacer trabajos de creación de tipo manual, usando combinación de colores, de materiales, formas y diseños. Los pintores, escultores, arquitectos, decoradores, diseñadores, fotógrafos profesionales, modistos, etc. están entre aquellos cuyos intereses se sitúan dentro de esta área.</p>';
			unset($tabla['artisticoPlastico']);
		}elseif ($key == 'espacial') {
			$datosGrafica[1][0]='Espacial';
			$datosGrafica[1][1]=$val;
			$descripcion[1]='<h4>ESPECIAL:</h4>
			<p>Altos puntajes obtenidos en esta área significan, que a la persona le gusta pasar la mayor parte del tiempo en el campo, en los bosques o en el mar y le agrada cultivar plantas o cuidar de los animales, etc. En cambio no se sentirá muy a gusto en una fábrica, en laboratorios o en una oficina. Los ingenieros agrónomos, los ingenieros forestales, de minas, los militares, los agricultores, los prácticos agrícolas, los jardineros profesionales, los pescadores profesionales, etc.';
			unset($tabla['espacial']);
		}
			break;
	}


	foreach ($tabla as $key => $val) {
		if($key == 'cientifica'){
			$datosGrafica[2][0]='Área Científica';
			$datosGrafica[2][1]=$val;
			$descripcion[2]='<h4>ÁREA CIENTÍFICA:</h4>
			<p>Manifiestan quienes encuentran placer en investigar la razón de les hechos o de las cosas, en descubrir sus causas y en resolver problemas de distinta índole, por mera curiosidad científica y sin pensar en los beneficios económicos que pueden resultar de sus descubrimientos. El interés científico es de gran importancia en el ejercicio de muchas carreras profesionales, aún en aquellas donde el móvil de la actividad puede ser de índole distinta al progreso de la ciencia. Los médicos, los farmaceutas, los químicos, los odontólogos, los veterinarios, los técnicos de laboratorio, les psicólogos etc. demuestran por lo general un alto interés científico.</p>';
			unset($tabla['cientifica']);
		}elseif ($key == 'coordinacionVisomotriz') {
			$datosGrafica[2][0]='Coordinación Visomotriz';
			$datosGrafica[2][1]=$val;
			$descripcion[2]='<h4>COORDINACIÓN VISOMOTRIZ:</h4>
			<p>Se refiere a la capacidad de tener movimientos finos que implican un dominio del propio cuerpo especialmente manos y dedos.</p>';
			unset($tabla['coordinacionVisomotriz']);
		}elseif ($key == 'numerica') {
		  	$datosGrafica[2][0]='Numérica';
		  	$datosGrafica[2][1]=$val;
		  	$descripcion[2]='<h4>NUMÉRICA:</h4>
		   	<p>Lo poseen aquellas personas a quienes gusta trabajar números. Un alto puntaje obtenido en esta área indica la posibilidad de que podría encontrar satisfacción en el ejercicio dé profesiones tales como: estadígrafo, profesor de matemáticas, economista, actuario, especialista en elaboración de presupuesto, etc., muchos ingenieros y todas las actividades relacionadas con el cálculo.</p>';
			unset($tabla['numerica']);
	   }elseif ($key == 'verbal') {
	    	$datosGrafica[2][0]='Verbal';
	    	$datosGrafica[2][1]=$val;
	    	$descripcion[2]='<h4>VERBAL:</h4>
	    	<p>Se refiere a la capacidad de manejar conceptos, de entender ideas expresadas en palabras y poner en términos verbales los razonamientos. De gran importancia para el aprendizaje de lenguas, historia y ciencias en general, para el estudio de todos los niveles de educación. Un alto puntaje es necesario para el éxito en las carreras profesionales tales cornos derecho, docencia, secretariado y en general en toda clase de actividades subalternas que necesitan instrucción oral o escrita.</p>';
			unset($tabla['verbal']);
		}elseif ($key == 'persuasiva') {
			$datosGrafica[2][0]='Persuasiva';
			$datosGrafica[2][1]=$val;
			$descripcion[2]='<h4>PERSUASIVO:</h4>
			<p>Lo poseen aquellas personas que gustan del trato con la gente, a quienes les agrada imponer sus puntos de vista, convencer a los demás respecto a algún proyecto, venderles algún artículo, etc. Abogados, periodistas, actores, comerciantes, agentes de; compañías de seguros, diplomáticos de carrera, etc., logran tener altos puntajes en este campo de intereses.</p>';
			unset($tabla['persuasiva']);
		}elseif ($key == 'mecainca') {
			$datosGrafica[2][0]='Mecainca';
			$datosGrafica[2][1]=$val;
			$descripcion[2]='<h4>MECÁNICA:</h4>
			<p>Un alto puntaje indica interés por trabajar con máquinas y herramientas, construir o arreglar objetos mecánicos, artefactos eléctricos, muebles, etc. Logran altos puntajes en esta área: los ingenieros de distintas especializaciones, civiles, Electricistas, industriales, mecánicos, los aviadores, los especialistas en radio y televisión y otras actividades afines, los carpinteros, los maquinistas, torneros, soldadores, etc.</p>';
			unset($tabla['mecainca']);
		}elseif ($key == 'social') {
			$datosGrafica[2][0]='Social';
			$datosGrafica[2][1]=$val;
			$descripcion[2]='<h4>SOCIAL:</h4>
			<p>Un alto puntaje en esta área del servicio social, indica un alto grado de interés por servir a los demás y en primer lugar a los necesitados, a los enfermos, a los niños y a los ancianos. Sacerdotes, misioneros, asistentes, sociales, enfermeras, educadores, etc., muestran una marcada preferencia para el trabajo en el campo social.</p>';
			unset($tabla['social']);
		}elseif ($key == 'directiva') {
			$datosGrafica[2][0]='Directiva';
			$datosGrafica[2][1]=$val;
			$descripcion[2]='<h4>DIRECTIVA:</h4>
			<p>Capacidad para centrar a los grupos laborales en el cumplimiento de sus responsabilidades.</p>';
			unset($tabla['directiva']);
		}elseif ($key == 'organizacional') {
			$datosGrafica[2][0]='Organizacional';
			$datosGrafica[2][1]=$val;
			$descripcion[2]='<h4>ORGANIZACIONAL:</h4>
			<p>Es propio de las personas a quienes gusta un tipo de trabajo de escritorio que requiere exactitud y precisión. Los contadores, tenedores de libros, archivistas, mecanógrafos, secretarias etc., marcan un alto puntaje de intereses en esta área.</p>';
			unset($tabla['organizacional']);
		}elseif ($key == 'musical') {
			$datosGrafica[2][0]='Musical';
			$datosGrafica[2][1]=$val;
			$descripcion[2]='<h4>MUSICAL:</h4>
			<p>En el campo del interés musical se sitúan las personas que denotan un marcado gusto por tocar instrumentos musicales, cantar, leer sobre música, estudiar la vida de destacados compositores, asistir a conciertos, etc. Los músicos profesionales, los compositores, los profesores de música, los artistas de ballet, son los que obtienen los más albos puntajes en esta área.</p>';
			unset($tabla['musical']);
		}elseif ($key == 'artisticoPlastico') {
			$datosGrafica[2][0]='Artistico - Plastico';
			$datosGrafica[2][1]=$val;
			$descripcion[2]='<h4>ARTÍSTICO - PLÁSTICO:</h4>
			<p>Las personas con un interés artístico plástico predominante, son aquellas a quienes gusta hacer trabajos de creación de tipo manual, usando combinación de colores, de materiales, formas y diseños. Los pintores, escultores, arquitectos, decoradores, diseñadores, fotógrafos profesionales, modistos, etc. están entre aquellos cuyos intereses se sitúan dentro de esta área.</p>';
			unset($tabla['artisticoPlastico']);
		}elseif ($key == 'espacial') {
			$datosGrafica[2][0]='Espacial';
			$datosGrafica[2][1]=$val;
			$descripcion[2]='<h4>ESPECIAL:</h4>
			<p>Altos puntajes obtenidos en esta área significan, que a la persona le gusta pasar la mayor parte del tiempo en el campo, en los bosques o en el mar y le agrada cultivar plantas o cuidar de los animales, etc. En cambio no se sentirá muy a gusto en una fábrica, en laboratorios o en una oficina. Los ingenieros agrónomos, los ingenieros forestales, de minas, los militares, los agricultores, los prácticos agrícolas, los jardineros profesionales, los pescadores profesionales, etc.';
			unset($tabla['espacial']);
		}
			break;
	}
?>