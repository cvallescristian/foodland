<!DOCTYPE html>

<html lang="es">
<head>


	<title>Bienvenido a Foodland</title>

	<meta charset="utf-8" />

	<link href="jquery/css/custom-theme/jquery-ui-1.9.2.custom.css" rel="stylesheet">
	<script src="jquery/js/jquery-1.8.3.js"></script>
	<script src="jquery/js/jquery-ui-1.9.2.custom.js"></script>

	<link rel="stylesheet" href="css/masterPage.css" />
	<link rel="stylesheet" href="css/index.css" />
	<link rel="stylesheet" href="css/efectos.css" /> 
	<link rel="shortcut icon" href="images/spot.ico" />
	
	
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'></script>

	<script>
		


		$(function (){
			var abajo1=false;
			var log=false;
			$('#texto_usuario').hide();
			$('#inicio_sesion').hide();
			$('#abajo_hover').hide();
			$('#foto').hide();
			$('#abajo').on('click',function(){
				if(abajo1==false){
					$('#abajo_hover').fadeIn('slow');
					//$( "#abajo_hover" ).show( 'slide','slow');
					//$('#abajo_hover').show('slow');
					abajo1=true;
				}else{
					//$('#abajo_hover').hide('slide','slow');
					$('#abajo_hover').fadeOut('slow');
					abajo1=false;
				}
			});
			
			
			$('#abajo_login').hide();
			$('#pelota_login').on('click',function(){
				if(abajo1==false){
					$('#abajo_login').fadeIn('slow');
					//$( "#abajo_hover" ).show( 'slide','slow');
					//$('#abajo_hover').show('slow');
					abajo1=true;
				}else{
					//$('#abajo_hover').hide('slide','slow');
					$('#abajo_login').fadeOut('slow');
					abajo1=false;
				}
			});
			
			$('#buscador').on('click',function() {  
				$('#buscador').val("");
			});

			$('#login_user').on('click',function(){
						$('#login_user').val("");
				});	
			$('#login').on('click',function(){
				if (log==false) {
					$('#inicio_sesion').show("slow");
					log=true;
				}else{
					$('#inicio_sesion').hide("slow");
					log=false;
				};
					
			});	

		$('#cargarMas').on('click', function(){
				alert("hola");
			});
		});
		
	</script>

		<script>
	$(function() {
		
		$( "#accordion" ).accordion();
		

		
		var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
		

		
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		
		$( "#tabs" ).tabs();
		

		
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});

		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
		

		
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});
		

		
		$( "#progressbar" ).progressbar({
			value: 20
		});
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});

	
	</script>

<style type="text/css">
/* Botón Ir Arriba
----------------------------------------------- */
#IrArriba {
position: fixed;
bottom: 30px; /* Distancia desde abajo */
right: 30px; /* Distancia desde la derecha */
}

#IrArriba span {
width: 60px; /* Ancho del botón */
height: 60px; /* Alto del botón */
display: block;
background: url(http://lh5.googleusercontent.com/-luDGEoQ_WZE/T1Ak-gta5MI/AAAAAAAACPI/ojfEGiaNmGw/s60/flecha-arriba.png) no-repeat center center;
}
</style>

