<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Data ENEDI '17</title>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/table.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<!-- Custom Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body id="page-top">

<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
</button>
<a class="navbar-brand page-scroll" href="#page-top"><span>data</span> enedi<span>17</span></a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
<li><a class="page-scroll" href="#datos">Datos</a></li>
<li><a class="page-scroll" href="#viz">Visualizaciones</a></li>
<li><a class="page-scroll" href="#contacto">Contacto</a></li>
</ul>
</div>
</div>
</nav>
<?php } else {?>
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
  </button>
  <a class="navbar-brand page-scroll" href="index.php"><span>data</span> enedi<span>17</span></a>
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar-right">
  <li><a class="page-scroll" href="page-acredita.php">Acreditaciones</a></li>
  <li><a class="page-scroll" href="page-ubica.php">Ubicaciones</a></li>
  <li><a class="page-scroll" href="page-arancel.php">Aranceles</a></li>
  <li><a class="page-scroll" href="page-proyecta.php">Proyecciones</a></li>
  </ul>
  </div>
  </div>
  </nav>
<?php };?>




<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <div class="header-content">
                        <div class="header-content-inner">
                            <h1>Data Nacional de Escuelas de Diseño</h1>
                            <h3>En este minisitio, asociado al <strong>Encuentro Nacional de Escuelas de Diseño (ENEDI)</strong>, puedes encontrar datos que pueden servir de base para las discusiones donde docentes, académicos, profesionales y estudiantes del área del diseño pueden cuestionar y proponer temáticas relevantes a su quehacer y enseñanza.</h3>
                            <a  class="btn btn-warning btn-lg page-scroll" href="#datos">Datos</a>
                            <a  class="btn btn-info btn-lg page-scroll" href="#viz">Visualizaciones</a>
                            <a  class="btn btn-danger btn-lg page-scroll" href="#contacto">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php };?>
