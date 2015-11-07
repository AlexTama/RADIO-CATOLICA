<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- STYLE -->
	<?php
	
	require_once 'INCLUDES/functions.php';

	$keywords 		= '"Vídeo streaming, Radio Católica, Diócesis de Pereira"';
	$description 	= '"Esta es la descripción para la página de vídeo de la emisora"';
	$title			= "Transmisión de Vídeo | Diócesis de Pereira";

	echo headers($keywords, $description, $title);

	?>
	<title>Transmisión de Vídeo | Diócesis de Pereira</title>
</head>
<body>

	<!-- *************************************** -->
	<!-- FIRST SECTION -->
	<!-- menu, header and animated logo -->
	<!-- *************************************** -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<!-- MENU -->
				<?php

				include_once 'INCLUDES/functions.php';

				$enlace = "VIDEO";
				$href_link = '"#"';

				echo menu($enlace, $href_link);

				?>


			</div>
		</div>
	</section>

	<!-- *************************************** -->
	<!-- FOOTER -->
	<!-- copy right and credits by development -->
	<!-- *************************************** -->

	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<!-- FOOTER -->
				<?php 

				include_once 'INCLUDES/functions.php';

				FOOTER();

				?>
			</div>
		</div>
	</section>

	<!-- SCRIPTS -->
	<?php 

	include_once 'INCLUDES/functions.php'; 

	echo scripts();

	?>
</body>
</html>