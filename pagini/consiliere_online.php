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
    <h1>Selectati centrul</h1>      
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
				<div class="col-md-7">
					<div class="col-md-7 animate-box text-center" id="conscraiova">
						<h3>Consilere Online Craiova</h3>
						<h3>Daca doriti sa beneficiati de serviciul de consiliere online, puteti trimite un mesaj:</h3>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="fname">Nume si prenume</label>
									<input type="text" id="fname" class="form-control">
								</div>
								
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Mesaj</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Trimite mesaj" class="btn btn-primary">
							</div>

						</form>		
					</div>
					<div class="col-md-7 animate-box text-center" id="consdrobeta">
						<h3>Consilere Online Drobeta Turnul Severin</h3>
						<h3>Daca doriti sa beneficiati de serviciul de consiliere online, puteti trimite un mesaj:</h3>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="fname">Nume si prenume</label>
									<input type="text" id="fname" class="form-control">
								</div>
								
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Mesaj</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Trimite mesaj" class="btn btn-primary">
							</div>

						</form>		
					</div>					
				</div>
				<div class="col-md-5 col-md-pull-1">
					<p>Consilierea online este un nou mod de a beneficia de consiliere psihologica, pe orice tema. Consilierea online este cea mai rapida metoda ca sa aflati detaliile de care aveti nevoie in procesul de maturizare si dezvoltare personala. Tot ceea ce trebuie sa faceti este sa ne scrieti detaliat situatia sau problema pe care o aveti, iar noi vom raspunde solicitarilor dumneavoastra. Informatiile furnizate consilierului vor fi în totalitate confidentiale, in acord cu respectarea prevederilor continute in codul etic si deontologic al psihologilor.</p>
					<h4>Avantajele aceestui tip de consiliere :</h4>
						<ul>
							


<li>Interactionati aici si acum!</li>
<li>Sunteti liberi sa alegeti momentul in care doriti sa participati!</li>
<li>Eliminati tracul asociat unei intalniri fata in fata!</li>
<li>Aveti posibilitatea de a medita mai profund asupra intrebarilor si raspunsurilor, putandu-le trimite consilierului in momentul in care simtiti nevoia.</li>
<li>Aveti posibilitatea ‚, tinerii unui jurnal” al discutiilor online care faciliteaza monitorizarea relatiei atat cu propria persoana, cat si cu psihologul, in cadrul activitatii de consiliere.</li>
<li>Sunt situatii in care anumite lucruri se exprima mai usor in scris decat prin verbalizare.</li>
<li>Fiecare dintre noi putem avea retineri in a vorbi despre noi insine fie cand este vorba de persoane straine, fie cand este vorba despre problemele noastre. Prin urmare, consilierea online va poate oferi un altfel de cadru in care va puteti exprima, in care puteti fi voi insiva.</li>
				
				</div>
			</div>
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

