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
			<h3 class="text-center">Porți deschise 2009</h3>
		</div>
		<div id="slides" class="text-center">
						
						<?php 
							$nr_imagini = 25;			
							for( $i = 1; $i <= $nr_imagini; $i++ ){ 
								echo "<img style=\"margin-left: 25%; margin-right: auto; max-height: 50%;max-width:50%;\" src=\"../imagini/porti_2009/images/(".$i.").jpg\">";
							}
						?>
		</div>
	</div>
	
<?php 
	
		require_once("../comp/footer.php");
	
	?>
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
          interval: 5000,
          swap: true
        }
      });
    });
	</script>
	
	
	
	</body>
</html>