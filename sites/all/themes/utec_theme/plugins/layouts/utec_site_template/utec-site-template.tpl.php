<?php

/**
 * @file
 * This layout is designed to be the site template layout when using
 * the Panels Everywhere module.
 */
global $base_path; 
global $theme_path;
$Globals['base_path'];
?>
<!DOCTYPE html> 
<html>
<!-- ===========================================================
 ______     __  __     __  __        __     __   __     ______    
/\  __ \   /\ \_\ \   /\ \/\ \      /\ \   /\ "-.\ \   /\  ___\   
\ \  __ \  \ \____ \  \ \ \_\ \     \ \ \  \ \ \-.  \  \ \ \____  
 \ \_\ \_\  \/\_____\  \ \_____\     \ \_\  \ \_\\"\_\  \ \_____\ 
	\/_/\/_/   \/_____/   \/_____/      \/_/   \/_/ \/_/   \/_____/ 
================================================================== -->
	<head>
		<meta charset="utf-8">
		<title></title>
		<!-- Project SEO -->
		<meta name="description" content="">
		<meta name="keywords" content="" /> 
		<meta name="author" content="@MadeByGus &amp; Ayu Consulting S.A.C" />

		<!-- Responsiveness -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

		<!-- Open Graph -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="">
		<meta property="og:title" content="">
		<meta property="og:site_name" content="">
		<meta property="og:description" content="">
		<meta property="og:image" content="">

		<!-- Twitter Cards -->
		<meta name="twitter:card" content="">
		<meta name="twitter:title" content="">
		<meta name="twitter:url" content="">
		<meta name="twitter:description" content="">
		<meta name="twitter:site" content="">
		<meta name="twitter:creator" content="">
		<meta name="twitter:image" content="">

		<!-- FAVICON -->
		<link rel="shortcut icon" href="img/favicon.ico">

		<!-- Apple Mobile -->
		<meta name="apple-mobile-web-app-title" content="">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<!-- Apple icons -->
		<link rel="apple-touch-icon" sizes="156x156" href="#">
		<link rel="apple-touch-icon" sizes="128x128" href="#">
		<link rel="apple-touch-icon" sizes="76x76" href="#">
		<link rel="apple-touch-icon" href="#">

		<!-- WebFonts -->
		<script src="//use.typekit.net/fct8sgn.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

		<!-- VIDEO JS -->
    <link href="//vjs.zencdn.net/4.10/video-js.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/4.10/video.js"></script>

		<!-- APP STYLES 
			*Compress/Minify stylesheets on production
		-->
		<link rel="stylesheet" href="<?php $base_path; ?>/<?php echo $theme_path; ?>/stylesheets/main.css">
		<link rel="stylesheet" href="<?php $base_path; ?>/<?php echo $theme_path; ?>/stylesheets/ebm.css">
	</head>
	<body>
		<div class="site-wrapper">
			<div class="site-menu"></div>
			<div class="site-content">


