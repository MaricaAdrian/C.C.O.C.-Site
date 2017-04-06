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
	
	<div id="fh5co-author">
		<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-12 text-left fh5co-heading">
					<h2>Rapoarte de activitate</h2>
					<a href="<?=$base_url?>documente/rapoarte/raport-de-activitate-2012-2013.pdf" target="_blank"><h3>Raport de Activitate 2012-2013</h3></a>
					<a href="<?=$base_url?>documente/rapoarte/raport-de-activitate-2013-2014.pdf" target="_blank"><h3>Raport de Activitate 2013-2014</h3></a>
					<a href="<?=$base_url?>documente/rapoarte/raport-de-activitate-2014-2015.pdf" target="_blank"><h3>Raport de Activitate 2014-2015</h3></a>
					<br>
					<br>
						
				</div>
			</div>			
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

	</body>
</html>

