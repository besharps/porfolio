<!DOCTYPE html>

<html>
	<head>
		<title>Be Sharps</title>
		<link rel="shortcut icon" href="favicon.png" type="image/png"/>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css"/>
		<link href="smartphone/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="smartphone/css/magnific-popup.css"/>
		<link rel="stylesheet" type="text/css" href="smartphone/css/slider.css" />
		<script src="smartphone/js/jquery.min.js"></script>
		<script type="text/javascript" src="smartphone/js/modernizr.custom.28468.js"></script>
		<script type="text/javascript" src="smartphone/js/jquery.cslider.js"></script>
		<script src="sweetalert/dist/sweetalert.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" type="text/css" href="sweetalert/themes/twitter/twitter.css">
		<script src="web/js/valida-form-contacto.js"></script>
	</head>
	

	<body>
	
		<!-- start header -->
		<div class="header">
			<div class="wrap">
	        	<nav class="nav">
	        		<a href="#" id="w3-menu-trigger"> </a>
	        		<ul class="nav-list" >
						<li class="nav-item"> <a class="scroll" href="#home"> Home </a></li>
						<li class="nav-item"> <a class="scroll" href="#service"> Servicios </a></li>
						<li class="nav-item"> <a class="scroll" href="#portfolio"> Portfolio </a></li>
						<li class="nav-item"> <a class="scroll" href="#team"> Equipo </a></li>
						<li class="nav-item"> <a target="blank" href="http://besharps.wordpress.com"> News </a></li>
						<li class="nav-item"> <a class="scroll" href="#contact"> Contacto </a></li>
						<div class="clear"> </div>
					</ul>
	        	</nav>
	        	<div class="logo"><img src="smartphone/images/logo.png"></div>
	       		<div class="clear"> </div>
		      	<script src="smartphone/js/responsive.menu.js"></script>
		      	<div class="clear"> </div>
			</div>
		</div>
		<!-- start-slider -->
		<div class="slider" id="home"> 
			<div class="wrap">
				<!-- start-da-slider -->
				<div id="da-slider" class="da-slider">
					<div class="da-slide">
						<h2><b>Software Developers</b></h2>
						<p>	Distintos perfiles, una<br/>
						 misma vocación</p>
						<a href="#team" class="da-link"> Nosotros </a>
					</div>
					<div class="da-slide">
						<h2><b> Web Products </b></h2>
						<p> Diseño - Desarrollo - Mantenimiento </p>
						<a href="#portfolio" class="da-link"> Productos </a>
					</div>
					<div class="da-slide">
						<h2><b> Responsive Design </b></h2>
						<p> HTML, CSS, JavaScript, MySQL, PHP, CMS</p>
						<a href="#service" class="da-link"> Servicios </a>
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
							bgincrement	: 500
						});
						
					});
				</script>
			
						<!-- //End-da-slider -->
			</div>
		</div>
		<!-- service -->
		<div  class="sevice" id="service">
			<div class="wrap">
				<center><h1 class="subtitulos">Servicios</h1></center>

				<div></div>
				<div class="service-grids" >
					<div class="images_1_of_4">
				 		<img src="web/images/round1.png"/>
				 		<h3> Custom Development </h3>
				 		<p > Desarrollamos cada proyecto de forma original y personalizada según la necesidad de cada cliente, desde el diseño y desarrollo, hasta el mantenimiento y su natural evolución. </p>
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
						<p> Utilizamos, desarrollamos y mantenemos gestores de contenidos (CMS), utilizados para blogs, Portales de noticias, como sitios corporativos. </p>
						<!-- <div class="button"><span><a href="#">Read More</a></span></div>  -->
					</div>
					<div class="images_1_of_4">
						<img src="web/images/round3.png"/>
						<h3> Mobile friendly </h3>
						<p> Trabajamos pensando en los distintos canales de comunicación OnLine, accediendo desde cualquier dispositivo compatible,  tablet, smartphone o PC. </p>
						<!-- <div class="button"><span><a href="#">Read More</a></span></div>  -->
					</div>
					<div class="clear"> </div>
				</div>		
			</div> 
		</div>
		<!-- //service// -->

		<!-- portfolio -->
		<div class="portfolio_main"id ="portfolio">
			<div class="wrap">
				<div class="heading_h">
					<center><h1 class="subtitulos">Portfolio</h1></center>
				</div>
				<!--start-mfp -->	
				<div id="small-dialog1" class="mfp-hide">
					<div class="pop_up">
					    <img src="smartphone/images/BeWeather-med651x489.png"/>
					   	<h2>B# Weather</h2>
						<p>Aplicación web de pronóstico climático actual, diario o por horas, utilizando la geolocalización o la ubicación que usuario indique.</p>
						<p class="pop_p">HTML5, CSS, Javascript, JQuery, AJAX, manejo de APIs<br/>
						Link: <a target="blank" href="http://mmlabs.com.ar/clima/"> mmlabs.com.ar/clima </a></p>
					</div>		
				</div>
				<div id="small-dialog2" class="mfp-hide">
				    <div class="pop_up2">
					    <img src="smartphone/images/BeNutri-med650x488.png"/>
					   	<h2>Nutrisite</h2>
						<p>Contador de calorias online, utilidad para llevar un control de lo consumido y lo gastado diariamente hacia un objetivo determinado.</p>
						<p class="pop_p">	Bootstrap, PHP, MySql.<br/>
						Link: <a target="blank" href="http://mmlabs.com.ar/nutrisite">http://mmlabs.com.ar/nutrisite/</a></p>
					</div>
				</div>
				<div id="small-dialog3" class="mfp-hide">
				    <div class="pop_up3">
					   	<img src="smartphone/images/BeCupCake-med650x488.png"/>
					   	<h2>Cupcake house </h2>
						<p>	Catálogo Online de productos - emprendimiento de fabricacion y comercialización de Cupcakes.</p>
						<p class="pop_p">HTML5, CSS3, Javascript, PHP.<br/>
						Link: <a target="blank" href="http://www.cupcakehouse.com.ar/">http://www.cupcakehouse.com.ar/</a></p>
					</div>
				</div>
				<div id="small-dialog4" class="mfp-hide">
				    <div class="pop_up4">
					   	<img src="smartphone/images/BeMAG-med650x485.png"/>
					   	<h2>MAGennasi consultores </h2>
						<p>	Consultores en Neurociencia - Blog y Portal de noticias.</p>
						<p class="pop_p"> WordPress template, HTML, PHP, MySql<br/>
						Link: <a target="blank" href="http://www.magennasi.com.ar/">http://www.magennasi.com.ar/</a></p>
					</div>
				</div>
				<div id="small-dialog5" class="mfp-hide">
				    <div class="pop_up5">
					   	<img src="web/images/BeKatib-med651x489.png"/>
					   	<h2> Katib rodados </h2>
						<p> Sito web Fabricación de rodados para niños entre otros.. </p>
						<p class="pop_p"> WordPress template, HTML, PHP, MySql<br/>
						Link: <a target="blank" href="http://besharps.esy.es/katib-test/"> besharps.es/katib </a>
						</p>
					</div>
				</div>
				<div id="small-dialog6" class="mfp-hide">
				   <div class="pop_up6">
				   		<img src="web/images/logo.png"/>
				   	 	<h2> </h2>
					 	<p>En desarrollo...</p>
					 	<p class="pop_p"></p>
					</div>
				</div>
				<div id="small-dialog7" class="mfp-hide">
				    <div class="pop_up7">
					   	 <h2>Desarrollador</h2>
					   	 <p class="pop_p"><a href="mailto:martinmuelas@gmail.com"> <image src="web/images/gmail.png" alt="logo-gmail" class="gmail" /><br/> martinmuelas@gmail.com</a> </p> 
					</div>
				</div>
				<div id="small-dialog8" class="mfp-hide">
				    <div class="pop_up7">
					   	 <h2>Técnico Superior en Programación - UTN Haedo </h2>
					   	 <h3>Soporte Técnico Sr.</h3>
						 <p class="pop_p"><a href="mailto:rjo250882@gmail.com"> <image src="web/images/gmail.png" alt="logo-gmail" class="gmail" /> <br/> rjo250882@gmail.com</a> </p>
						 <p class="pop_p"><a href="https://www.linkedin.com/in/ramiro-oviedo-4a795619"> 
						 	<image src="web/images/linkedin.png" alt="logo-linkedin" class="linkedin" /><br/> www.linkedin.com </a> 
						 </p>
					</div>
				</div>
				<div id="small-dialog9" class="mfp-hide">
				    <div class="pop_up7">
					   	 <h2>Técnico Superior en Programación - UTN Haedo </h2>
					   	 <h3>Técnico Electrónico </h3>
					   	 <br>
						 <p class="pop_p"><a href="mailto:gabrielsanchez.frh@gmail.com"> 
						 	<image src="web/images/gmail.png" alt="logo-gmail" class="gmail" /><br/> gabrielsanchez.frh@gmail.com</a> 
						 </p>
						 <p class="pop_p"><a href="https://www.linkedin.com/in/cÃ©sar-gabriel-sanchez-302635111">
						 	<image src="web/images/linkedin.png" alt="logo-linkedin" class="linkedin" /><br/> www.linkedin.com</a> 
						 </p>
					</div>
				</div>
				<div id="small-dialog10" class="mfp-hide">
				    <div class="pop_up7">
					   	 <h2>Técnico Superior en Programación - UTN Haedo </h2>
					   	 <h3>Tester Sr.</h3>
						 <p class="pop_p"><a href="mailto:pabloviv@gmail.com"> <image src="web/images/gmail.png" alt="logo-gmail" class="gmail" /><br/> pabloviv@gmail.com</a> </p>
						 <p class="pop_p"><a href="https://www.linkedin.com/in/pabloviv">
						 	<image src="web/images/linkedin.png" alt="logo-linkedin" class="linkedin" /><br/> www.linkedin.com</a> 
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
									<img src="web/images/BeWeather-sma350x263.png" alt="_b#weather"/>
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
						</div>																																
					</div>
				</div>
				<!--end container -->

				<script src="smartphone/js/jquery.magnific-popup.js" type="text/javascript"></script>

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
		</div>

		<!--portfolio-->

		<!--start-team-->
		<div class="team" id="team">
			<div class="wrap">
		 		<div class="heading_h">
					<h1 class="subtitulos">B# Team</h1>
				</div>	

			 	<div class="middle-grids">
					<div class="grid_1_of_4 images_1_of_4">
			 			<a class="popup-with-zoom-anim" href="#small-dialog7">
			 				<span class="rollover"> </span>
						</a>
						<img src="web/images/pic1.jpg"  alt="Image 1"/>
			 			<h3>Martín Muelas</h3>
			 			<h4>Desarrollador</h4>
			 			<p>Colabora con el diseño web y con el backend.</p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a class="popup-with-zoom-anim" href="#small-dialog8">
			 				<span class="rollover"> </span>
						</a>
						 <img src="web/images/pic2.jpg" alt="Image 2"/>
						 <h3>Ramiro Oviedo</h3>
						 <h4>Diseñador Web</h4>
						 <p>Es el encargado del diseño de todo lo relacionado con imágenes, además de ser programador. Y por supuesto es el creativo del grupo.</p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a class="popup-with-zoom-anim" href="#small-dialog9">
			 				<span class="rollover"> </span>
						</a>
						 <img src="web/images/pic3.jpg" alt="Image 3"/>
					 	<h3>Gabriel Sanchez</h3>
					 	<h4>Desarrollador</h4>
					 	<p>Responsable del desarrollo de la parte funcional de las aplicaciones web. Uno de los que tiene mayor experiencia en programación del equipo.</p>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a class="popup-with-zoom-anim" href="#small-dialog10">
			 				<span class="rollover"> </span>
						</a>
						 <img src="web/images/pic8.jpg" alt="Image 4"/>
						 <h3>Pablo Vivona</h3>
						 <h4>Agilista & QA</h4>
						 <p>Defensor del dinamismo y las metodologías ágiles de trabajo, experiencia orientada a la calidad y pruebas de los productos web.</p>
					</div>
					<div class="clear"> </div>
					<br/>
				</div>	
			</div>
		</div>
		 
		 
		 <!-- start-contact --> 
		<div class="contact" id="contact">
			<div class="wrap">
				<center><h1 class="subtitulos">Contáctenos</h1></center>
				<div class="contact-form">
					<div class="para-contact">
						<h4>Puede completar el formulario de contacto</h4>
						<p><b> Le responderemos a la brevedad.</b></p>
					</div>		

					<div class="form">
			  			<form method="POST" action="cont.php" id="form-contacto" name="form-contacto">
			  				<center> <div id="error-nombre" class="error" style="color:red;"></div> </center>
					    	<span style="color: #0099FF; font-size: 20px;" >*</span><input type="text" id="inp-nombre" name="nombre" class="textbox" placeholder="Nombre" maxlength="50" />
					    	<br/>
					    	<center> <div id="error-email" class="error" style="color:red;"></div> </center>
					    	<span style="color: #0099FF; font-size: 20px;" >*</span><input type="email" id="inp-email" class="textbox" placeholder="Email" name="email" maxlength="50" />
								<div class="clear"> </div>
							<center> <div id="error-msj" class="error" style="color:red;"></div> </center>	
			  				<div>
						    	<span style="color: #0099FF; font-size: 20px; float: left;" >*&nbsp;</span> <textarea id="inp-msj" name="mensaje" maxlength="1000" > </textarea>
						    </div> 
						    <p style="color:#0099FF ; font-size: 18px; margin-top: 10%; " ><b>(*) Campos obligatorios para enviar el formulario</b></p>

							<div class="button send_button" style="margin-right: 5%" >
								<input type="submit" value="Enviar" name="enviar" id="btn-enviar" />
							</div>
							<div class="clear"> </div>
						</form>
					</div>

					<div class="para-contact">
					 	<div class="social_2 social_3">	
				           <ul>	
						    <li class="facebook"><a href="https://www.facebook.com/profile.php?id=100011723567037"><span></span></a></li>
						    <li class="twitter"><a href="https://twitter.com/be_sharps"><span> </span></a></li>	 	
							<li class="google"><a href=""><span> </span></a></li> 
						  </ul>
			 		    </div>
			 		    <div class="get-intouch-left-address">
							<p>Ciudad Autónoma de Buenos Aires</p>
							<p>Argentina.</p>
							<p>(011) 15-6252-5277</p>
							<p><a href="mailto:info@besharps.com.ar"> infobesharps@gmail.com</a></p>
						</div>
						<div class="clear"> </div>	
					</div>

					<a class="mov-top" href="#home1"> <span> </span></a>
					<div class="clear"> </div>
				</div>
		  	</div>
		</div>

		<!-- scroll_top_btn -->
		<script type="text/javascript" src="smartphone/js/move-top.js"></script>
		<script type="text/javascript" src="smartphone/js/easing.js"></script>
	   
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
					<script type="text/javascript">swal({ title: "Â¡Gracias por su mensaje!", text: "B# Team", timer: 2000, showConfirmButton: false, type:"success", customClass:"ok" });     </script>
					<?php $_SESSION['error']="ok";	
				} 
				if($_SESSION['error'] == 1){ ?>
					<script type="text/javascript">swal({ title: "Debe agregar un nombre!!", text: "Se cerrarÃ¡ en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" });</script> 
					<?php $_SESSION['error']="ok";		
				} 
				if($_SESSION['error'] == 2){ ?>
					<script type="text/javascript">swal({title: "Error en el nombre del formulario!!", text: "Se cerrarÃ¡ en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no"});</script> 
					<?php $_SESSION['error']="ok";		
				} 
				if($_SESSION['error'] == 3){ ?>
					<script type="text/javascript">swal({ title: "Debe agregar un email!!", text: "Se cerrarÃ¡ en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" });</script> 
					<?php $_SESSION['error']="ok";		
				} 
				if($_SESSION['error'] == 4){ ?>
					<script type="text/javascript">swal({ title: "Error en la longuitud del email!!", text: "Se cerrarÃ¡ en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" });</script> 
					<?php $_SESSION['error']="ok";	
				} 
				if($_SESSION['error'] == 5){ ?>
					<script type="text/javascript">swal({title: "Error en el formato del email!!", text: "Se cerrarÃ¡ en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" });  </script> 
					<?php $_SESSION['error']="ok";		
				} 
				if($_SESSION['error'] == 6){ ?>
					<script type="text/javascript">swal({ title: "Debe agregar un mensaje!!", text: "Se cerrarÃ¡ en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" });</script> 
					<?php $_SESSION['error']="ok";	
				} 
				if($_SESSION['error'] == 7){ ?>
					<script type="text/javascript">swal({title: "Error en la longuitud del mensaje!!", text:"Se cerrarÃ¡ en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" });</script> 	
					<?php $_SESSION['error']="ok";	
				} 
				if($_SESSION['error'] == 11){ ?>
					<script type="text/javascript">swal({title:"Error al enviar su mensaje. Intente mÃ¡s tarde!!", text:"Se cerrarÃ¡ en 2 segundos.", timer: 2000, showConfirmButton: false, type:"error", customClass:"no" }); </script> 
					<?php $_SESSION['error']="ok";		
				}


			}
			
		?>

	</body>
</html>		


	