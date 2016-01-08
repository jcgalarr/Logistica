<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SGL - Sistema de Gestión Logístico | SGL</title>
  <!-- Custom CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style2.css" rel="stylesheet">
  <script src="js/ie-emulation-modes-warning.js"></script>
  <link href="css/carousel.css" rel="stylesheet">  

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <!--<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>-->
  <!--/.preloader-->
    <section id="home" class="intro-section">
          <!-- Video Background -->
        <video id="video_background" preload="auto" autoplay="autoplay" muted="muted" loop="loop"> 
               <source src="video/Almacenamiento.webm" type="video/webm" />
                <!-- /<source src="video/ecuador.webm" type="video/webm" />-->
        </video> 
        <!-- / End Video Start Container -->       
        <div class="wow bounceIn" data-wow-delay="0.3s">
        <div class="container">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Bienvenido al Sistema <span>SGL</span></h1>
            <p class="animated fadeInRightBig">Sistema de Gestión Logístico</p>
            <a class="home-button" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="logonear()"><i class="fa fa-star"></i>Ingresar</a>
          </div>
        </div>
		</div>
    </section>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
    



  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  
      <script>
        new WOW().init();
        $(document).ready(function () {
            $('#tooltipa').tooltip();
            $('#tooltippic').tooltip();
            $('#tooltipskype').tooltip();
            $('#tooltiplinkedin').tooltip();
            $('#tooltipfacebook').tooltip();
            $('#tooltipgoogle').tooltip();
            $('#tooltipinstagram').tooltip();
        });
		
		function logonear(){
			window.open("views/LoginView.html");
			
		}
    </script>

</body>
</html>
