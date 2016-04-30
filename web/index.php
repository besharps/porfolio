<?php
//session_start();



?>

<!DOCTYPE html>

<html>
	<head>
		<title>Be Sharps</title>
		
		<link rel="shortcut icon" href="favicon.png" type="image/png"/> 

		
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css"/>
		<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="web/css/magnific-popup.css"/>
		<link rel="stylesheet" type="text/css" href="web/css/slider.css" />
		<script src="web/js/jquery.min.js"></script>
		<script type="text/javascript" src="web/js/modernizr.custom.28468.js"></script>
		<script type="text/javascript" src="web/js/jquery.cslider.js"></script>
		<script type="text/javascript" src="web/js/leerget.js"></script>
		<script src="sweetalert/dist/sweetalert.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" type="text/css" href="sweetalert/themes/twitter/twitter.css">
	</head>
	

	<body>
	
		<!-- start header -->
		<div class="header_bg">
			<div class="wrap">
			<div id="content">
		    	<header id="topnav">
		        	<nav>
		        		<ul>
							<li class="active"> <a class="scroll" href="#home"> Home </a></li>
							<li> <a class="scroll" href="#service"> Servicios </a></li>
							<li> <a class="scroll" href="#portfolio"> Porfolio </a></li>
							<li> <a class="scroll" href="#team"> Equipo </a></li>
							<li> <a target="blank" href="http://besharps.wordpress.com"> News </a></li> <!--blogsingle.html-->
							<li> <a  class="scroll" href="#contact"> Contacto </a></li>
							<div class="clear"> </div>
						</ul>
		        	</nav>
		        	<div class="logo"><a href="index.php"><img src="web/images/logo.png"></a></div>
		        	<!--<a href="#" id="navbtn">Nav Menu</a>-->
		       		<div class="clear"> </div>
		     	</header><!-- end topnav -->
		      	<script type="text/javascript"  src="web/js/menu.js"></script>
		    </div>
			</div>
		</div>
		<!-- start-slider -->
		<div class="slider" id="home"> 
			<div class="wrap">
				<!-- start-da-slider -->
				<div id="da-slider" class="da-slider">
							<div class="da-slide">
								<h2><b>Be Sharps</b></h2>
								<p> Una misma vocación ...el Disesño Web. </p>
								<a href="#team" class="da-link scroll"> Nosotros </a>
							</div>
							<div class="da-slide">
								<h2><b> Web Products </b></h2>
								<p> Diseño - Desarrollo - Mantenimiento </p>
								<a href="#portfolio" class="da-link scroll"> Productos </a>
							</div>
							<div class="da-slide">
								<h2><b> Responsive Design </b></h2>
								<p> HTML, CSS, JScript, MySQL, PHP, CMS </p>
								<a href="#service" class="da-link scroll"> Servicios </a>
							</div>
							<nav class="da-arrows">
								<span class="da-arrows-prev"></span>
								<span class="da-arrows-next"></span>
							</nav>
				</div>

				<script type="text/javascript">
					$(function() {
						
						$('#da-slider').cslider({
							autoplay	: true,
							bgincrement	: 450
						});
						
					});
				</script>
			
						<!-- //End-da-slider -->
			</div>
		</div>
		<!-- service -->
		<div  class="sevice" id="service">
			<div class="wrap">
				<div class="service-grids" >
					<div class="images_1_of_4">
				 		<img src="web/images/round1.png"/>
				 		<h3> Custom Development </h3>
				 		<p > Llevar cada trabajo de forma personalizada según la necesidad de cada cliente, desde el diseño y desarrollo, hasta el mantenimiento y su natural evolución. </p>
						<!-- <div class="button"><span><a href="#">Read More</a></span></div>  -->
					</div>
					<div class="images_1_of_4">
						<img src="web/images/round4.png"/>
						<h3> Web Design </h3>
						<p> Nos encargamos de materializar cada buena idea en un producto web. Realizando diseños personalizados, adaptables y organicos. Sumamos todo lo referernte a logos, imágenes y marcas (branding). </p>
						<!-- <div class="button"><span><a href="#">Read More</a></span></div>  -->
					</div>
					<div class="images_1_of_4">
						<img src="web/images/round2.png"/>
						<h3> Blog pages </h3>
						<p> Trabajamos con gestores de contenidos (CMS), tanto blogs, Noticias, como sitios corporativos. </p>
						<!-- <div class="button"><span><a href="#">Read More</a></span></div>  -->
					</div>
					<div class="images_1_of_4">
						<img src="web/images/round3.png"/>
						<h3> Mobile friendly </h3>
						<p> Todos nuestros trabajos están pensados para acceder desde cualquier dispositivo, compatibles para su uso desde cualquier tablet, smartphone o PC. </p>
						<!-- <div class="button"><span><a href="#">Read More</a></span></div>  -->
					</div>
					<div class="clear"> </div>
					</br>
					<a href="#portfolio" class="scroll"><div class="button1"> Conozca más.. </div></a>
				</div>		
			</div> <!-- agregado por mi porque creo que falta una etiqueta de cierre -->
		</div>
		<!-- //service// -->

		<!-- portfolio -->
		<div class="portfolio_main"id ="portfolio">
			<div class="wrap">
				<div class="heading_h">
					<h3><a href="#">Porfolio</a></h3>
				</div>
				<!--start-mfp -->	
				<div id="small-dialog1" class="mfp-hide">
					<div class="pop_up">
					    <img src="web/images/BeWeather-med651x489.png"/>
					   	<h2>B# Weather</h2>
						<p>Aplicación web, que muestra la ubicación del usuario en un mapa de google (o cualquier ubicación que se señale en él) junto con el pronóstico actual de su zona y el pronóstico extendido día por día.</p>
						<p class="pop_p">Sitio que desarrollamos utilizando HTML, HTML5, CSS, javascript, jquery, AJAX, Json, Bootstrap, PHP, obteniendo loos datos de Forecast (Api de clima) y utilizando api de GoogleMap. <br/>
						sitio: <a target="blank" href="http://mmlabs.com.ar/clima-test/"> mmlabs.com.ar/clima </a></p>
					</div>		
				</div>
				<div id="small-dialog2" class="mfp-hide">
				    <div class="pop_up2">
					    <img src="web/images/BeNutri-med650x488.png"/>
					   	<h2>Nutrisite</h2>
						<p>Aplicación que calcula (previo login) las calorías que se deben consumir por día según si se quiere bajar, mantener o subir de peso y además llevar un control de estas, seleccionando los alimentos consumidos diariamente.</p>
						<p class="pop_p">Desarrollado integramente por nuestro equipo, utilizando como herramientas Bootstrap, HTML, CSS, javascript y jquery para el diseño visual (lado cliente) que también es Mobile friendly. Otras tecnologías usadas: PHP y base de datos con MySql (lado servidor) <a href="http://mmlabs.com.ar/nutrisite">http://mmlabs.com.ar/nutrisite/</a></p>
					</div>
				</div>
				<div id="small-dialog3" class="mfp-hide">
				    <div class="pop_up3">
					   	<img src="web/images/BeCupCake-med650x488.png"/>
					   	<h2>Cupcake house </h2>
						<p>En este caso se usó una plantilla HTML que es mobile friendly (significa que puede verse sin problemas en un smartphone) adaptandola visual y funcionalmente a las necesidades del cliente.</p>
						<p class="pop_p">Emprendimiento para la fabricación y envío de cupcakes.<br/><a href="http://www.cupcakehouse.com.ar/">http://www.cupcakehouse.com.ar/</a></p>
					</div>
				</div>
				<div id="small-dialog4" class="mfp-hide">
				    <div class="pop_up4">
					   	<img src="web/images/BeMAG-med650x485.png"/>
					   	<h2>MAGennasi consultores </h2>
						<p>Este es un ejemplo de un trabajo realizado en "Wordpress", tomando una plantilla que fue modificada según los requerimientos de nuestro cliente.</p>
						<p class="pop_p">Consultores en Neurociencia <br/> <a href="http://www.magennasi.com.ar/">http://www.magennasi.com.ar/</a></p>
					</div>
				</div>
				<div id="small-dialog5" class="mfp-hide">
				    <div class="pop_up5">
					   	<img src="web/images/BeKatib-med651x489.png"/>
					   	 <h2> Katib rodados </h2>
						 <p> Sito web Fabricación de rodados para niños entre otros.. </p>
						<p class="pop_p"> sitio: 
							<a target="blank" href="http://besharps.esy.es/katib-test/"> besharps.es/katib </a>
						</p>
						 <p class="pop_p"> tecnologías: WrodPress - PHP - HTML - CSS </p>
					</div>
				</div>
				<div id="small-dialog6" class="mfp-hide">
				   <div class="pop_up6">
				   		<img src="web/images/BeSharpsLogo-trans-sma50x200.png"/>
				   	 	<h2> </h2>
					 	<p>En desarrollo...</p>
					 	<p class="pop_p"></p>
					</div>
				</div>
				<div id="small-dialog7" class="mfp-hide">
				    <div class="pop_up7">
					   	 <h2>Estudiante de Ingeniería Informática - UTN </h2>
					   	 <h3>Técnico Superior en Programación - UTN Haedo </h3>
					   	 <h4>Técnico Electrónico</h4>
					   	 <p class="pop_p"><a href="mailto:martinmuelas@gmail.com"> <image src="web/images/gmail.png" alt="logo-gmail" class="gmail" /> martinmuelas@gmail.com</a> </p>
						 <p class="pop_p"><a href="https://www.linkedin.com/in/martinmuelas">
						 	<image src="web/images/linkedin.png" alt="logo-linkedin" class="linkedin" /> www.linkedin.com</a> 
						 </p>
					</div>
				</div>
				<div id="small-dialog8" class="mfp-hide">
				    <div class="pop_up7">
					   	 <h2>Técnico Superior en Programación - UTN Haedo </h2>
					   	 <h3>Soporte Técnico Sr.</h3>
						 <p class="pop_p"><a href="mailto:rjo250882@gmail.com"> <image src="web/images/gmail.png" alt="logo-gmail" class="gmail" /> rjo250882@gmail.com</a> </p>
						 <p class="pop_p"><a href="https://www.linkedin.com/in/ramiro-oviedo-4a795619"> 
						 	<image src="web/images/linkedin.png" alt="logo-linkedin" class="linkedin" /> www.linkedin.com </a> 
						 </p>
					</div>
				</div>
				<div id="small-dialog9" class="mfp-hide">
				    <div class="pop_up7">
					   	 <h2>Técnico Superior en Programación - UTN Haedo </h2>
					   	 <h3>Técnico Electrónico </h3>
					   	 <br>
						 <p class="pop_p"><a href="mailto:gabrielsanchez.frh@gmail.com"> 
						 	<image src="web/images/gmail.png" alt="logo-gmail" class="gmail" /> gabrielsanchez.frh@gmail.com</a> 
						 </p>
						 <p class="pop_p"><a href="https://www.linkedin.com/in/césar-gabriel-sanchez-302635111">
						 	<image src="web/images/linkedin.png" alt="logo-linkedin" class="linkedin" /> www.linkedin.com</a> 
						 </p>
					</div>
				</div>
				<div id="small-dialog10" class="mfp-hide">
				    <div class="pop_up7">
					   	 <h2>Técnico Superior en Programación - UTN Haedo </h2>
					   	 <h3>Tester Sr.</h3>
						 <p class="pop_p"><a href="mailto:pabloviv@gmail.com"> <image src="web/images/gmail.png" alt="logo-gmail" class="gmail" /> pabloviv@gmail.com</a> </p>
						 <p class="pop_p"><a href="https://www.linkedin.com/in/pabloviv">
						 	<image src="web/images/linkedin.png" alt="logo-linkedin" class="linkedin" /> www.linkedin.com</a> 
						 </p>
					</div>
				</div>

				<!--end-mfp -->	
				<!--start-content-->

				<div class="gallery">
					<div class="container">
						<div id="gallerylist">
							<div class="gallerylist-wrapper">				
								<a class="popup-with-zoom-anim" href="#small-dialog1">
									<img src="web/images/pop7.png" alt="_b#weather"/>
								</a>
							</div>
							<div class="gallerylist-wrapper">				
								<a class="popup-with-zoom-anim" href="#small-dialog2">
									<img src="web/images/BeNutri-sma350x263.png"  alt="Image 1"/> 
								</a>
							</div>
							<div class="gallerylist-wrapper">				
								<a class="popup-with-zoom-anim" href="#small-dialog3">
									<img src="web/images/BeCupCake-sma350x262.png"  alt="Image 1"/>
								</a>
							</div>
							<div class="clear"></div>
						</div>		
						<div id="gallerylist1">
							<div class="gallerylist-wrapper">				
								<a class="popup-with-zoom-anim" href="#small-dialog4">
									<img src="web/images/BeMAG-sma350x261.png" alt="Image 1"/>
								</a>
							</div>
							<div class="gallerylist-wrapper">				
								<a class="popup-with-zoom-anim" href="#small-dialog5">
									<img src="web/images/BeKatib-sma350x261.png"  alt="_katib"/>
								</a>
							</div>
							<div class="gallerylist-wrapper">				
								<a class="popup-with-zoom-anim" href="#small-dialog6">
									<img src="web/images/BeSharpsLETRA-trans-med395x300.png"  alt="Image 1"/>
								</a>
							</div>
							<div class="clear"> </div>
							<!--  <div class="button_1"><span><a class="scroll" href="#team"></a></span></div> -->
							<br/>
							<a href="#team" class="scroll"><div class="button1"> Nosotros..</div></a>
						</div>																																
					</div>
				</div>
				<!--end container -->

				<script src="web/js/jquery.magnific-popup.js" type="text/javascript"></script>

				<script>
					$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
					});
				</script>	
					
			</div>
			<!-- </div> borrado por mi -->
		</div>

		<!--portfolio-->

		<!--start-team-->
		<div class="team" id="team">
			<div class="wrap">
		 		<div class="heading_h">
					<h3><a href="#">B# Team</a></h3>
				</div>	

			 	<div class="middle-grids">

					<div class="grid_1_of_4 images_1_of_4">
				 			<a class="popup-with-zoom-anim" href="#small-dialog7">
				 				<span class="rollover"> </span>
							</a>
							<img src="web/images/pic1.jpg"  alt="Image 1"/>
				 			<h3>Martín Muelas</h3>
				 			<h4>Co-Founder & Developer</h4>
				 			<p>Desarrollador de las inrtefaces de usuario. Es el más versátil, ya que colabora con el diseño web y con el backend</p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a class="popup-with-zoom-anim" href="#small-dialog8">
			 				<span class="rollover"> </span>
						</a>
						 <img src="web/images/pic2.jpg"/>
						 <h3>Ramiro Oviedo</h3>
						 <h4>Co-Founder & Designer</h4>
						 <p>Es el encargado del diseño de todo lo relacionado con imágenes, además de ser programador. Y por supuesto es el creativo del grupo</p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a class="popup-with-zoom-anim" href="#small-dialog9">
			 				<span class="rollover"> </span>
						</a>
						 <img src="web/images/pic3.jpg"/>
					 	<h3>Gabriel Sanchez</h3>
					 	<h4>Co-Founder & Backend</h4>
					 	<p>Responsable del desarrollo de la parte funcional de las aplicaciones web.Es el de mayor experiencia en programación del equipo </p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a class="popup-with-zoom-anim" href="#small-dialog10">
			 				<span class="rollover"> </span>
						</a>
						 <img src="web/images/pic8.jpg"/>
						 <h3>Pablo Vivona</h3>
						 <h4>Co-Founder & Developer</h4>
						 <p>Hábil desarrollador y tester de gran experiencia, es el que tiene encomendado todo lo que se refiere a la logística del grupo</p>
					</div>
					<div class="clear"> </div>
					<br/>
					<a href="#contact" class="scroll"><div class="button1"> Contácto..</div></a>
				</div>					
			</div>
		</div>


		<!-- text-slider 
					
			<div id="clientes">		
				 <div class="wmuSlider example1">
				 	<div class="wrap">
					   <article style="position: absolute; width:64%; opacity: 0;"> 
						   	
							<div class="cont span_2_of_3">
								    <h4>Que dicen nuestros clientes</h1>
									<p>Lorem ipsum is simply dummy text of the printing and typesetting industry.Lorem ipsum has been the printing and typesetting industry's standard dummy text ever since the 500,s when an unknown printer took a gellery of type.</p>
								  	<span><a href="#">John Dove</a></span>
								 
							</div>
						</article>
						 <article style="position: absolute; width:64%; opacity: 0;"> 
						   	<div class="cont span_2_of_3">
								    <h4>Que dicen nuestros clientes</h4>
								    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry.Lorem ipsum has been the printing and typesetting industry's standard dummy text ever since the 500,s when an unknown printer took a gellery of type.</p>
								   <span><a href="#">John Dove</a></span>
							</div>
						 </article>
						 <article style="position: absolute; width:64%; opacity: 0;"> 
						   	<div class="cont span_2_of_3">
								    <h4>Que dicen nuestros clientes</h4>
								    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry.Lorem ipsum has been the printing and typesetting industry's standard dummy text ever since the 500,s when an unknown printer took a gellery of type.</p>
								    <span><a href="#">John Dove</a></span>
							</div>
						 </article>
				 
		                  <script src="web/js/jquery.wmuSlider.js"></script> 
							<script>
		       				     $('.example1').wmuSlider();         
		   					</script> 	           	      
			         </div>
			     </div>
			</div>     

		  text-slider -->
		 
		 
		 <!-- start-contact --> 
		<div class="contact" id="contact">
			<div class="wrap">
				<h2>Contáctenos</h2>
				<div class="contact-form">
						<div class="para-contact">
							<h4>Puede completar el formulario de contacto</h4>
							<p><b> Le responderemos a la brevedad, todas las consultas son importantes para nuestro equipo.</b></p>
						
						 	<div class="social_2 social_3">	
					           <ul>	
								    <li class="facebook"><a href="https://www.facebook.com/profile.php?id=100011723567037"><span></span></a></li>
								    <li><span id="coment1" style="color: white">Siganos en Facebook </span></li>
								   <!--  <li class="twitter"><a href="#"><span> </span></a></li>	 	
									<li class="google"><a href="#"><span> </span></a></li> -->
							  </ul>
				 		    </div>
				 		    <div class="get-intouch-left-address">
								<p>Ciudad Autónoma de Buenos Aires</p>
								<p>Argentina.</p>
								<!-- <p>(011) 1234 567</p> -->
								<p><a href="mailto:info@besharps.com.ar"> infobesharps@gmail.com</a></p>
							</div>
							<div class="clear"> </div>	
						</div>



						<div class="form">
				  			<form method="POST" action="cont.php" >
						    	<input type="text" name="nombre" class="textbox" placeholder=" Nombre" maxlength="50" />
						    	<input type="email" class="textbox" placeholder="Email" name="email" maxlength="60" />
									<div class="clear"> </div>
							    <div>
							    	<textarea name="mensaje" maxlength="1000"  > </textarea>
							    </div> 
								<div class="button send_button">
									<input type="submit" value="Enviar" name="enviar" />
								</div>
								<div class="clear"> </div>
							</form>
						</div>

						<a class="mov-top" href="#home1"> <span> </span></a>
						<div class="clear"> </div>
				</div>
		  	</div>
		</div>

		<!-- scroll_top_btn -->
		<script type="text/javascript" src="web/js/move-top.js"></script>
		<script type="text/javascript" src="web/js/easing.js"></script>
	   
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>


		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});

				//Agregado por Gabi. Comportamiento hover sobre iconos de gmail, linkedin
				$(".gmail").hover(function(){
					$(this).attr("src","web/images/gmail2.png")
				});

				$(".gmail").mouseout(function(){
					$(this).attr("src","web/images/gmail.png")
				});

				$(".linkedin").hover(function(){
					$(this).attr("src","web/images/linkedin2.png")
				});

				$(".linkedin").mouseout(function(){
					$(this).attr("src","web/images/linkedin.png")
				});

			});
		</script>

		<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!-- //end-contact -->

		<!-- Maneja los mensajes de error o éxito de envío del mensaje de contacto -->
		<?php 
			
			if( isset($_SESSION['error']) ){
			
				if($_SESSION['error']==10){ ?>
					<script type="text/javascript">swal({ title: "¡Gracias por su mensaje!", text: "Se cerrará en 2 segundos.", timer: 2000, showConfirmButton: false, type:"success", customClass:"ok" });     </script>
					<?php $_SESSION['error']="ok";	//unset($_SESSION['error']);
				} 
				if($_SESSION['error'] == 1){ ?>
					<script type="text/javascript">swal({ title: "Debe agregar un nombre!!", text: "Se cerrará en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" });</script> 
					<?php $_SESSION['error']="ok";	//unset($_SESSION['error']);	
				} 
				if($_SESSION['error'] == 2){ ?>
					<script type="text/javascript">swal({title: "Error en el nombre del formulario!!", text: "Se cerrará en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no"});</script> 
					<?php $_SESSION['error']="ok";	//unset($_SESSION['error']);	
				} 
				if($_SESSION['error'] == 3){ ?>
					<script type="text/javascript">swal({ title: "Debe agregar un email!!", text: "Se cerrará en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" });</script> 
					<?php $_SESSION['error']="ok";	//unset($_SESSION['error']);	
				} 
				if($_SESSION['error'] == 4){ ?>
					<script type="text/javascript">swal({ title: "Error en la longuitud del email!!", text: "Se cerrará en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" });</script> 
					<?php $_SESSION['error']="ok";	//unset($_SESSION['error']);	
				} 
				if($_SESSION['error'] == 5){ ?>
					<script type="text/javascript">swal({title: "Error en el formato del email!!", text: "Se cerrará en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" });  </script> 
					<?php $_SESSION['error']="ok";	//unset($_SESSION['error']);	
				} 
				if($_SESSION['error'] == 6){ ?>
					<script type="text/javascript">swal({ title: "Debe agregar un mensaje!!", text: "Se cerrará en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" });</script> 
					<?php $_SESSION['error']="ok";	//unset($_SESSION['error']);
				} 
				if($_SESSION['error'] == 7){ ?>
					<script type="text/javascript">swal({title: "Error en la longuitud del mensaje!!", text:"Se cerrará en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" });</script> 	
					<?php $_SESSION['error']="ok";	//unset($_SESSION['error']);
				} 
				if($_SESSION['error'] == 11){ ?>
					<script type="text/javascript">swal({title:"Error al enviar su mensaje. Intente más tarde!!", text:"Se cerrará en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" }); </script> 
					<?php $_SESSION['error']="ok";	//unset($_SESSION['error']);	
				} 	
			}
			//else{
				//echo "sale por el ultimo else!!";
				//echo $_SESSION['error'];
			//}
			
		?>

	</body>
</html>		


	