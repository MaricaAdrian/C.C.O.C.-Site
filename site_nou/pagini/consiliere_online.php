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
    <h1>Selectaţi centrul</h1>      
  </div>
  <div class="radio">
							<label><input type="radio" name="optradio" id="btnc">Craiova</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="optradio" id="btnd">Drobeta-Turnu Severin</label>
						</div>
				</div>    
</div>
	
	<div id="fh5co-contact">
		<div class="container">			
			<div class="row">
				<div class="col-md-7">
					<div class="col-md-7 animate-box text-center" id="conscraiova">
						<h3>Consilere Online Craiova</h3>
						<h3>Dacă doriţi să beneficiaţi de serviciul de consiliere online, puteţi trimite un mesaj:</h3>
						<form action="contactCr.php" method="post">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="cf_name">Nume şi prenume</label>
									<input type="text" id="cf_name" name="cf_name" class="form-control">
								</div>
								
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="cf_email">Email</label>
									<input type="text" id="cf_email" name="cf_email" class="form-control">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="cf_message">Mesaj</label>
									<textarea name="cf_message" id="cf_message" cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Trimite mesaj" class="btn btn-primary">
							</div>

						</form>		
					</div>
					<div class="col-md-7 animate-box text-center" id="consdrobeta">
						<h3>Consilere Online Drobeta-Turnu Severin</h3>
						<h3>Dacă doriţi să beneficiaţi de serviciul de consiliere online, puteţi trimite un mesaj:</h3>
						<form action="contactSv.php" method="post">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="cf_name">Nume şi prenume</label>
									<input type="text" id="cf_name" name="cf_name" class="form-control">
								</div>
								
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="cf_email">Email</label>
									<input type="text" id="cf_email" name="cf_email" class="form-control">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="cf_message">Mesaj</label>
									<textarea name="cf_message" id="cf_message" cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Trimite mesaj" class="btn btn-primary">
							</div>

						</form>		
					</div>					
				</div>
				<div class="col-md-5 col-md-pull-1">
					<p>Consilierea online este un nou mod de a beneficia de consiliere psihologică, pe orice temă. Consilierea online este cea mai rapidă metodă ca să aflaţi detaliile de care aveţi nevoie procesul de maturizare şi dezvoltare personală. Tot ceea ce trebuie să faceţi este să ne scrieţi detaliat situaţia sau problema pe care o aveţi, iar noi vom răspunde solicitărilor dumneavoastră. Informaţiile furnizate consilierului vor fi în totalitate confidenţiale, în acord cu respectarea prevederilor conţinute codul etic şi deontologic al psihologilor. </p>
					<h4>Avantajele acestui tip de consiliere :</h4>
						<ul>
							<li>Interacţionaţi aici şi acum!</li>
							<li>Sunteţi liberi să alegeţi momentul în care doriţi să participaţi!</li>
							<li>Eliminaţi tracul asociat unei întâlniri faţă în faţă!</li>
							<li>Aveţi posibilitatea de a medita mai profund asupra întrebărilor şi răspunsurilor, putându-le trimite consilierului în momentul în care simţiţi nevoia.</li>
							<li>Aveţi posibilitatea ţinerii unui jurnal al discuţiilor online care facilitează monitorizarea relaţiei atât cu propria persoană, cât şi cu psihologul, în cadrul activităţii de consiliere.</li>
							<li>Sunt situaţii în care anumite lucruri se exprimă mai uşor în scris decât prin verbalizare.</li>
							<li>Fiecare dintre noi putem avea reţineri în a vorbi despre noi înşine fie când este vorba de persoane străine, fie când este vorba despre problemele noastre. Prin urmare, consilierea online vă poate oferi un altfel de cadru în care vă puteţi exprimă, în care puteţi fi voi înşivă.</li>
											
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
			$("div#consdrobeta").hide();
			$("#btnc").click();
			$("#btnc").click(function(){
				
				$("div#consdrobeta").fadeOut(500);
				$("div#conscraiova").fadeIn("slow");
				
			
			});
			
			$("#btnd").click(function(){
			
				$("div#conscraiova").fadeOut(500);
				$("div#consdrobeta").fadeIn("slow");
				
			} );
		});
	</script>
	

	</body>
</html>

