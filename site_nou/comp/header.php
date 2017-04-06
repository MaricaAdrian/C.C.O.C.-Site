<?php require_once("include_all.php"); ?>	
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php 
	
		$titlu = basename($_SERVER["SCRIPT_NAME"], ".php");
		$titlu = preg_replace("/[^a-z0-9A-Z]+/", " ", $titlu);
		if($titlu[0] >= 'a' && $titlu[0] <= 'z')
			$titlu[0] = strtoupper($titlu[0]);
		if($titlu == "Index")
			$titlu = "C.C.O.C.";
		
	
	?>
	<title><?php echo $titlu; ?></title>
	<link rel="icon" href="<?=$base_url?>imagini/ico.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Centrul de Consiliere si Orientare" />
	<meta name="keywords" content="Centru, Consiliere, Orientare" />
	<meta name="author" content="Organizatia Studentilor din Facultatea de Automatica, Calculatoare si Eletronica" />


  	<!-- Facebook, Twitter url-uri -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=$base_url?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=$base_url?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=$base_url?>css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?=$base_url?>css/style.css">

	<!-- Modernizr JS -->
	<script src="<?=$base_url?>js/modernizr-2.6.2.min.js"></script>
		<style>
	
.carousel img {
    display: none;
    width: 100%;
}
	
    #slides {
      display: none
    }

    #slides .slidesjs-navigation {
      margin-top:5px;
    }

    a.slidesjs-next,
    a.slidesjs-previous,
    a.slidesjs-play,
    a.slidesjs-stop {
      background-image: url("imagini/btns-next-prev.png");
      background-repeat: no-repeat;
      display:block;
      width:12px;
      height:18px;
      overflow: hidden;
      text-indent: -9999px;
      float: left;
      margin-right:5px;
    }

    a.slidesjs-next {
      margin-right:10px;
      background-position: -12px 0;
    }

    a:hover.slidesjs-next {
      background-position: -12px -18px;
    }

    a.slidesjs-previous {
      background-position: 0 0;
    }

    a:hover.slidesjs-previous {
      background-position: 0 -18px;
    }

    a.slidesjs-play {
      width:15px;
      background-position: -25px 0;
    }

    a:hover.slidesjs-play {
      background-position: -25px -18px;
    }

    a.slidesjs-stop {
      width:18px;
      background-position: -41px 0;
    }

    a:hover.slidesjs-stop {
      background-position: -41px -18px;
    }

    .slidesjs-pagination {
      margin: 7px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url("imagini/pagination.png");
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }

    .navbar {
      overflow: hidden
    }
	
	
  </style>
  <!-- SlideShow CSS -->

  <!-- SlideShow responsiv -->
  <style>
    #slides {
      display: none
    }

    .container-slider {
      margin: 0 auto
    }

    @media (max-width: 767px) {
      .container-slider {
        width: auto;
      }
    }

    @media (max-width: 480px) {
      .container-slider {
        width: auto;
      }
    }

    @media (min-width: 768px) and (max-width: 979px) {
      .container-slider {
        width: 724px;
      }
    }

    @media (min-width: 1200px) {
      .container-slider {
        width: 1170px;
      }
    }
	
	#slidet{
		
		margin-top: 5%;
		margin-bot: 5%;
	}
  </style>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	</head>