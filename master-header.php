<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<?php
	if(!isset($pageDescription))
    $pageDescription = "Diseño web profesional, economico y de calidad en Tijuana, Baja California";
	?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Infiwork <?php if(isset($pageTitle)) { echo " - ".$pageTitle; } ?></title>
        <meta name="description" content="<?php echo $pageDescription; ?>"/>
        <meta name="viewport" content="width=device-width">
		<meta name="google-site-verification" content="9y57KUHLnrLObKERV9YpYudosrRxVcgSsj1BHvGdiW8" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/foundation.min.css"/>
		<?php if($slider){echo'<link rel="stylesheet" href="css/font-awesome.min.css"/>';}?>
		<?php if($countdown){echo'<link rel="stylesheet" href="css/jquery.countdown.css"/>';}?>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script type="text/javascript" src="js/livevalidation_standalone.compressed.js"></script>
    </head>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
	<body>
		<header id="header">
			<div class="row">
				<div class="lage-12 columns" >
					<div class="row">
						<!--<div class="large-1 columns">&nbsp;</div>-->
						<div class="large-2 columns">
							<div class="img-center"><a href="index.php"><img src="img/logoWeb.png" alt="logo-web"/></a></div>
							<p id="text-h">www.infiwork.com</p>
						</div>
						<div class="large-4 large-offset-6 columns">
							<div id="info-contacto">
								<div class="sec-info-h">
									<img class="icon" src="img/icon-phone.png" alt="icono-telefono"/>
									<p class="t4">Tel&eacute;fono</p>
								</div>
								<p class="t-header">(664) 265-23-34</p>
								<div class="sec-info-h">
									<img class="icon" src="img/icon-carta.png" alt="icono"/>
									<p class="t4">E-mail</p>
								</div>
								<p class="t-header">ventas@infiwork.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<nav class="top-bar menu">
		  <ul class="title-area">
			<!-- Title Area -->
			<li class="name">
			  <h1><a href="index.php">Inicio</a></h1>
			</li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		  </ul>
		  <section class="top-bar-section">
			<!-- Left Nav Section -->
			<ul class="left">
			  <li class="divider"></li>
			  <li ><a href="planes.php">Plan de dise&ntilde;o Web</a></li>
			  <li class="divider"></li>
			  <li><a href="contacto.php">Contacto</a></li>
			  <li class="divider"></li>
			  <li class="has-dropdown"><a href="preguntas.php">Preguntas frecuentes</a>
				<ul class="dropdown">
					<li><a href="razones.php">&#191;Para que adquirir un sitio web?</a></li>
				  <li class="has-dropdown"><a href="razones.php#eligenos">&#191;Porque elegirnos?</a>
					<ul class="dropdown">
					  <li><label>Razones</label></li>
					  <li><a href="razones.php#eligenos">Estabilidad 24hrs</a></li>
					  <li><a href="razones.php#eligenos">Compatibilidad web</a></li>
					  <li><a href="razones.php#eligenos">P&aacute;ginas din&aacute;micas</a></li>
					  <li><a href="razones.php#eligenos">Dise&ntilde;os profesionales</a></li>
					  <li><a href="razones.php#eligenos">Econ&oacute;mico</a></li>
					  <li><a href="razones.php#eligenos">Atenci&oacute;n inmediata</a></li>
					</ul>
				  </li>
				  <li class="divider"></li>
				  <li><a href="preguntas.php#web">&#191;Qu&eacute; es una p&aacute;gina web?</a></li>
				  <li><a href="preguntas.php#dominio">&#191;Qu&eacute; es un dominio?</a></li>
				  <li><a href="preguntas.php#seo">&#191; Qu&eacute; es el Posicionamiento en buscadores - SEO?</a></li>
				  <li><a href="preguntas.php#host">&#191; Qu&eacute; es un hosting?</a></li>
				  <li class="divider"></li>
				  <li><a href="#">Ver todo &rarr;</a></li>
				</ul>
			  </li>
			  <li class="divider"></li>
			</ul>
			<!-- Right Nav Section -->
			<ul class="right">
			  <li class="divider hide-for-small"></li>
			  <li class="has-dropdown"><a href="#">	Otros proyectos</a>
				<ul class="dropdown">
				  <li><label>Proximamente...</label></li>
				  <li class="divider"></li>
				</ul>
			  </li>
			  <li class="divider"></li>
			  <li class="has-form">
				<form>
				  <div class="row collapse">
					<div class="small-4 columns">
					  <a href="planes.php" class="alert button">Promoci&oacute;n</a>
					</div>
				  </div>
				</form>
			  </li>
			  <li class="divider show-for-small"></li>
			  <li class="has-form">
				<a class="button" href="contacto.php">Cont&aacute;ctanos</a>
			  </li>
			</ul>
		  </section>
		</nav>