<?php
require_once("../comp/include_all.php");
?>
<!DOCTYPE HTML>
<html>
	
	<?php 
	
		require_once("../comp/header.php")
	
	?>
	
	<body>
	
	<div class="fh5co-loader"></div>
	
	<div id="page">
		<div class="menu">
			<?php include('../comp/navigation.php');?>
		</div>	
	</div>
	
	<div class="col-md-12">
		<div class="jumbotron text-center">
			<h3 class="text-center">Caravana Invățământului 2009</h3>
		</div>
		<div id="slides" class="text-center">
						<?php 
							$nr_imagini = 25;			
							for( $i = 1; $i <= $nr_imagini; $i++ ){ 
								echo "<img style=\"margin-left: 25%; margin-right: auto; max-height: 50%;max-width:50%;\" src=\"../imagini/caravana_2009/images/".$i.".jpg\">";
							}
						?>
		</div>
	</div>
	
<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2017 Organizatia Studentilor din Facultatea de Automatica, Calculatoare si Electronica.</small> 
						
					</p>
					
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>
					
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	
	<!-- jQuery -->
	<script src="<?=$base_url?>/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=$base_url?>/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=$base_url?>/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=$base_url?>/js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="<?=$base_url?>/js/main.js"></script>
	<!-- Slider -->
	<script src="<?=$base_url?>/js/jquery.slides.min.js"></script>
	
	 <script>
    
		 $(function() {
      $('#slides').slidesjs({
        play: {
          active: true,
          auto: true,
          interval: 7000,
          swap: true
        }
      });
    });
	</script>
	
	
	
	</body>
</html>