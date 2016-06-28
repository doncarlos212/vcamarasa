<!DOCTYPE html>
<html lang="es" style="height: auto;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
<script type="text/javascript" charset="UTF-8" src="/vcamarasa/js/propio.js"></script>
<script type="text/javascript" charset="UTF-8" src="/vcamarasa/js/modernizr-2.6.2.min.js"></script>


<?php require("includes/metas.php") ?>
</head>


<body id="arriba">
<!-- <div id="demo-content">
	<div id="loader-wrapper">
    	<div id="loader"></div>
 
    	<div class="loader-section section-left"></div>
    	<div class="loader-section section-right"></div>
 	</div>
	
</div> -->
	<!-- Header start -->
	<?php require("/includes/menu.php") ?>

	<!-- Slider start -->
		

	<div class="container-fluid">
		<div class="row">				
			<div id="fondo-imagen" class="col-lg-12 poscion1">
						
							<div id="logo" class='icon-scroll'><div/>
					
						
			</div> <!-- col -->
		</div> <!--row--> 
	</div> <!-- container-->

		<!--Inicio del contenido dinamico -->
		<?php echo $contenido; 	?>
	

	<!-- Footer start -->
	
<?php require("includes/footer.php") ?>
	

<!-- Javascript Files
	================================================== -->
	
	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="/vcamarasa/js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="/vcamarasa/js/bootstrap.min.js"></script>
	
	<!-- Owl Carousel -->
	<script type="text/javascript" src="/vcamarasa/js/owl.carousel.js"></script>
	<!-- PrettyPhoto -->
	
		
	<!-- Wow Animation -->
	<script type="text/javascript" src="/vcamarasa/js/wow.min.js"></script>
	<!-- SmoothScroll -->
	<script type="text/javascript" src="/vcamarasa/js/smoothscroll.js"></script>
	<!-- Eeasing -->
	<script type="text/javascript" src="/vcamarasa/js/jquery.easing.1.3.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="/vcamarasa/js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="/vcamarasa/js/waypoints.min.js"></script>
	
	<!-- Template custom -->
	<script type="text/javascript" src="/vcamarasa/js/custom.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
	<script src="http://snapwidget.com/js/snapwidget.js"></script>


	

</body>
</html>