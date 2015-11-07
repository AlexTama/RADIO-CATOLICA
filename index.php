<!DOCTYPE html>
<html lang="es">
<head>
	<!-- meta, scripts and css bootstrap DNS -->
	<?php

	include_once 'INCLUDES/functions.php';

	$keywords 		= '"Vídeo streaming, Radio Católica, Diócesis de Pereira"';
	$description 	= '"Esta es la descripción para la página de vídeo de la emisora"';
	$title			= 'Transmisión de Vídeo | Diócesis de Pereira';

	echo headers($keywords, $description, $title);

	?>
	<title>Radio Católica Pereira | Diócesis de Pereira</title>
</head>
<body>

	<!-- *************************************** -->
	<!-- FIRST SECTION -->
	<!-- menu, header and animated logo -->
	<!-- *************************************** -->

	<section id="index" class="container-fluid" style="width:100%; height:100%;">
		<div class="row">
			<div class="col-md-12">
				<header>

					<!-- Menu -->
					<?php 

					include_once 'INCLUDES/functions.php'; 

					$enlace 	= "ACERCA";
					$referencia = '"#acerca"';

					echo menu($enlace, $referencia);

					?>

					<!-- Animated logo -->
					<div class="text-center logo">
						<img src="img/logo_header.jpg" alt="Radio Católica Pereira" class="img-responsive text-center animated fadeInDown delay-logo" style="width:424px; height:475px; margin:0 auto;">

						<div class=" btn-lg" sytle="width:100px; hright:100px;">
							<a href="#acerca">
								<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
							</a>
						</div>						
					</div>
				</header>
			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- SECOND SECTION -->
	<!-- streaming player fot the radio and video -->
	<!-- Description and title -->
	<!-- *************************************** -->

	<section id="acerca" class="container-fluid main" style="width:100%; height:100%;">
		<div class="row">
			<div class="col-md-12 text-center">
				
				<!--******************************* -->

				<div class="col-md-12 online">

					<!-- STREAMING RADIO PLAYER -->
					<div class="col-md-6" style="color:#ffffff;">
						<h2 class="lead subtitle-size">Transmisión en Vivo</h2>						
						
						<audio controls>
						    <source src="http://195.154.182.222:25103/;stream.mp3" type="audio/mpeg" />
						    Tu navegador no es compatible con esta característica.                        
						</audio>

						<!-- PLAYER LIST -->
						<div id="cc_recenttracks_radiocape" class="cc_recenttracks_list lead">Cargando ...</div>

					</div>
					<div class="col-md-6". style="color:#ffffff;">
						<h1 class="lead title-size">Nuestra Emisora</h1>
						<p class="lead" style="color:#ffffff;">
							This is Photoshop's version of Lorem Ipsum. Proin gravida 
							nibh vel velit auctor aliquet.  Aenean sollicitudin, lorem quis bibendum auctor, 
							nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
 							vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
						</p>
						
						<!--******************************* -->
						<!-- STREAMING VIDEO PLAYER -->
						<div class="col-md-12 text-center">
							<p class="lead" style="color:#ffffff;">
								ENLACE PARA EL REPRODUCTOR DE VÍDEO
							</p>
						</div>

					</div>					
				</div>	
			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- THIRD SECTION -->
	<!-- localization by map and footer -->
	<!-- *************************************** -->

	<section id="contacto" class="container-fluid" style="height:100%; width:100%;">
		<div class="row"
			<div class="col-md-12">

				<!-- ****************************************************************#*** -->
				<!-- MAP SECTION -->
				<!-- ******************************************************************* -->

				<div id="gmap">
					<div id="gmap-draw">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d993.9346577470208!2d-75.6953255!3d4.8148793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e388748c4380771%3A0xd6fa85947dd7fe055!2sCatedral+de+Nuestra+Se%C3%B1ora+de+la+Pobreza!5e0!3m2!1ses!2ses!4v1441902223982" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

				</div>
				
				<!-- ******************************************************************* -->
				<!-- INFORMATION ABOUT THIS SITE -->
				<!-- ******************************************************************* -->
				<div class="col-md-12 contact-style">
					<div class="col-md-6 col-md-offset-3">

					<!-- FOOTER -->
					<div>
						<hgroup>									
							<h1 class="text-center color-font lead subtitle-size" style="letter-spacing:5px;">Contacto</h1>
						</hgroup>

						<!--*************************************************-->
						<div class="col-md-6 color-font text-center">
							<h4 style="letter-spacing:5px;"><b>DIRECCIÓN</b></h4>
							<p class="lead" style="letter-spacing:5px;">Calle 20 # 7-40</p>
						</div>
								
						<!--*************************************************-->
						<div class="col-md-6 color-font text-center">
							<h4 style="letter-spacing:5px;"><b>TEL</b></h4>
							<p class="lead" style="letter-spacing:5px;">(6) 324 8484</p>
						</div>
					</div>

					</div>

					<!-- *************************************** -->
					<!-- FOOTER -->
					<!-- copy right and credits by development -->
					<!-- *************************************** -->
					<!-- FOOTER -->
				<?php 

				include_once 'INCLUDES/functions.php';

				FOOTER();

				?>
				</div>

			</div>
		</div>
	</section>
	
	<!-- SCRIPTS FOR ANIMATION AND MAP -->
	<?php 

	include_once 'INCLUDES/functions.php'; 

	echo scripts();

	?>
</body>
</html>