<div id='IrArriba'>
<a href='#Arriba'><span/></a>
</div>
<script type='text/javascript'>
	//<![CDATA[
	// Botón para Ir Arriba
	jQuery.noConflict();
	jQuery(document).ready(function() {
		jQuery("#IrArriba").hide();
		jQuery(function () {
			jQuery(window).scroll(function () {
				if (jQuery(this).scrollTop() > 200) {
					jQuery('#IrArriba').fadeIn();
					jQuery('#IrArriba').css('z-index','12');
				} else {
					jQuery('#IrArriba').fadeOut();
				}
				if(jQuery(this).scrollTop()>600){
					jQuery('#menu').css('position','fixed');
					jQuery('#menu').css('z-index','12');
					jQuery('#menu').css('top','0px');
				}else{
					jQuery('#menu').css('position','absolute');
					jQuery('#menu').css('top','600px');
				}
			});
			jQuery('#IrArriba a').click(function () {
				jQuery('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});

	});
	//]]>
</script>

 <?php 
 if (isset($_COOKIE['usuario'])){
	
	 echo "
		<script>
		
		$(function (){
		
			$('#login').hide();
			$('#sex').show('slow');
			$('#foto').show('slow');
		
		});
		
		
		
		</script>	
	";

	};
 		
	
?>

</head>
<body  BGCOLOR="#eae8e8">
<!-- empieza la página maestra !-->
<header>
	<div id="cabecera" class="efecto2">
		<a href="index.html">
		<img src="images/logo.png" id="logo">
		</a>
	<div style="position:absolute; border-style:none; top:25px; left:305px; width: 0px; height:0px;"class="ui-state-default ui-corner-all" title=".ui-icon-circle-triangle-s"><span class="ui-icon ui-icon-circle-triangle-s" id="abajo"> </span></div>

	<div id="abajo_hover" style="background-color:black; color:white; position:absolute; z-index:10; left:307px; top:50px; background-color:#280308;">
				
					<h5>	
						<ul>¿Que es Foodland?</ul>
						<ul>¿Cómo funciona los pedidos?</ul>
						<ul>¿Cómo funciona el negocio?</ul>
						<ul>Preguntas Frecuentes</ul>
					</h5>
				
				
						
	</div>
	
	<div style="position:absolute; border-style:none; top:20px; left:910px; width: 0px; height:0px;"class="ui-state-default ui-corner-all" title=".ui-icon-circle-triangle-s"><span class="ui-icon ui-icon-circle-triangle-s" id="pelota_login"> </span></div>
	

					
						<table border="1" id="abajo_login" style="background-color:#280308; position:absolute; z-index:10; left:775px; top:50px; width:150px;">
							
							<tr>
							
							<td><center>Cuenta </center></td>
				
							</tr>
						
							<tr>
							<td><center><a href="logout.php"> Salir </a> </center></td>
							</tr>
							
			
						</table>

		<div id="foto" style="position:absolute; top:0px; right:460px;">			
		<img src="index/anonimo.jpg">		
		</div>		
					
		<input id="buscador" type="text" placeholder="Qué quieres comer ?">
		
		<button  class="buttonComun" style=" position:absolute; margin-left:387px; top:10px; height:28px;" >Buscar</button>
		
		<div id="sex" style="position:absolute; top:0px; left:820px;">
		
			
			<h5> <?php 
					if (isset($_COOKIE['usuario']))
					echo $_COOKIE['usuario'];
	
	
				?>
</h5>
		</div>

		<div id="login">
			<h4> Iniciar sesión </h4>
		</div>
		<div id="inicio_sesion" style="position:absolute; background-color:black; left:800px; top:50px; width:250px; background-color:#280308; z-index:99;" width="400px">
					
				<form action="login.php" method="post"> 
					<table style=" margin-left:20px;">
						<tr>
							<td><h5>Email:</h5></td><td><input type="text" id="login_user" name="email"value="Usuario"></td>
						</tr>
						<tr>		
							<td><h5>Contraseña:</h5></td><td><input type="password" name="pass"></td>
						</tr>
						
						<tr>
							<td><button>Entrar</button></td>
							<td><h5>¿no tienes cuenta?</h5></td>
						</tr>
					
					</table>
				</form>	
			</div>
		
	</div>
	<div>
		<a id="registro_local" class="buttonA" href="registro_local.html"> Publica tus productos</a>

				</div>

</header> 
<!-- términa la página maestra !-->


<section id="portada">	
	<img src="images/fotoprincipal.jpg" id="fotoprincipal">
	<div id="textoGrande">
		<h1 >El mejor catalogo de comida delivery</h1>
	</div>
	<div id="textoChico">
		<h2>Con FoodLand pedir comida nunca fue tan entretenido <h2>
	</div>
	<div class="bloqueNegro">
	</div>
		<div class="bloque2" action="registrar.php" >
			<center><h3> Registrate y participa por el concurso de </br>inauguracion</h3></center>
			<form action= "registrar.php" name="registro" style="font-size:14px;">

				Mail:</br>
				<input type="text" class="textarea" name="email" >
				</br>
				Contraseña:</br>
				<input type="password" class="textarea" name="pass1" >
				</br>
				Confirmar(contraseña) </br>
				<input type="password" class="textarea" name="pass2" >
				</br></br>
				<input type="button" class="buttonComun" value="Registrarse" onclick="validacion();" style="width:100px; height:40px; font-size:14px;">
			</form>
		</div>
	
</section>

</section id="menu">
<div id="menu">
	<center>
		<a href="" class="enlace" id="menu1">¿Tienes hambre?</a>
		<a href="" class="enlace" id="menu2">Inicio</a>
		<a href="mapa-locales.php" class="enlace" id="menu3">Mapa de locales</a>
		<a href="local.html" class="enlace" id="menu4">Nuestros locales</a>
	</center>
	
</div>
</section>

<section id="comidasCercanas">
	<h1 style="text-shadow: white 0.1em 0.1em 0.2em;">Productos cerca de ti </h1>
	<div id="descripcion_pg11">
	</div>
	<div id="descripcion_pg1">
		<h2 style="margin-top:10px; margin-left:5px;">pizza napolitana demasiado rica para ser verdad posh</h2>
		<h4 style="margin-top:10px; margin-left:10px; color:#eae8e8;">ingredientes de la pizza</h4>	
	</div>
	
	
	<div id="descripcion_pc11">
	</div>
	<div id="descripcion_pc1">
		<h4>pizza napolitana demasiado rica para ser verdad</h4>
		<h5 style="position:absolute; top:30px;">&nbsp;&nbsp;&nbsp;&nbsp;ingredientes de la pizza</h5>	
	</div>
	
	
	<div id="descripcion_pc12">
	</div>
	<div id="descripcion_pc2">
		<h4>pizza napolitana demasiado rica para ser verdad</h3>
		<h5 style="position:absolute; top:30px; ">&nbsp;&nbsp;&nbsp;&nbsp;ingredientes de la pizza</h5>
		
	</div>

	<div id="descripcion_pc13" style="position:absolute; top:1060px; left:0px;"></div>
	<div id="descripcion_pc3">
		<h4 style="margin-top:55px; margin-left:-30px;">pizza napolitana demasiado rica para ser verdad</h3>
		<h5 style="margin-top:-10px; margin-left:-20px;">ingredientes de la pizza</h5>
		
	</div>


	<div id="descripcion_pc13" style="position:absolute; top:1060px; left:575px;"></div>
	<div id="descripcion_pc4" >
		<h4 style="margin-top:55px; margin-left:25px;">pizza napolitana demasiado rica para ser verdad</h4>
		<h5 style="margin-top:-10px; margin-left:25px;">&nbsp;&nbsp;&nbsp;&nbsp;ingredientes de la pizza</h5>
		
	</div>
	<div>
		<img src="index/etiqueta.png" id="tag1" width="250" height="76">
		<img src="index/proG1.jpg" class="Promo_Grande" >
		<h2 id="precio_pg">$5000</h2>
		<button id="boton_pg" style=" z-index:10;  position:absolute; top:520px; right:20px;"> Ver más </button>
		<img src="index/ranking.jpg" style="z-index:10; position:absolute; top:72px; right:5px; " width="200px;" height="50px;">
		<img src="index/CR-blanco.png" style="z-index:10; position:absolute; top:72px; left:5px;"  width="50px" height="70px" >
	</div>
	
	<img src="index/etiqueta.png" id="tag2" width="130" height="50">	
	<img src="index/proC1.jpg" class="Promo_Chica" id="c1">
	<h4 id="precio_pc1" style="position:absolute; z-index:10; top:783px; left:380px; color:white;">$5000</h4>
	<button id="boton_pc1" style=" z-index:10;  position:absolute; top:800px; right:575px;"> Ver más </button>
	<img src="index/ranking.jpg" style="z-index:10; position:absolute; top:600px; right:575px; " width="100px;" height="25px;">
	<img src="index/CR-blanco.png" style="z-index:10; position:absolute; top:610px; left:5px;"  width="30px" height="40px" >

	
	<img src="index/etiqueta.png" id="tag3" width="130" height="50">
	<img src="index/proC2.jpg" class="Promo_Chica" id="c2">
	<h4 style="z-index:10; position:absolute; color:white; top:783px; right:53px;">$14990</h4>
	<button id="boton_pg" style="z-index:10; position:absolute; top:800px; right:0px;">ver más</button>
	<img src="index/ranking.jpg" style="z-index:10; position:absolute; top:600px; right:0px; " width="100px;" height="25px;">
	<img src="index/CR-blanco.png" style="z-index:10; position:absolute; top:610px; left:580px;" width="30px" height="40px;">
	


	<img src="index/etiqueta.png" id="tag4" width="130" height="50">
	<img src="index/proC3.jpg" class="Promo_Chica" id="c3">
	<h4 style="z-index:10; position:absolute; color:white; top:1055px; left:382px;">$5990</h4>
	<button style="z-index:10; position:absolute; top:1073px; left:430px; ">ver más</button>
	<img src="index/ranking.jpg" style="z-index:10; position:absolute; top:870px; left:390px;" width="100px;" height="25px;">
	<img src="index/CR-blanco.png" style="z-index:10; position:absolute; top:880px; left:0px;" width="30px" height="40px;">



	<img src="index/etiqueta.png" id="tag5" width="130" height="50">
	<img src="index/proC4.jpg" class="Promo_Chica" id="c4">
	<h4 style="z-index:10; position:absolute; color:white; top:1055px; right:65px;">$5990</h4>
	<button style="z-index:10; position:absolute; top:1073px; right:0px; ">ver más</button>
	<img src="index/ranking.jpg" style="z-index:10; position:absolute; top:870px; right:0px;" width="100px;" height="25px;">
	<img src="index/CR-blanco.png" style="z-index:10; position:absolute; top:880px; right:460px;" width="30px" height="40px;">

</section>

<section id="Categoria">
	<div id="categoria">
	<h1>¿Qué vas a comer hoy ? </h1>
	<center>
		<div id="textoc1" class="textoc">
			<h3>X productos para ti</h3>
		</div>
		<div id="textoc2" class="textoc">
			<h3>X productos para ti</h3>
		</div>
		<div id="textoc3" class="textoc">
			<h3>X productos para ti</h3>
		</div>
		<div id="textoc4" class="textoc">
			<h3>X productos para ti</h3>
		</div>
		<div id="textoc5" class="textoc">
			<h3>X productos para ti</h3>
		</div>
		<div id="textoc6" class="textoc">
			<h3>X productos para ti</h3>
		</div>

	<img src="index/cat1.jpg" class="foto_categoria" id="cat1" ;>
	<img src="index/cat2.jpg" class="foto_categoria" id="cat2";>
	<img src="index/cat3.jpg" class="foto_categoria" id="cat3";>
	<img src="index/cat4.jpg" class="foto_categoria" id="cat4";>
	<img src="index/cat5.jpg" class="foto_categoria" id="cat5";>
	<img src="index/cat6.jpg" class="foto_categoria" id="cat6";>
	<div id="ab1" class="ab">
		<div class="ab_texto">Pizza</div>
	</div>
	<div id="ab2" class="ab">
		<div class="ab_texto">Pizza2</div>
	</div>
	<div id="ab3" class="ab">
		<div class="ab_texto">Pizza3</div>
	</div>
	<div id="ab4" class="ab">
		<div class="ab_texto">Pizza4</div>
	</div>
	<div id="ab5" class="ab">
		<div class="ab_texto">Pizza5</div>
	</div>
	<div id="ab6" class="ab">
		<div class="ab_texto">Pizza6</div>
	</div>

</center>
</div>
</section>
<center>
	<button id="cargarMas" class="buttonComun"style="position:relative; top:2460px;  z-index:10;">Cargar más</button>
</center>


<section id="pie_pagina">
	<div id="pie" >
				<center>
					<a href="" class="enlace" id="menu1">Sobre nosotros?</a>
					<a href="" class="enlace" id="menu1">Unete a Foodland Team</a>
					<a href="" class="enlace" id="menu1">Terminos y condiciones</a>
					<a href="" class="enlace" id="menu1">Contactanos</a>

				</center>
				
	</div>
</section>

</body>
</html>


