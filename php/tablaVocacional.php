<?php
	arsort($tabla);
	foreach ($tabla as $key => $val) {
	    if($key == 'ArteyCreatividad'){
	    	$datosGrafica[0][0]='Arte y Creatividad';
	    	$datosGrafica[0][1]=$val;
	    	$descripcion[0]='<h4>ARTE Y CREATIVIDAD:</h4>
	    	<p>Diseño Gráfico, Diseño y Decoración de Interiores, Diseño de Jardines, Diseño de Modas, Fotografía Digital, Gestión Gráfica y Publicitaria, Producción Audiovisual y Multimedia, Comunicación y Producción en Radio y Televisión, Diseño del Paisaje, Cine y Video.</p>';
	    	unset($tabla['ArteyCreatividad']);
	    }elseif ($key == 'CiensiasSociales') {
	    	$datosGrafica[0][0]='Ciensias Sociales';
	    	$datosGrafica[0][1]=$val;
	    	$descripcion[0]='<h4>CIENCIAS SOCIALES:</h4>
	    	<p>Gestión de Empresas, Psicología en general, Idiomas, Educación Internacional, Historia y Geografía, Periodismo, Derecho, Ciencias Políticas, Gestión Social y Desarrollo, Administración Educativa, Educación Especial, Relaciones Internacionales y Diplomacia, Relaciones Públicas y Comunicación Organizacional, Institución Sacerdotal.</p>';
	    	unset($tabla['CiensiasSociales']);
	    }elseif ($key == 'EconomiaAdministrativayFinanciera') {
	    	$datosGrafica[0][0]='Económia, Administración y Financiera';
	    	$datosGrafica[0][1]=$val;
	    	$descripcion[0]='<h4>ECONÓMICA, ADMINISTRATIVA Y FINANCIERA:</h4>
	    	<p>Administración de Empresas, Contabilidad, Auditoría, Ventas, Gestión y Negocios Internacionales, Gestión Empresarial, Gestión Financiera, Ingeniería Comercial, Ciencias Económicas y Financieras, Administración y Ciencias Políticas, Ciencias Empresariales, Comercio Electrónico, Emprendedores, Gestión de Organismos Públicos (Municipios, Ministerios, etcétera.), Gestión de Centros Educativos.</p>';
	    	unset($tabla['EconomiaAdministrativayFinanciera']);
	    }elseif ($key == 'CienciasyTecnologia') {
	    	$datosGrafica[0][0]='Ciencias y Tecnologia';
	    	$datosGrafica[0][1]=$val;
	    	$descripcion[0]='<h4>CIENCIA Y TECNOLOGÍA:</h4>
	    	<p>Ingeniería en Sistemas Computacionales, Ingeniería Civil, Arquitectura, Electrónica, Ingenieria en Minas, Ingeniería Mecánica, Ingeniería Industrial, Física, Matemáticas Aplicadas, Ingeniería en Estadística, Estadística Informática, Programación y Desarrollo de Sistemas.</p>';
	    	unset($tabla['CienciasyTecnologia']);
	    }elseif ($key == 'CienciasEcologicasBiologiasySalud') {
	    	$datosGrafica[0][0]='Ciencias Ecológicas, Biológicas y de la Salud';
	    	$datosGrafica[0][1]=$val;
	    	$descripcion[0]='<h4>CIENCIAS ECOLÓGICAS, BIOLÓGICAS Y DE LA SALUD:</h4>
	    	<p>Ingeniería Ambiental, Licenciatura en Nutrición, licenciatura en Medicina Humana, Enfermería, Odontología, Biología, Ciencias Ambientales, Ingeniería en alimentos, etc.</p>';
	    	unset($tabla['CienciasEcologicasBiologiasySalud']);
	    }
		break;
	}

	foreach ($tabla as $key => $val) {
	    if($key == 'ArteyCreatividad'){
	    	$datosGrafica[1][0]='Arte y creatividad';
	    	$datosGrafica[1][1]=$val;
	    	$descripcion[1]='<h4>ARTE Y CREATIVIDAD:</h4>
	    	<p>Diseño Gráfico, Diseño y Decoración de Interiores, Diseño de Jardines, Diseño de Modas, Fotografía Digital, Gestión Gráfica y Publicitaria, Producción Audiovisual y Multimedia, Comunicación y Producción en Radio y Televisión, Diseño del Paisaje, Cine y Video.</p>';
	    	unset($tabla['ArteyCreatividad']);
	    }elseif ($key == 'CiensiasSociales') {
	    	$datosGrafica[1][0]='Ciensias Sociales';
	    	$datosGrafica[1][1]=$val;
	    	$descripcion[1]='<h4>CIENCIAS SOCIALES:</h4>
	    	<p>Gestión de Empresas, Psicología en general, Idiomas, Educación Internacional, Historia y Geografía, Periodismo, Derecho, Ciencias Políticas, Gestión Social y Desarrollo, Administración Educativa, Educación Especial, Relaciones Internacionales y Diplomacia, Relaciones Públicas y Comunicación Organizacional, Institución Sacerdotal.</p>';
	    	unset($tabla['CiensiasSociales']);
	    }elseif ($key == 'EconomiaAdministrativayFinanciera') {
	    	$datosGrafica[1][0]='Económia, Administración y Financiera';
	    	$datosGrafica[1][1]=$val;
	    	$descripcion[1]='<h4>ECONÓMICA, ADMINISTRATIVA Y FINANCIERA:</h4>
	    	<p>Administración de Empresas, Contabilidad, Auditoría, Ventas, Gestión y Negocios Internacionales, Gestión Empresarial, Gestión Financiera, Ingeniería Comercial, Ciencias Económicas y Financieras, Administración y Ciencias Políticas, Ciencias Empresariales, Comercio Electrónico, Emprendedores, Gestión de Organismos Públicos (Municipios, Ministerios, etcétera.), Gestión de Centros Educativos.</p>';
	    	unset($tabla['EconomiaAdministrativayFinanciera']);
	    }elseif ($key == 'CienciasyTecnologia') {
	    	$datosGrafica[1][0]='Ciencias y Tecnologia';
	    	$datosGrafica[1][1]=$val;
	    	$descripcion[1]='<h4>CIENCIA Y TECNOLOGÍA:</h4>
	    	<p>Ingeniería en Sistemas Computacionales, Ingeniería Civil, Arquitectura, Electrónica, Ingenieria en Minas, Ingeniería Mecánica, Ingeniería Industrial, Física, Matemáticas Aplicadas, Ingeniería en Estadística, Estadística Informática, Programación y Desarrollo de Sistemas.</p>';
			unset($tabla['CienciasyTecnologia']);
	   }elseif ($key == 'CienciasEcologicasBiologiasySalud') {
	    	$datosGrafica[1][0]='Ciencias Ecológicas, Biológicas y de la Salud';
	    	$datosGrafica[1][1]=$val;
	    	$descripcion[1]='<h4>CIENCIAS ECOLÓGICAS, BIOLÓGICAS Y DE LA SALUD:</h4>
	    	<p>Ingeniería Ambiental, Licenciatura en Nutrición, licenciatura en Medicina Humana, Enfermería, Odontología, Biología, Ciencias Ambientales, Ingeniería en alimentos, etc.</p>';
	    	unset($tabla['CienciasEcologicasBiologiasySalud']);
	    }
	    break;
	}

	foreach ($tabla as $key => $val) {
	    if($key == 'ArteyCreatividad'){
	    	$datosGrafica[2][0]='Arte y creatividad';
	    	$datosGrafica[2][1]=$val;
	    	$descripcion[2]='<h4>ARTE Y CREATIVIDAD:</h4>
	    	<p>Diseño Gráfico, Diseño y Decoración de Interiores, Diseño de Jardines, Diseño de Modas, Fotografía Digital, Gestión Gráfica y Publicitaria, Producción Audiovisual y Multimedia, Comunicación y Producción en Radio y Televisión, Diseño del Paisaje, Cine y Video.</p>';
	    	unset($tabla['ArteyCreatividad']);
	    }elseif ($key == 'CiensiasSociales') {
	    	$datosGrafica[2][0]='Ciensias Sociales';
	    	$datosGrafica[2][1]=$val;
	    	$descripcion[2]='<h4>CIENCIAS SOCIALES:</h4>
	    	<p>Gestión de Empresas, Psicología en general, Idiomas, Educación Internacional, Historia y Geografía, Periodismo, Derecho, Ciencias Políticas, Gestión Social y Desarrollo, Administración Educativa, Educación Especial, Relaciones Internacionales y Diplomacia, Relaciones Públicas y Comunicación Organizacional, Institución Sacerdotal.</p>';
	    	unset($tabla['CiensiasSociales']);
	    }elseif ($key == 'EconomiaAdministrativayFinanciera') {
	    	$datosGrafica[2][0]='Económia, Administración y Financiera';
	    	$datosGrafica[2][1]=$val;
	    	$descripcion[2]='<h4>ECONÓMICA, ADMINISTRATIVA Y FINANCIERA:</h4>
	    	<p>Administración de Empresas, Contabilidad, Auditoría, Ventas, Gestión y Negocios Internacionales, Gestión Empresarial, Gestión Financiera, Ingeniería Comercial, Ciencias Económicas y Financieras, Administración y Ciencias Políticas, Ciencias Empresariales, Comercio Electrónico, Emprendedores, Gestión de Organismos Públicos (Municipios, Ministerios, etcétera.), Gestión de Centros Educativos.</p>';
		    	unset($tabla['EconomiaAdministrativayFinanciera']);
		    }elseif ($key == 'CienciasyTecnologia') {
		    	$datosGrafica[2][0]='Ciencias y Tecnologia';
		    	$datosGrafica[2][1]=$val;
		    	$descripcion[2]='<h4>CIENCIA Y TECNOLOGÍA:</h4>
		    	<p>Ingeniería en Sistemas Computacionales, Ingeniería Civil, Arquitectura, Electrónica, Ingenieria en Minas, Ingeniería Mecánica, Ingeniería Industrial, Física, Matemáticas Aplicadas, Ingeniería en Estadística, Estadística Informática, Programación y Desarrollo de Sistemas.</p>';
		    	unset($tabla['CienciasyTecnologia']);
		    }elseif ($key == 'CienciasEcologicasBiologiasySalud') {
		    	$datosGrafica[2][0]='Ciencias Ecológicas, Biológicas y de la Salud';
		    	$datosGrafica[2][1]=$val;
		    	$descripcion[2]='<h4>CIENCIAS ECOLÓGICAS, BIOLÓGICAS Y DE LA SALUD:</h4>
		    	<p>Ingeniería Ambiental, Licenciatura en Nutrición, licenciatura en Medicina Humana, Enfermería, Odontología, Biología, Ciencias Ambientales, Ingeniería en alimentos, etc.</p>';
			   	unset($tabla['CienciasEcologicasBiologiasySalud']);
			}
			break;
		}
?>