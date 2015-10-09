<!DOCTYPE html>
<html lang="es">
<head>
	<!-- meta, scripts and css bootstrap DNS -->
	<?php include 'INCLUDES/headers.php'; ?>

	<title>Radio Católica Pereira | Diócesis de Pereira</title>
</head>
<body>

	<!-- *************************************** -->
	<!-- FIRST SECTION -->
	<!-- menu, header and animated logo -->
	<!-- *************************************** -->

	<section class="container-fluid" style="width:100%; height:100%;">
		<div class="row">
			<div class="col-md-12">
				<header>

					<!-- Menu -->
					<nav class="navbar navbar-default navbar-fixed-top" style="letter-spacing:1px;">
						<div class="container">
							<!-- icono mostrado en modo móvil-->
							<div class="navbar-header page-scroll">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand page-scroll" href="#page-top">INICIO</a>
							</div>

							<!-- Contenido del navbar -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
									<li class="hidden">
									    <a href="portafolio.php"></a>
									</li>
									<li>
									    <a class="page-scroll" href="index.php">ACERCA DE</a>
									</li>
									<li>
									    <a class="page-scroll" href="nuestra_historia.php">CONTACTO</a>
									</li>
								</ul>
							</div>
						<!-- /.navbar-collapse -->
						</div>
						<!-- /.container-fluid -->
					</nav>

					<!-- Animated logo -->
					<div class="text-center" style="margin: 10% auto;">
						<img src="img/logo_header.jpg" alt="Radio Católica Pereira" class="text-center" style="width:424px; height:475px;">

						<div class=" btn-lg" sytle="width:100px; hright:100px;">
							<a href="#">
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

	<section id="main" class="container-fluid" style="width:100%; height:100%;">
		<div class="row">
			<div class="col-md-12 text-center">
				
				<!--******************************* -->

				<div class="col-md-12">

					<!-- STREAMING RADIO PLAYER -->
					<div class="col-md-6" style="color:#ffffff;">
						<p>REPRODUCTOR DE STREAMING</p>
					</div>
					<div class="col-md-6". style="color:#ffffff;">
						<h1>Nuestra Emisora</h1>
						<p class="lead" style="color:#ffffff;">
							This is Photoshop's version of Lorem Ipsum. Proin gravida 
							nibh vel velit auctor aliquet.  Aenean sollicitudin, lorem quis bibendum auctor, 
							nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
 							vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
						</p>
					</div>					
				</div>	
			</div>

			<!--******************************* -->
			<!-- STREAMING VIDEO PLAYER -->

			<div class="col-md-12 text-center">
				<p class="lead" style="color:#ffffff;">
					REPRODUCTOR DE VÍDEO
				</p>
			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- LAST SECTION -->
	<!-- form contact, localization by map and footer -->
	<!-- *************************************** -->

	<section class="container-fluid color-front">
		<div class="row">
			<div class="col-md-12">
				
				<!-- ******************************************************************* -->
				<!-- CONTACT FORM AND INFORMATION ABOUT THIS SITE -->
				<!-- ******************************************************************* -->

				<section class="containder-fluid">
					<div class="row">

						<div class="col-md-12 contact-style">

							<!-- FOOTER -->
							<div>
								<hgroup>									
									<h1 class="text-center color-font" style="letter-spacing:5px;">Contacto</h1>
								</hgroup>

								<!--*************************************************-->
								<div class="col-md-6 color-font">

									<!-- INFORMATION -->
									<div class="col-md-offset-1 col-md-10">
										<h4 style="letter-spacing:5px;"><b>DIRECCIÓN</b></h4>
										<p class="lead" style="letter-spacing:5px;">Calle 20 # 7-40</p>

										<h4 style="letter-spacing:5px;"><b>TEL</b></h4>
										<p class="lead" style="letter-spacing:5px;">(6) 324 8484</p>
									</div>

								</div>
								
								<!--*************************************************-->
								<div class="col-md-6 color-font">

									<!-- CONTACT FORM -->
									<form action="verificar.php" method="post">
											
										<!-- *************************************** -->
										<div class="col-md-6">
											<div class="form-group">
				    							<input type="text" name="nombre" class="form-control
				    							input-style" id="exampleInputEmail1" placeholder="Nombre" required>
				  							</div>

				  							<div class="form-group">				
				    							<input type="email" name="email" class="form-control input-style" id="exampleInputEmail1" placeholder="Correo" required>
				  							</div>

				  							<div class="g-recaptcha" data-sitekey="6LcKRQ4TAAAAAJTEa41-Ic9EUL4Ow5UNsO5dwqDw"></div>

											<div style="padding-top:20px;">
				  								<button type="submit" name="enviar" class="ghost-button" style="letter-spacing: 5px;"><b>ENVIAR</b></button>
											</div>
										</div>
											
										<!-- *************************************** -->
										<div class="col-md-6">
											<div class="form-group">				
				    							<input type="text" name="asunto" class="form-control input-style" id="exampleInputEmail1" placeholder="Asunto">
				  							</div>

											<div class="form-group">
				    							<textarea class="form-control input-style" name="mensaje" id="" rows="6" placeholder="Mensaje"></textarea>
				  							</div>
										</div>						
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- ******************************************************************* -->
				<!-- MAP SECTION -->
				<!-- ******************************************************************* -->

				<section class="containder-fluid">
					<div class="row">
						<div id="gmap" class="col-md-12">
							<div id="gmap-draw">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d993.9346577470208!2d-75.6953255!3d4.8148793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e388748c4380771%3A0xd6fa8947dd7fe055!2sCatedral+de+Nuestra+Se%C3%B1ora+de+la+Pobreza!5e0!3m2!1ses!2ses!4v1441902223982" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>

						</div>
					</div>
				</section>

			</div>
		</div>
	</section>
	
	<!-- *************************************** -->
	<!-- FOOTER -->
	<!-- copy right and credits by development -->
	<!-- *************************************** -->

	<section class="container-fluid" style="width:100%;">
		<div class="row">
			<div class="col-md-12 footer-style text-center">
				<footer class="text-center footer-cp" style="letter-spacing:2px;">
					<div class="col-md-6">
						<h5>© 2015 Radio Católica Pereira</h5>
					</div>
					<div class="col-md-6">
						<h5>Desarrollado por Alexander Tamayo Pino</h5>
					</div>
				</footer>
			</div>
		</div>
	</section>


	<!-- SCRIPTS FOR ANIMATION AND MAP -->
	<?php include 'INCLUDES/scripts.php'; ?>
</body>
</html>