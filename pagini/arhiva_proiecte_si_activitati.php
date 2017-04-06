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
	
	<div class="container text-center">
		<div class="page-header">
			<h1>Selectati evenimentele pe ani</h1>      
		</div>
		<div class="radio">
			<label><input type="radio" name="optradio" id="c1">Evenimente 2011</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="optradio" id="c2">Evenimente 2010</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="optradio" id="c3">Evenimente 2009</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="optradio" id="c4">Evenimente 2008</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="optradio" id="c5">Evenimente 2007</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="optradio" id="c6">Evenimente 2006</label>
		</div>
	</div>    
	
	<div id="c1d">
		<div class="container">
			<div class="jumbotron text-center">
				<h3>Evenimente 2011</h3>
			</div>
			
			<div class="col-md-12">
				<p>
					<h3 class="text-center"><a href="caravana_2011.php">Caravana Invățământului 2011</a></h3>
	
	
				</p>
			</div>
		</div>
	</div>
	
	<div id="c2d">
		<div class="container">
			<div class="jumbotron text-center">
				<h3>Evenimente 2010</h3>
			</div>
			
			<div class="col-md-12">
				<p>
					<ul>
						<li><a href="<?=$base_url?>documente/caravana2010.doc">Caravana Învăţământului Oltean</a></li>
					</ul>
					<h3 class="text-center"><a href="caravana_2010.php">Caravana Invățământului 2010</a></h3>
					<h3 class="text-center"><a href="porti_2010.php">Porți deschise 2010</a></h3>
					
						
				</p>
			</div>
		</div>
	</div>
	
	<div id="c3d">
		<div class="container">
			<div class="jumbotron text-center">
				<h3>Evenimente 2009</h3>
			</div>
			
			<div class="col-md-12">
				<p>
					<ul>
						<li>Caravana Învăţământului Oltean</li>
						<li>Zilele Porţilor Deschise</li>
						<li>Student pentru o ZI!</li>
						<li>Târgul de job-uri</li>
					</ul>
					<h3 class="text-center"><a href="caravana_2009.php">Caravana Invățământului 2009</a></h3>
					<h3 class="text-center"><a href="porti_2009.php">Porți deschise 2009</a></h3>
	
				</p>
			</div>
		</div>
	</div>
	
	<div id="c4d">
		<div class="container">
			<div class="jumbotron text-center">
				<h3>Evenimente 2008</h3>
			</div>
			
			<div class="col-md-12">
				<p>
					<ul>
						<li>Caravana Învăţământului Oltean</li>
						<li>Zilele Porţilor Deschise</li>
						<li><a href="<?=$base_url?>documente/student2008.doc">Student pentru o ZI!</a></li>
						<li>Târgul de job-uri</li>
						<li>CCS te Pregăteşte!</li>
					</ul>
					<h3 class="text-center"><a href="caravana_2008.php">Caravana Invățământului 2008</a></h3>
					<h3 class="text-center"><a href="porti_2008.php">Porți deschise 2008</a></h3>
					
					
				</p>
			</div>
		</div>
	</div>
	
	<div id="c5d">
		<div class="container">
			<div class="jumbotron text-center">
				<h3>Evenimente 2007</h3>
			</div>
			
			<div class="col-md-12">
				<p>
					<ul>
						<li><a href="<?=$base_url?>documente/ghid_cariera2007.doc">Ghidul Carierei</a></li>
						<li><a href="<?=$base_url?>documente/portilor_deschise2007.doc">Zilele Porţilor Deschise</a></li>
						<li><a href="<?=$base_url?>documente/caravana2007.doc">Student pentru o ZI!</a></li>
						<li><a href="<?=$base_url?>documente/CCS2007.doc">CCS te Pregăteşte!</a></li>
						<li><a href="<?=$base_url?>documente/informeaza2007.doc">Informează-te și decide!</a></li>
						<li><a href="<?=$base_url?>documente/targ_job2007.doc">Informează-te și decide!</a></li>
						<li><a href="<?=$base_url?>documente/training_cariera2007.doc">Pași pentru o carieră de succes!</a></li>
					</ul>
					<br>
					<h3 class="text-center"><a href="caravana_2007.php">Caravana Invățământului 2007</a></h3>
					<h3 class="text-center"><a href="porti_2007.php">Porți deschise 2007</a></h3>
					
					
					

	
				</p>
			</div>
		</div>
	</div>
	
	<div id="c6d">
		<div class="container">
			<div class="jumbotron text-center">
				<h3>Evenimente 2006</h3>
			</div>
			
			<div class="col-md-12">
				<p>
					<ul>
						<li><a href="<?=$base_url?>documente/EUROpartener2006.doc">Charta Participării Tinerilor la Viaţa Locală şi Regională</li>
					</ul>
				</p>
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
	<!-- Slider -->
	<script src="<?=$base_url?>/js/jquery.slides.min.js"></script>
	
	
	<script>
		$(document).ready(function(){
	var v = [];
	var cpg=0;
	var i = 0;
	//Initializare 
	$("input").each(function(){
		
		var ide = $(this).attr('id');
		if(ide !== "undefined"){
			
			
			if( i == 0 ) {
				
				v[ide] = 1;
				$(this).click();
				$("div#"+ide+"d").show();
				
				
				
				
			} else {
				v[ide] = 0;
				
				//Se ascund toate div-urile care un id-ul egal cu buton-ul + un 'd' la final
				$("div#"+ide+"d").hide();
				
			}
			i++;
		}
	
	});
	//Afisare&Inchidere
	$("input").click(function(){
		var nume=$(this).attr('id');
		if(v[nume]==0)
		{   //Se modifica text-ul de pe buton-ul apasat si se deschide div-ul
			v[nume]=1;
			$("input").each(function(){
		
				var ide = $(this).attr('id');
				if(ide == nume){
				//Se arata toate div-urile care un id-ul egal cu buton-ul + un 'd' la final
				$("div#"+ide+"d").show();
				} else {
					
					v[ide] = 0;
					$("div#"+ide+"d").hide();
					
				}
	
			});
			
			
		
		}
	
	});


});
	</script>
	
	
	
	
	</body>
</html>