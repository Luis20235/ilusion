<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Globos Ilusion</title>

	    <!-- Bootstrap Core CSS -->
	  <!-- Bootstrap Core CSS -->
	  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	  
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="assets/css/foodhut.css">
		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="images/iphone_blank_2.png">

	</head>
    <body class="cnt-home">
	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css1/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css1/icomoon.css">
	<!-- Simple Line Icons-->
	<link rel="stylesheet" href="css1/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css1/magnific-popup.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css1/owl.carousel.min.css">
	<link rel="stylesheet" href="css1/owl.theme.default.min.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="css1/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css1/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="css1/casuel.css">
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">


<?php include('includes/menu-bar.php');?>

<div id="fh5co-main">
				<div id="fh5co-clients">
					<div class="container">
					
					</div>
				</div>
				<div id="fh5co-features" data-section="features">
</header>
<!-- ============================================== HEADER : END ============================================== -->
<div id="fh5co-features-2" data-section="design">
					<div class="fh5co-features-2-content">
					    <div class="container">
					    	<div class="row">
					    		<div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
									<h2 class="fh5co-lead to-animate">NUESTRA FILOSOFÍA</h2>
									<p class="fh5co-sub to-animate">Durante 25 años, hemos hecho nuestro mejor esfuerzo para trabajar con los mejores productos de la más alta calidad.
Estamos totalmente comprometidos con nuestros clientes y también con nuestros empleados.</p>
								</div>
					    		<div class="col-md-4 fh5co-text-wrap">
					    			<div class="row text-center">
						    			<div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-3">
						    				<span class="fh5co-icon"><i class="icon-screen-desktop"></i></span>
											<h4 class="fh5co-uppercase-sm">Objetivos</h4>
											<p>Posicionarnos como la mejor opción en suministros para decoradores, tanto de servicios, asesorías, capacitaciones así como insumos relacionados con el arte decorativo..</p>
										</div>
										<div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-4">
											<span class="fh5co-icon"><i class="icon-anchor"></i></span>
											<h4 class="fh5co-uppercase-sm">Misión</h4>
											<p>En Globos ilusion  ofreciendo una amplia variedad de productos de la más alta calidad, contamos con la red de productos de las mejores marcas  de las más grandes del mundo como latex y metalico, lo que nos permite fortalecer nuestro .</p>
										</div>
										
									</div>
					    		</div>
					    		<div class="col-md-4 col-md-push-4 fh5co-text-wrap">
					    			<div class="row text-center">
						    			<div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-5">
						    				<span class="fh5co-icon"><i class="icon-rocket"></i></span>
											<h4 class="fh5co-uppercase-sm">Visión</h4>
											<p>Ser una opción oportuna y eficaz que ponga nuestros productos y servicios al alcance de nuestros clientes para que éstos cuenten con todas las herramientas necesarias para potenciar su creatividad al máximo..</p>
										</div>
										<div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-6">
											<span class="fh5co-icon"><i class="icon-people"></i></span>
											<h4 class="fh5co-uppercase-sm">Valores</h4>
											<p>Honestidad,
Compromiso,
Responsabilidad,
Respeto,
Comunicación,
Asertividad y 
Solidaridad</p>
										</div>
										
									</div>
					    		</div>
					    		<div class="col-md-4 col-md-pull-4 fh5co-image animate-object features-2-animate-2">
					    			<p class="text-center">
					    			<img src="images/iphone_blank_2.png" class="" alt="Outline Free HTML5 Responsive Bootstrap Template">
					    			</p>
					    		</div>
					    		
					    	</div>
					    </div>
					</div>	

			    </div>

<section class="awSlider">
  <div  class="carousel slide" data-ride="carousel">
	

				<!-- ================================== TOP NAVIGATION ================================== -->
	


</div>
<?php include('includes/footer.php');?>
	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- toCount -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>


	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>