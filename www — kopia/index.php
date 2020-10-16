<!DOCTYPE HTML>
<html lang="pl">
    <head> 
        <meta charset="utf-8" />
        <title>Pracownia Krawiecka</title>
        <meta name="keywords" content="krawcowa, przerbki krawieckie, ubrania sókrzane, futra" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic|Great+Vibes|Julius+Sans+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Italianno&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="image/png" href="font/favicon-scissors%20.ico"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    </head>
   <body>
   <div id="background-container">
       <div id="main-container">
   		<div id="logo">
   			<br/>
   		</div>
   		    <div id="nav">
   			<a href="?przerobkikrawieckie=onas"> <div class="option">
    				 O Nas 
				</div></a>
				
				<a href="?przerobkikrawieckie=oferta"><div class="option">
    				Oferta
				</div></a>
				
				<a href="?przerobkikrawieckie=galeria"><div class="option">
    					 Galeria
    			</div></a>
    			
    			<a href="?przerobkikrawieckie=krakow-starowislna"><div class="option">
    					Kontakt
    			</div></a>	
   		</div>
   		
   		
   		
   		<?php
    			error_reporting(E_ALL ^ E_NOTICE);
 				$arg = (string)$_GET['przerobkikrawieckie'];
 				switch ($arg)
 				{
 					case 'onas':
 					include('onas.html');
 					break;
 					case 'oferta':
 					include('oferta.html');
 					break;
 					case 'galeria':
 					include('galeria.php');
 					break;
 					case 'krakow-starowislna':
 					include('kontakt.html');
 					break;
 					default:
 					include('onas.html');
 					break;
 				}
			?>
   		
   	</div>
   </div>
   		<script src="jquery-1.11.3.min.js"></script>
	<script>
		$(document).ready(function() {
		   var stickyNavTop = $('#nav').offset().top;
		   var stickyNav = function(){ 
		   var scrollTop = $(window).scrollTop();
		   if (scrollTop > stickyNavTop) { 
		   	$('#nav').addClass('sticky');
		   } else { 
		   	$('#nav').removeClass('sticky');  
		   }  
		 };
		 stickyNav();
		 $(window).scroll(function() {
		 	stickyNav();
		 });
		 });
	</script>
  
   </body>
   
   