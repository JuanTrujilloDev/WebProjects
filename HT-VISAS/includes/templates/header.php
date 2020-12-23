<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>HT-VISAS</title>
  <link rel="shortcut icon" type="image/ico" href="/img/logo.ico" >
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans|Oswald" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"/>

  <?php
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);
if($pagina == 'destinos' || $pagina == 'index'){
echo '<link rel="stylesheet" href="css/colorbox.css">';
}else if($pagina == 'visas'){
echo '<link rel="stylesheet" href="css/lightbox.css">';
}
  ?>

  <link rel="stylesheet" href="css/main.css">
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  
  
  
</head>

<body class="<?php echo $pagina?> ">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Inicio de codigo personal-->
  <header class="site-header">

      <div class="hero">
  
    <div class="contenido_header">
  <nav class="redes_sociales">
  <a href="#"><i class="fab fa-facebook"></i></a>
  <a href="#"><i class="fab fa-twitter-square"></i></a>
  <a href="#"><i class="fab fa-pinterest-square"></i></a>
  <a href="#"><i class="fab fa-youtube-square"></i></a>
  <a href="#"><i class="fab fa-instagram"></i></a>
  </nav><!--Redes Sociales-->
  
  <div class="informacion_evento clearfix" >
   <div class="clearfix"><p class="fecha"><i class="fas fa-calendar-alt"></i> 2019</p>
    <p class="ciudad"><i class="fas fa-map-marker-alt"></i> Neiva, COL</p>
    <h1 class="nombre_sitio"> HT-VISAS </h1>
    <p class="slogan">La mejor asesoría de <span>VISAS AMERICANAS</span> online</p>
  </div>
  </div><!--Informacion Evento-->
  </div><!--Contenido Header-->
  </div><!--Hero-->
  
    </header>
  
   <div class="barra">
     <div class="contenedor clearfix" >
       <div class="logo">
           <a href="index.php">
         <img src="img/logo.svg" alt="logo HT-VISAS">
             </a>
       </div>
       <div class="menu_movil">
         <span></span>
         <span></span>
         <span></span>
       </div>
       <nav class="navegacion_principal clearfix">
         <a href="visas.php">Visas</a>
         <a href="calendario.php">Calendario de citas</a>
         <a href="destinos.php">Destinos</a>
         <a href="registro.php">Programa tu asesoría</a>
       </nav>
     </div>
   </div>
   <!--Cierre Barra-->