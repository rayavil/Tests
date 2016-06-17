<?php
  session_start();
  if (!isset($_SESSION['idUsuario'])) {
    header("Location: index.php?error=2");
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $titulo;?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/miestilo.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/morris.css">
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/morris/raphael-min.js"></script>
  <script src="js/morris/morris.min.js"></script>
  <!-- <script src="js/bootstrap-checkbox.min.js"></script> -->
    <?php
      if ($titulo=="Test Aptitud" || $titulo=="Test Vocacional") {
    ?>  
        <link href="css/square/blue.css" rel="stylesheet">
        <script src="js/icheck.js"></script>  
    <?php
      }
    ?>
  </head>