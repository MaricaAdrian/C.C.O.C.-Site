<?php
require_once("comp/include_all.php");
?>
<!DOCTYPE HTML>
<html>
	
	<?php 
	
		require_once("comp/header.php")
	
	?>

	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		<div class="menu">
			<?php include('comp/navigation.php');?>
		</div>	
		
	
		<div class="container">
			
			<div class="container">
				<div class="row">
					
											
					
						
			
				
					
					
					<div id="slidet" class="col-md-12" style="max-height: 250px; z-index: -99;">
							<div class="container-slides">
													<div id="slides">
													<?php 
														$nr_imagini = 5;
														$i = 0;			
														for( $i = 1; $i <= $nr_imagini; $i++ ){ 
															echo "<img style=\"max-height: 50%;\" src=\"imagini/".$i.".png\" alt=\"\">";
														}
														?>
														</div>
							</div>
					</div><br><br><br>
					<div class="col-md-5-centered text-center">
						<br><br><br><h1 style="font-size:55px; font-family: Times New Roman;"><br>Echipa noastră</h1>
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
	<div id="fh5co-work">
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="portfolio_detail.html">
						<div class="work-grid" style="background-image:url(images/project-2.jpg);">
							<div class="inner">
								<div class="desc">
									<h2>Dr. Cristina Soare</h2>
									<span class="cat">Sociolog</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="portfolio_detail.html">
						<div class="work-grid" style="background-image:url(images/project-3.jpg);">
							<div class="inner">
								<div class="desc">
									<h2>Raluca Stepan</h2>
									<span class="cat">Psiholog</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="portfolio_detail.html">
						<div class="work-grid" style="background-image:url(images/project-4.jpg);">
							<div class="inner">
								<div class="desc">
									<h2>Cotocel Loredana</h2>
									<span class="cat">Secretar</span>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-4 text-center animate-box">
					<a class="work" href="portfolio_detail.html">
						<div class="work-grid" style="background-image:url(images/project-6.jpg);">
							<div class="inner">
								<div class="desc">
									<h2>Ionuț Cioc</h2>
									<span class="cat">Referent IT</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="portfolio_detail.html">
						<div class="work-grid" style="background-image:url(images/project-5.jpg);">
							<div class="inner">
								<div class="desc">
									<h2>Daniela Ignat</h2>
									<span class="cat">Referent Resurse Umane</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="portfolio_detail.html">
						<div class="work-grid" style="background-image:url(images/project-6.jpg);">
							<div class="inner">
								<div class="desc">
									<h2>Doina Elena Honu</h2>
									<span class="cat">Secretar Referent</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<img style="margin-left: 25%;" src="imagini/ban.jpg">
			</div>
		</div>
	</div>


	<div class="footer">
		<?php include('comp/footer.php');?>
	</div>

	
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
		  width: 1080,
		  height: 360,
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