<div class="site-wrapper">
  <div class="site-content">
				<!-- HEADER -->
				<div id="header"> 
					<div class="tool-bar bg-gray-lighter pt-sm pb-sm">
						<div class="container">
							<div class="left">
								<ul class=" thin text-gray mr-ch-14 nav-list pt-sm">
									<li>
										<a href="#">Alumnos</a>
									</li>
									<li>
										<a href="#">Profesores</a>
									</li>
									<li>
										<a href="#">Empresas</a>
									</li>
									<li>
										<a href="#">Postulantes</a>
									</li>
								</ul>
							</div>
							<div class="right">
								<div class="inline-block pt-xs">
									<ul class="small ml-ch-7 nav-list">
										<li class="form-search">
											<form action="" class="form-inline mr-14">
												<div class="form-group mb-0">
													<label for="search" class="sr-only">Buscar</label>
													<input type="search" class="input-sm form-control" width="210" placeholder="Buscar...">
													<button type="submit" class="btn btn-default btn-xs" value="S"><i class="icon-search"></i></button>
												</div>
											</form>
										</li>
										<li class="pt-xs">
											<a href="#" class="text-gray">Contacto</a>
										</li>
										<li class="pt-xs">
											<a href="#" class="text-gray">Blog</a>
										</li>
										<li>
											<a href="#" class="btn btn-xs btn-custom btn-gray" rel="nofollow">EN</a>
										</li>
										<li>
											<a href="#" class="btn btn-xs btn-custom btn-gray" rel="nofollow">ES</a>
										</li>
										<li>
											<a href="#" class="btn btn-xs btn-custom btn-gray" rel="nofollow">Login</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-main">
						<div class="container">
							<div class="left">
								<div class="logo pv-21">
									<a href="#"><img src="<?php echo $theme_path; ?>/assets/img/logo_horizontal_UTEC.png" alt="Logo UTEC" width="135" height="auto"></a>
								</div>
							</div>
							<div class="left">
								<ul class="nav-display-triggers">
									<li>
										<a href="#nav-display-1">
											<div><i class="icon-menu-somos-utec"></i></div>
											<span>Somos Utec</span>
										</a>
									</li>
									<li>
										<a href="#nav-display-2">
											<div><i class="icon-menu-investigacion"></i></div>
											<span>Investigación</span>
										</a>
									</li>
									<li>
										<a href="#nav-display-3">
											<div><i class="icon-menu-carreras"></i></div>
											<span>Carreras</span>
										</a>
									</li>
									<li>
										<a href="#nav-display-4">
											<div><i class="icon-menu-admision"></i></div>
											<span>Admisión</span>
										</a>
									</li>
									<li>
										<a href="#nav-display-5">
											<div><i class="icon-menu-convenios"></i></div>
											<span>Convenios</span>
										</a>
									</li>
									<li>
										<a href="#nav-display-6">
											<div><i class="icon-menu-edp"></i></div>
											<span>EDP</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="nav-display" id="nav-display-1">
						<div class="container relative">
							<a href="#" class="nav-display-close">X</a>
						</div>
						<div class="container-sm">
							<div class="nav-display-left">
								<div>
									<h1>Conoce<br><span>Quiénes</span> Somos</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
								</div>
							</div>
							<div class="nav-display-right">
								<div>
									<ul>
										<li>
											<a href="#">Respaldo</a>
										</li>
										<li>
											<a href="#">Autoridades</a>
										</li>
										<li>
											<a href="#">Profesores</a>
										</li>
										<li>
											<a href="#"><span>Ingenio</span>en acción</a>
										</li>
										<li>
											<a href="#"><span>Metodología</span>Educativa</a>
										</li>
										<li>
											<a href="#"><span>Calendario</span>Académico</a>
										</li>
									</ul>
									<ul>
										<li>
											<a href="#">Noticias</a>
										</li>
										<li>
											<a href="#">Eventos</a>
										</li>
										<li>
											<a href="#"><span>Vida</span>Estudiantil</a>
										</li>
										<li>
											<a href="#"><span>Campus y</span>Laboratorios</a>
										</li>
										<li>
											<a href="#"><span>Trabaja</span>en UTEC</a>
										</li>
										<li>
											<a href="#" class="btn btn-primary btn-custom bold">Postular</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-display" id="nav-display-2">
						<div class="container relative">
							<a href="#" class="nav-display-close">X</a>
						</div>
						<div class="container-sm">
							<div class="nav-display-left">
								<div>
									<h1>Experiencia<br><span>en</span> Investigación</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
								</div>
							</div>
							<div class="nav-display-right">
								<div>
									<ul>
										<li>
											<a href="#">Publicaciones</a>
										</li>
										<li>
											<a href="#"><span>Empresas</span>y clientes</a>
										</li>
										<li>
											<a href="#">Proyectos</a>
										</li>
										<li>
											<a href="#">Contacto</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-display" id="nav-display-3">
						<div class="container relative">
							<a href="#" class="nav-display-close">X</a>
						</div>
						<div class="container-sm">
							<div class="nav-display-left">
								<div>
									<h1>Nuestra <span>oferta</span><br>Académica</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
								</div>
							</div>
							<div class="nav-display-right">
								<div>
									<ul>
										<li>
											<a href="#"><span>Ingeniería</span>Industrial</a>
										</li>
										<li>
											<a href="#"><span>Ingeniería</span>De la Energía</a>
										</li>
										<li>
											<a href="#"><span>Ingeniería</span>Química Industrial</a>
										</li>
										<li>
											<a href="#"><span>Ingeniería</span>Mecánica</a>
										</li>
									</ul>
									<ul>
										<li>
											<a href="#"><span>Ingeniería</span>Electrónica</a>
										</li>
										<li>
											<a href="#">Menciones</a>
										</li>
										<li>
											<a href="#"><span>Escuela de</span>Desarollo</a>
										</li>
										<li>
											<a href="#" class="btn btn-primary btn-custom bold">Postular</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-display" id="nav-display-4">
						<div class="container relative">
							<a href="#" class="nav-display-close">X</a>
						</div>
						<div class="container-sm">
							<div class="nav-display-left">
								<div>
									<h1>Talento<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
								</div>
							</div>
							<div class="nav-display-right">
								<div>
									<ul>
										<li>
											<a href="#"><span>Modalidades</span>de admisión</a>
										</li>
										<li>
											<a href="#"><span>Charlas</span>informativas</a>
										</li>
										<li>
											<a href="#"><span>Información</span>económica</a>
										</li>
										<li>
											<a href="#" class="btn btn-primary btn-custom bold">Postular a la pre</a>
										</li>
									</ul>
									<ul>
										<li>
											<a href="#"><span>Calendario</span>de admisión</a>
										</li>
										<li>
											<a href="#"><span>Visita</span>UTEC</a>
										</li>
										<li>
											<a href="#"><span>Orientación</span>Vocacional</a>
										</li>
										<li>
											<a href="#"><span>Preguntas</span>Frecuentes</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-display" id="nav-display-5">
						<div class="container relative">
							<a href="#" class="nav-display-close">X</a>
						</div>
						<div class="container-sm">
							<div class="nav-display-left">
								<div>
									<h1>Lorem <span>ipsum</span><br>dolor sit amet</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
								</div>
							</div>
							<div class="nav-display-right">
								<div>
									<ul>
										<li>
											<a href="#"><span>Proceso de</span>ampliación</a>
										</li>
										<li>
											<a href="#"><span>Ven a</span>la utec</a>
										</li>
										<li>
											<a href="#"><span>Convenios de</span>Intercambio</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-display" id="nav-display-6">
						<div class="container relative">
							<a href="#" class="nav-display-close">X</a>
						</div>
						<div class="container-sm">
							<div class="nav-display-left">
								<div>
									<h1>Escuela de<br><span>desarollo</span><br>profesional</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
								</div>
							</div>
							<div class="nav-display-right">
								<div>
									<ul>
										<li><a href="#">Diplomados</a></li>
										<li>
											<a href="#"><span>Cursos</span>online</a>
										</li>
										<li>
											<a href="#"><span>Cursos</span>Cortos</a>
										</li>
									</ul>
									<ul>
										<li>
											<a href="#"><span>Cursos</span>Adhoc</a>
										</li>
										<li><a href="#">Calendario</a></li>
										<li>
											<a href="http://escuela-edp.utec.edu.pe/" class="btn btn-primary btn-custom bold">Inscríbete</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div> 
				<!-- END:Header -->

				<!-- HEADER-ON-SCROLL -->
				<div id="header-on-scroll">
					<div class="nav-main">
						<div class="container">
							<div class="left">
								<div class="logo">
									<a href="#"><img src="<?php echo $theme_path; ?>/assets/img/icon_UTEC_gs.png" alt="Logo UTEC"></a>
								</div>
							</div>
							<div class="left">
								<ul class="nav-display-triggers">
									<li>
										<a href="#nav-shrink-display-1">
											<span>Somos Utec</span>
										</a>
									</li>
									<li>
										<a href="#nav-shrink-display-2">
											<span>Investigación</span>
										</a>
									</li>
									<li>
										<a href="#nav-shrink-display-3">
											<span>Carreras</span>
										</a>
									</li>
									<li>
										<a href="#nav-shrink-display-4">
											<span>Admisión</span>
										</a>
									</li>
									<li>
										<a href="#nav-shrink-display-5">
											<span>Convenios</span>
										</a>
									</li>
									<li>
										<a href="#nav-shrink-display-6">
											<span>EDP</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="nav-display" id="nav-shrink-display-1">
						<div class="container relative">
							<a href="#" class="nav-display-close">X</a>
						</div>
						<div class="container-sm">
							<div class="nav-display-left">
								<div>
									<h1>Conoce<br><span>Quiénes</span> Somos</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
								</div>
							</div>
							<div class="nav-display-right">
								<div>
									<ul>
										<li>
											<a href="#">Respaldo</a>
										</li>
										<li>
											<a href="#">Autoridades</a>
										</li>
										<li>
											<a href="#">Profesores</a>
										</li>
										<li>
											<a href="#"><span>Ingenio</span>en acción</a>
										</li>
										<li>
											<a href="#"><span>Metodología</span>Educativa</a>
										</li>
										<li>
											<a href="#"><span>Calendario</span>Académico</a>
										</li>
									</ul>
									<ul>
										<li>
											<a href="#">Noticias</a>
										</li>
										<li>
											<a href="#">Eventos</a>
										</li>
										<li>
											<a href="#"><span>Vida</span>Estudiantil</a>
										</li>
										<li>
											<a href="#"><span>Campus y</span>Laboratorios</a>
										</li>
										<li>
											<a href="#"><span>Trabaja</span>en UTEC</a>
										</li>
										<li>
											<a href="#" class="btn btn-primary btn-custom bold">Postular</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-display" id="nav-shrink-display-2">
						<div class="container relative">
							<a href="#" class="nav-display-close">X</a>
						</div>
						<div class="container-sm">
							<div class="nav-display-left">
								<div>
									<h1>Experiencia<br><span>en</span> Investigación</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
								</div>
							</div>
							<div class="nav-display-right">
								<div>
									<ul>
										<li>
											<a href="#">Publicaciones</a>
										</li>
										<li>
											<a href="#"><span>Empresas</span>y clientes</a>
										</li>
										<li>
											<a href="#">Proyectos</a>
										</li>
										<li>
											<a href="#">Contacto</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-display" id="nav-shrink-display-3">
						<div class="container relative">
							<a href="#" class="nav-display-close">X</a>
						</div>
						<div class="container-sm">
							<div class="nav-display-left">
								<div>
									<h1>Nuestra <span>oferta</span><br>Académica</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
								</div>
							</div>
							<div class="nav-display-right">
								<div>
									<ul>
										<li>
											<a href="#"><span>Ingeniería</span>Industrial</a>
										</li>
										<li>
											<a href="#"><span>Ingeniería</span>De la Energía</a>
										</li>
										<li>
											<a href="#"><span>Ingeniería</span>Química Industrial</a>
										</li>
										<li>
											<a href="#"><span>Ingeniería</span>Mecánica</a>
										</li>
									</ul>
									<ul>
										<li>
											<a href="#"><span>Ingeniería</span>Electrónica</a>
										</li>
										<li>
											<a href="#">Menciones</a>
										</li>
										<li>
											<a href="#"><span>Escuela de</span>Desarollo</a>
										</li>
										<li>
											<a href="#" class="btn btn-primary btn-custom bold">Postular</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-display" id="nav-shrink-display-4">
						<div class="container relative">
							<a href="#" class="nav-display-close">X</a>
						</div>
						<div class="container-sm">
							<div class="nav-display-left">
								<div>
									<h1>Talento<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
								</div>
							</div>
							<div class="nav-display-right">
								<div>
									<ul>
										<li>
											<a href="#"><span>Modalidades</span>de admisión</a>
										</li>
										<li>
											<a href="#"><span>Charlas</span>informativas</a>
										</li>
										<li>
											<a href="#"><span>Información</span>económica</a>
										</li>
										<li>
											<a href="#" class="btn btn-primary btn-custom bold">Postular a la pre</a>
										</li>
									</ul>
									<ul>
										<li>
											<a href="#"><span>Calendario</span>de admisión</a>
										</li>
										<li>
											<a href="#"><span>Visita</span>UTEC</a>
										</li>
										<li>
											<a href="#"><span>Orientación</span>Vocacional</a>
										</li>
										<li>
											<a href="#"><span>Preguntas</span>Frecuentes</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-display" id="nav-shrink-display-5">
						<div class="container relative">
							<a href="#" class="nav-display-close">X</a>
						</div>
						<div class="container-sm">
							<div class="nav-display-left">
								<div>
									<h1>Lorem <span>ipsum</span><br>dolor sit amet</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
								</div>
							</div>
							<div class="nav-display-right">
								<div>
									<ul>
										<li>
											<a href="#"><span>Proceso de</span>ampliación</a>
										</li>
										<li>
											<a href="#"><span>Ven a</span>la utec</a>
										</li>
										<li>
											<a href="#"><span>Convenios de</span>Intercambio</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-display" id="nav-shrink-display-6">
						<div class="container relative">
							<a href="#" class="nav-display-close">X</a>
						</div>
						<div class="container-sm">
							<div class="nav-display-left">
								<div>
									<h1>Escuela de<br><span>desarollo</span><br>profesional</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
								</div>
							</div>
							<div class="nav-display-right">
								<div>
									<ul>
										<li><a href="#">Diplomados</a></li>
										<li>
											<a href="#"><span>Cursos</span>online</a>
										</li>
										<li>
											<a href="#"><span>Cursos</span>Cortos</a>
										</li>
									</ul>
									<ul>
										<li>
											<a href="#"><span>Cursos</span>Adhoc</a>
										</li>
										<li><a href="#">Calendario</a></li>
										<li>
											<a href="http://escuela-edp.utec.edu.pe" class="btn btn-primary btn-custom bold">Inscríbete</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END:HEADER-ON-SCROLL -->
				<!-- HERO-UNIT -->
				<div class="hero-unit video-bg"> 
					<!-- <div class="bg-img-block bg-img-block-lg flex-middle" style="background-image: url(assets/img/bg-header-3.jpg);">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<h2 class="thin text-white lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit repellat dolorem alias minus accusamus.</h2>
								</div>
							</div>
						</div>
						<a class="scroll-down scroll-down-sq size lg" href="#sec-1" rel="nofollow">
							<i class="icon-arrows-down bg-primary text-white"></i>
						</a>
					</div> -->
					<video
						id="videocover"
						autoplay
						loop
	          class="video-js videocover vjs-default-skin"
	          controls
	          preload="auto">
	          <source src="assets/video/video_UTEC-pedal.webm" type='video/webm' />
	          <source src="assets/video/video_UTEC-pedal.mp4" type='video/mp4' />
	          <source src="assets/video/video_UTEC-pedal.ogg" type='video/ogg' />
	          <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	        </video>
	        <!-- <div class="video-placeholder" style="background: url(assets/img/project-bg-1.jpg) no-repeat center top;"></div> -->
	        <div class="overlay flex-middle">
	        	<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<h2 class="thin text-white lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit repellat dolorem alias minus accusamus.</h2>
								</div>
							</div>
						</div>
	        </div>
				</div>
				<!-- END:HERO-UNIT --> 
				<!-- BODY -->
				<div class="body minhp-100 pvp-7" id="sec-1"> 
					<div class="container">
						<div class="row  mv-21 ml-0">
							<h2 class="lead medium"><span class="text-gray-darker">¿Listo para</span> <span class="text-gray">cambiar el mundo?</span></h2>
							<h4 class="lead mb-42">Éstas son nuestras carreras:</h4>
							<ul class="grid-list grid-list-5 pv-70 list-carreras text-center">
								<li>
									<div onclick="goTo()">
										<div><i class="icon-ing-quimica"></i></div>
										<h2>
											<a href="#">
												<span>Ingeniería</span>
												<span>Química</span>
												<span>Industrial</span>
											</a>
										</h2>
									</div>
								</li>
								<li>
									<div onclick="goTo()">
										<div><i class="icon-ing-industrial"></i></div>
										<h2>
											<a href="carreras.html">
												<span>Ingeniería</span>
												<span>Industrial</span>
												<span></span>
											</a>
										</h2>
									</div>
								</li>
								<li>
									<div onclick="goTo()">
										<div><i class="icon-ing-energia"></i></div>
										<h2>
											<a href="#">
												<span>Ingeniería</span>
												<span>De la energía</span>
												<span></span>
											</a>
										</h2>
									</div>
								</li>
								<li>
									<div onclick="goTo()">
										<div><i class="icon-ing-electronica"></i></div>
										<h2>
											<a href="#">
												<span>Ingeniería</span>
												<span>Electrónica</span>
												<span></span>
											</a>
										</h2>
									</div>
								</li>
								<li>
									<div onclick="goTo()">
										<div><i class="icon-ing-mecanica"></i></div>
										<h2>
											<a href="#">
												<span>Ingeniería</span>
												<span>Mecánica</span>
												<span></span>
											</a>
										</h2>
									</div>
								</li>
							</ul>
						</div>
						<h1 class="lead medium mb-0"><span class="text-gray-darker">En la UTEC ingeniería es</span> <span class="text-gray">bienestar.</span></h1>
						<h4 class="lead mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
						<div class="anchor-img-grid anchor-img-grid-1 grid-block row ml-0">
	            <div class="col-sm-6">
	              <a href="#" class="anchor-1">
	                <img src="<?php echo $theme_path; ?>/assets/img/anchor-img-grid-sq.png" />
	                <div class="overlay-bg"></div>
	                <div class="overlay-content">
	                  <div>
	                    <span class="text-top mb-0">Texto superior</span>
	                    <span class="text-bottom">Texto inferior</span>
	                  </div>
	                </div>
	              </a>
	            </div>
	            <div class="col-sm-6">
	              <div class="clearfix">
	                <a href="#" class="anchor-2">
	                  <img src="<?php echo $theme_path; ?>/assets/img/anchor-img-grid-rect.png" />
	                  <div class="overlay-bg overlay-bg-rect"></div>
	                  <div class="overlay-content">
	                    <div>
	                      <span class="text-top mb-0">Texto superior</span>
	                      <span class="text-bottom">Texto inferior</span>
	                    </div>
	                  </div>
	                </a>
	              </div>
	              <div class="clearfix">
	                <div class="col-sm-6">
	                  <a href="#" class="anchor-3">
	                    <img src="<?php echo $theme_path; ?>/assets/img/anchor-img-grid-sq-1.png" />
	                    <div class="overlay-bg"></div>
	                    <div class="overlay-content">
	                      <div>
	                        <span class="text-top mb-0">Texto superior</span>
	                        <span class="text-bottom">Texto inferior</span>
	                      </div>
	                    </div>
	                  </a>
	                </div>
	                <div class="col-sm-6">
	                  <a href="#" class="anchor-4">
	                    <img src="<?php echo $theme_path; ?>/assets/img/anchor-img-grid-sq-2.png" />
	                    <div class="overlay-bg"></div>
	                    <div class="overlay-content">
	                      <div>
	                        <span class="text-top mb-0">Texto superior</span>
	                        <span class="text-bottom">Texto inferior</span>
	                      </div>
	                    </div>
	                  </a>
	                </div>
	              </div>
	            </div>          
		        </div>
		        <div class="pv-35" id="noticias">
		        	<h2 class="lead medium mb-0"><span class="text-gray-darker">Noticias: Al día con la</span> <span class="text-gray">UTEC</span></h2>
		        	<h4 class="lead mb-56 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
		        	<div class="banner row mb-14 ml-0" data-href="//link">
								<div class="col-sm-3 banner-pic" style="background-image: url(<?php echo $theme_path; ?>/assets/img/img-sq.png);">
									<div class="banner-label bg-gray-darker text-white"><span>Emprendimiento</span></div>
								</div>
								<div class="col-sm-9 banner-content">
									<div>
										<h2><a href="#">Lorem ipsum dolor sit amet.</a></h2>
										<p class="lead">Recusandae vitae, temporibus repudiandae veritatis aspernatur nisi harum explicabo possimus illo velit.</p>
									</div>
								</div>
		        	</div>
		        	<div class="banner row ml-0 mb-14" data-href="//link">
								<div class="col-sm-9 banner-content">
									<div>
										<h2><a href="#">Lorem ipsum dolor sit amet.</a></h2>
										<p class="lead">Recusandae vitae, temporibus repudiandae veritatis aspernatur nisi harum explicabo possimus illo velit.</p>
									</div>
								</div>
								<div class="col-sm-3 banner-pic" style="background-image: url(<?php echo $theme_path; ?>/assets/img/img-sq.png);">
									<div class="banner-label bg-gray-darker text-white"><span>Innovación</span></div>
								</div>
		        	</div>
		        	<div>
		        		<button class="btn btn-lg btn-primary see-more uppercase">Ver más noticias</button>
		        	</div>
		        </div>
		        <div class="pv-21">
		        	<h2 class="lead medium"><span class="text-gray-darker">Blog</span> <span class="text-gray">UTEC</span></h2>
		        	<h4 class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
		        	<div class="banner row ml-0" data-href="//link">
		        		<div class="col-sm-3 banner-pic" style="background-image: url(<?php echo $theme_path; ?>/assets/img/img-sq.png);"></div>
		        		<div class="col-sm-9 banner-content">
		        			<div>
			        			<div class="user-card user-card-round">
			        				<div class="user-pic"><img src="<?php echo $theme_path; ?>/assets/img/user.jpg" alt=""></div>
			        				<div class="user-info"><h4>Alberto Iturralde</h4><small>Ingeniero Mecánico</small></div>
			        			</div>
			        			<h2><a href="#">Lorem ipsum dolor sit amet.</a></h2>
										<p class="lead">Recusandae vitae, temporibus repudiandae veritatis aspernatur nisi harum explicabo possimus illo velit.</p>
										<div class="text-right pv-14">
											<button class="see-more btn btn-lg btn-primary uppercase">Leer más</button>
										</div>
		        			</div>
		        		</div>
		        	</div>
		        </div>
					</div>
				</div> 
				<!-- END:Body -->
				<!-- FOOTER -->
				<div class="footer"> 
					<div class="subscribe pv-7 bg-gray-darker">
						<div class="container">
							<ul class="grid-list grid-list-centered normalize-text">
								<li>
									<h3 class="thin text-white pt-7"><i class="icon-subscribe"></i> Suscríbete al newsletter</h3>
								</li>
								<li>
									<div class="form-subscribe">
										<form action="" class="form-inline mb-ch-0">
											<div class="form-group">
												<label for="subscribe_name" class="sr-only">Name</label>
												<input type="text" class="form-control" width="210" height="auto" placeholder="Nombre">
											</div>
											<div class="form-group">
												<label for="subscribe_email" class="sr-only">Email</label>
												<input type="text" class="form-control" width="210" height="auto" placeholder="E-mail">
												<button class="btn btn-outline btn-white"><i class="icon-arrows-right"></i></button>
											</div>
										</form>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="site-map pv-14 bg-gray-dark">
						<div class="container">
							<ul class="grid-list grid-list-5">
	              <li>
	                <ul>
	                  <li class="title"><a href="#">Somos Utec</a></li>
	                  <li><a href="#" class="gray-light"><span></span><span>Respaldo</span></a></li>
	                  <li><a href="#" class="gray-light"><span></span><span>Autoridades</span></a></li>
	                  <li><a href="#" class="gray-light"><span></span><span>Profesores</span></a></li>
	                  <li><a href="#" class="gray-light"><span></span><span>Noticias</span></a></li>
	                  <li><a href="#" class="gray-light"><span></span><span>Eventos</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Trabaja en</span><span>Utec</span></a></li>
	                </ul>
	              </li>
	              <li>
	                <ul>
	                  <li class="title"><a href="#">Vive Utec</a></li>
	                  <li><a href="#" class="gray-light"><span>Vida </span><span>Estudiantil</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Metodología </span><span>Educativa</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Campus &amp; </span><span>Laboratorios</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Ingenio en </span><span>Acción</span></a></li>
	                  <li><a href="#" class="gray-light"><span>UTEC </span><span>Ventures</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Blog &amp; </span><span>YouTube</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Calendario </span><span>Académico</span></a></li>
	                </ul>
	              </li>
	              <li>
	                <ul>
	                  <li class="title"><a href="#">Investigación</a></li>
	                  <li><a href="#" class="gray-light"><span></span><span>Publicaciones</span></a></li>
	                  <li><a href="#" class="gray-light"><span></span><span>Consultorías</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Empresas &amp; </span><span>Clientes</span></a></li>
	                  <li><a href="#" class="gray-light"><span></span><span>Contacto</span></a></li>
	                </ul>
	              </li>
	              <li>
	                <ul>
	                  <li class="title"><a href="#">Programas</a></li>
	                  <li><a href="#" class="gray-light"><span>Ingeniería </span><span>Química industrial</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Ingeniería </span><span>Electrónica</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Ingeniería </span><span>Mecánica</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Ingeniería </span><span>de la Energía</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Ingeniería </span><span>Industrial</span></a></li>
	                  <li><a href="#" class="gray-light"><span></span><span>Menciones</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Escuela de </span><span>Desarrollo Profesional</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Convenios de </span><span>Intercambio</span></a></li>
	                </ul>
	              </li>
	              <li>
	                <ul>
	                  <li class="title"><a href="#">Admisión</a></li>
	                  <li><a href="#" class="gray-light"><span>Modalidades de </span><span>Admisión</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Calendario de </span><span>Admisión</span></a></li>
	                  <li><a href="#" class="gray-light"><span></span><span>Presinscripción</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Información </span><span>Económica</span></a></li>
	                  <li><a href="#" class="gray-light"><span>Visita </span><span>UTEC </span></a></li>
	                  <li><a href="#" class="gray-light"><span>Orientación </span><span>Vocacional</span></a></li>
	                  <li><a href="#" class="gray-light"><span></span><span>FAQ</span></a></li>
	                </ul>
	              </li>
	            </ul> 
						</div>
					</div>
					<div class="address pv-14 bg-gray-lighter">
						<div class="container">
							<nav class="text-center ml-ch-14 te xt-gray">
								<span>Esquina de calle Medaro Silva S/N con Av. Grau y Malecon Armendariz S/N - Barranco</span>
								<span><strong>T. </strong>51 1 354-0070</span>
								<span><strong>W. </strong>www.utec.edu.pe</span>
								<span><strong>C. </strong><a href="mailto:informes@utec.edu.pe" class="text-gray-dark">informes@utec.edu.pe</a></span>
								<a href="#" class="btn btn-outline btn-xs btn-gray-dark"><i class="icon-footer-book"></i></a>
								<a href="#" class="btn btn-outline btn-xs btn-gray-dark"><i class="icon-footer-gt"></i></a>
								<a href="#" class="btn btn-outline btn-xs btn-gray-dark"><i class="icon-footer-facebook"></i></a>
								<a href="#" class="btn btn-outline btn-xs btn-gray-dark"><i class="icon-footer-twitter"></i></a>
							</nav>
						</div>
					</div>
					<div class="copyright pv-14 bg-gray-lighter text-center text-gray">
						<img src="<?php echo $theme_path; ?>/assets/img/icon_UTEC_gs.png" alt="" class="icon-utec mr-14"><span>Copyright &copy; 2014 UTEC. Todos los derechos reservados.</span>
					</div>
				</div> 
				<!-- END:Footer -->
  </div>
</div>

		<!-- VENDOR SCRIPTS -->
		<script src="<?php echo $theme_path; ?>/js/app/vendor/jquery-2.1.1.min.js"></script>
		<script src="<?php echo $theme_path; ?>/js/app/vendor/TweenMax.min.js"></script>
		<script src="<?php echo $theme_path; ?>/js/app/vendor/ScrollToPlugin.min.js"></script>
		<script src="<?php echo $theme_path; ?>/js/app/vendor/jquery.scrollmagic.min.js"></script>
		
		<!-- 
		<script src="js/app/vendor/jquery.scrollmagic.debug.js"></script>
		-->
		
		<!-- DEVELOPMENT & PRODUCTION SCRIPTS
			*Compress scripts on production
		-->
		<script src="<?php echo $theme_path; ?>/js/app/lib/nav-control.js"></script>
		<script src="<?php echo $theme_path; ?>/js/app/lib/layout-control.js"></script>
		<script src="<?php echo $theme_path; ?>/js/app/lib/scroll-control.js"></script>
		<script src="<?php echo $theme_path; ?>/js/app/lib/videojs.js"></script>
	</body>
</html>
