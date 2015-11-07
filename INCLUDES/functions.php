
<?php 
/*********************************************************************/
/* ESTILOS Y METADATOS */
/*********************************************************************/

function headers($keywords, $description, $title){
	$HEADER = '
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="keywords" content='.$keywords.'>
			<meta name="description" 	content='.$description.'>
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<!-- style for the specifict elements -->
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/navbar.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<!-- FAVICON -->
			<link rel="shortcut icon" href="favicon.ico" />
			<title>'.$title.'</title>

	';
	
	return $HEADER;
}

/*********************************************************************/
/* MEU PRINCIPAL */
/*********************************************************************/

function menu($link, $href_link){
	$menu = '
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
						<a class="navbar-brand page-scroll" href="index.php">INICIO</a>
					</div>
					<!-- Contenido del navbar -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="hidden">
								<a href="portafolio.php"></a>
							</li>
							<li>
								<a class="page-scroll" href='.$href_link.'>'.$link.'</a>
							</li>
							<li>
								<a class="page-scroll" href="#contacto">CONTACTO</a>
							</li>
						</ul>
					</div>
				<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav> ';

	return $menu;

}

/*********************************************************************/
/* FOOTER */
/*********************************************************************/

function footer(){
	$FOOTER = '<footer class="text-center footer-cp color-font" style="letter-spacing:2px;">
					<div class="col-md-6">
						<p class="lead">© 2015 Radio Católica Pereira</p>
					</div>
					<div class="col-md-6">
						<p class="lead">Desarrollado por Alexander Tamayo Pino</p>
					</div>
				</footer>';
	
	echo $FOOTER;
}

/*********************************************************************/
/* SCRIPTS*/
/*********************************************************************/

function scripts(){
	$SCRIPTS = '<script language="javascript" type="text/javascript" src="http://icecasthd.net:2199/system/recenttracks.js"></script>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
				<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
				<script src="http://api.html5media.info/1.1.6/html5media.min.js"></script>
				<script src="js/classie.js"></script>
				<script src="js/menu_about.js"></script>
				<script src="js/menu_contact.js"></script>
				<script src="js/cbpAnimatedHeader.js"></script>';
	
	echo $SCRIPTS;
}
 ?>