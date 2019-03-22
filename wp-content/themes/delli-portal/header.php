<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
	<head>
	    <meta <?php bloginfo('charset'); ?> >
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="<?php bloginfo('description'); ?>">
	    <meta name="author" content="Thudium Design">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <?php wp_head(); ?>
	</head>

	<body>
		<div class="container-fluid">

		<nav id="navigation-bar" class="navbar navbar-expand-md navbar-dark fixed-top bg-yellow">
			<div class="container">
			<a class="navbar-brand navbar-brand--position" href="<?php site_url('') ?>">
				<img class="navbar-brand--margin d-none d-md-inline-block" src='<?php echo get_theme_file_uri('/images/delli_logo.png'); ?>'>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto">
					<div>
						<li class="nav-item d-md-none d-lg-inline-block">
							<a class="nav-link" href="#home">Delli Portal</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#delivery">Pe&ccedil;a em casa</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#cardapio">Card&aacute;pio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#mapa">Onde estamos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contato">Contato</a>
						</li>
						<li class="nav-item nav-social-menu d-none d-md-inline-block">
							<a href="//instagram.com/delliportal" target="_blank"><img src='<?php echo get_theme_file_uri('/images/instagram_icon_dark.png'); ?>'></a>
						</li>
						<li class="nav-item nav-text--size d-none d-md-inline-block"><img src='<?php echo get_theme_file_uri('/images/whatsapp_icon_dark.png'); ?>'> (21) 2495.6810</li>
					</div>
				</ul>
			</div>
		</div>
		</nav>