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
	
	<div class="container text-center">
  <div class="page-header">
    <h1>Selectați centrul</h1>      
  </div>
  <div class="radio">
							<label><input type="radio" name="optradio" id="btnc">Craiova</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio" id="btnd">Drobeta Turnu-Severin</label>
						</div>
				</div>    
</div>
	<div id="fh5co-contact">
		<div class="container">			
			<div class="row">
			<div class="col-md-12 col-md-offset-0 text-center">
			
				
				<div class="col-md-8 col-md-offset-2" id="dcraiova">
					<div class="col-md-5 col-md-pull-1 animate-box">
						
						<div class="fh5co-contact-info">
							<h3>Contact Craiova</h3>
							<ul>
								<li class="address">Str. Calea București, nr. 107 H <br> Căminul Studențesc nr. 6, et. 1, sala 100 <br>Craiova</li>
								<li class="phone"><a href="tel://1234567920">TEL./Fax: 0251/563269</a></li>
								<li class="email"><a href="mailto:ccoc_craiova@gmail.com">ccop_craiova@yahoo.com</a></li>							
							</ul>
						</div>
					</div>
					<div class="col-md-7 animate-box">
						<h3>Formular de contact</h3>
						<form action="contactCr.php" method="post">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="cf_name">Nume și prenume</label>
									<input type="text" id="name" name="cf_name" class="form-control">
								</div>
								
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="cf_email">Email</label>
									<input type="text" id="email" name="cf_email" class="form-control">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="cf_message">Mesaj</label>
									<textarea name="cf_message" id="message" cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Trimite mesaj" class="btn btn-primary">
							</div>

						</form>		
					</div>
				</div>
				
				<div id="mcraiova">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2400.47286349361!2d23.819524075016698!3d44.316951906608885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4752d700d78f9257%3A0x7eb7ffda92a75a0f!2sC.C.O.C.+-+Centrul+de+Consiliere+%C8%99i+Orientare+%C3%AEn+Carier%C4%83!5e0!3m2!1sro!2sro!4v1489239493843" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				
				<div class="col-md-8 col-md-offset-2" id="ddrobeta">
					<div class="col-md-5 col-md-pull-1 animate-box">
						<div class="fh5co-contact-info">
							<h3>Contact Drobeta Turnu-Severin</h3>
							<ul>
								<li class="address">Str. Traian, nr. 277A, corp B, etaj 4, sala 5.3 <br>Drobeta Turnu-Severin</li>
								<li class="phone"><a href="tel://0252319301">TEL./Fax: 0252319301, 0352401015</a></li>
								<li class="email"><a href="mailto:ccop_severin@yahoo.com">ccop_severin@yahoo.com</a></li>							
							</ul>
						</div>
					</div>
					<div class="col-md-7 animate-box">
						<h3>Formular de contact</h3>
						<form action="contactSv.php" method="post">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="cf_name">Nume și prenume</label>
									<input type="text" id="cf_name" name="cf_name" class="form-control">
								</div>
								
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="cf_email">Email</label>
									<input type="text" id="email" name="cf_email" class="form-control">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="cf_message">Mesaj</label>
									<textarea name="cf_message" id="message" cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Trimite mesaj" class="btn btn-primary">
							</div>

						</form>		
					</div>
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
	<script>
		$( document ).ready(function() {
			$("#ddrobeta").hide();
			$("#btnc").click();
			$("#btnc").click(function(){
				
				$("#ddrobeta").fadeOut(500);
				$("#dcraiova").fadeIn(1000);
				$("#mcraiova").fadeIn(1000);
				
			
			});
			
			$("#btnd").click(function(){
			
				$("#dcraiova").fadeOut(500);
				$("#mcraiova").fadeOut(500);
				$("#ddrobeta").fadeIn(1000);
				
				
			} );
		});
	</script>

	</body>
</html>

