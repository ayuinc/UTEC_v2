<?php $theme_path = drupal_get_path('theme', 'utec_theme'); ?>

<!-- Google Tag Manager -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MHF4TM"
  height="0" width="0" style="display:none;visibility:hidden;"></iframe></noscript>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '//www.googletagmanager.com/gtm.js?id='+i+dl+'&nc='+new Date().getTime();f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MHF4TM');</script>
<!-- End Google Tag Manager -->

<div id="header" class="hidden-xs hidden-sm"> <!-- HEADER -->
	<div class="tool-bar bg-gray-lighter pt-sm pb-sm">
		<div class="container">
			<div class="left">
				<ul class=" thin text-gray mr-ch-14 nav-list pt-7">
					<li>
						<a href="/enlaces-rapidos/alumnos" class="atm-menu-superior">Alumnos</a>
					</li>
					<li>
						<a href="/enlaces-rapidos/profesores" class="atm-menu-superior">Profesores</a>
					</li>
					<li>
						<a href="/enlaces-rapidos/empresas" class="atm-menu-superior">Empresas</a>
					</li>
					<li>
						<a href="/enlaces-rapidos/postulantes" class="atm-menu-superior">Postulantes</a>
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
						<li class="pt-7">
							<a href="#" class="text-gray">Contacto</a>
						</li>
						<li class="pt-7">
							<a href="/blog" class="text-gray">Blog</a>
						</li>
						<li>
							<?php print block_render('locale', 'language'); ?>
							<!-- <a href="/en" class="btn btn-xs btn-custom btn-gray" rel="nofollow">EN</a> -->
						</li>
						<li>
							<!-- <a href="/es" class="btn btn-xs btn-custom btn-gray" rel="nofollow">ES</a> -->
						</li>
						<li>
							<a href="http://utec-portal.appspot.com" target="_blank" class="btn btn-xs btn-custom btn-gray atm-login" rel="nofollow">Intranet</a>
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
					<a href="/" class="atm-logo"><img src="/<?php print $theme_path; ?>/assets/img/logo_vertical_UTEC-2015.png" alt="Logo UTEC" width="149" height="auto"></a>
				</div>
			</div>
			<div class="left">
				<ul class="nav-display-triggers">
					<li>
						<a href="#nav-display-1" class="atm-menu-principal">
							<div><i class="icon-menu-somos-utec"></i></div>
							<span>Somos Utec</span>
						</a>
					</li>
					<li>
						<a href="#nav-display-2" class="atm-menu-principal">
							<div><i class="icon-menu-investigacion"></i></div>
							<span>Investigación</span>
						</a>
					</li>
					<li>
						<a href="#nav-display-3" class="atm-menu-principal">
							<div><i class="icon-menu-carreras"></i></div>
							<span>Carreras</span>
						</a>
					</li>
					<li>
						<a href="#nav-display-4" class="atm-menu-principal">
							<div><i class="icon-menu-admision"></i></div>
							<span>Admisión</span>
						</a>
					</li>
					<li>
						<a href="#nav-display-5" class="atm-menu-principal">
							<div><i class="icon-menu-convenios"></i></div>
							<span>Convenios</span>
						</a>
					</li>
					<li>
						<a href="#nav-display-6" class="atm-menu-principal">
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
					<p>La universidad que potencia el ingenio, la innovación y el emprendimiento</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/somos-utec/respaldo">Respaldo</a>
						</li>
						<li>
							<a href="/somos-utec/autoridades">Autoridades</a>
						</li>
						<li>
							<a href="/somos-utec/profesores">Profesores</a>
						</li>
						<li>
							<a href="/somos-utec/ingenio-en-accion"><span>Ingenio</span>en acción</a>
						</li>
						<li>
							<a href="/somos-utec/metodologia-educativa"><span>Metodología</span>Educativa</a>
						</li>
						<li>
							<a href="/somos-utec/calendario-academico"><span>Calendario</span>Académico</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="/somos-utec/noticias">Noticias</a>
						</li>
						<li>
							<a href="/somos-utec/eventos-utec">Eventos UTEC</a>
						</li>
						<li>
							<a href="/somos-utec/vida-estudiantil"><span>Vida</span>Estudiantil</a>
						</li>
						<li>
							<a href="/somos-utec/campus-y-laboratorios"><span>Campus y</span>Laboratorios</a>
						</li>
						<li>
							<a href="/somos-utec/trabaja-en-utec"><span>Trabaja</span>en UTEC</a>
						</li>
						<li>
							<a href="/somos-utec/utec-garage"><span>Utec</span>garage</a>
						</li>
						<li>
							<a href="http://utecventures.com/" target="_blank" ><span>Utec</span>Ventures</a>
						</li>
						<!--<li>
							<a href="#" class="btn btn-primary btn-custom bold">Postular</a>
						</li>-->
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
					<p>El paso decisivo para encontrar las mejores soluciones</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/investigacion/proyectos">Proyectos</a>
						</li>
						<li>
							<a href="/investigacion/publicaciones">Publicaciones</a>
						</li>
						<li>
							<a href="/investigacion/empresas-y-clientes"><span>Empresas</span>y clientes</a>
						</li>
						<li>
							<a href="/investigacion/contacto">Contacto</a>
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
					<p>Lleva a nuestros estudiantes a experimentar la ingeniería desde el día uno a través de nuestra metodología de aprendizaje activo.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/carreras/ingenieria-industrial"><span>Ingeniería</span>Industrial</a>
						</li>
						<li>
							<a href="/carreras/ingenieria-de-la-energia"><span>Ingeniería</span>De la Energía</a>
						</li>
						<li>
							<a href="/carreras/ingenieria-quimica-industrial"><span>Ingeniería</span>Química Industrial</a>
						</li>
						<li>
							<a href="/carreras/ingenieria-mecanica"><span>Ingeniería</span>Mecánica</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="/carreras/ingenieria-electronica"><span>Ingeniería</span>Electrónica</a>
						</li>
						<li>
							<a href="/carreras/menciones">Menciones</a>
						</li>
						<li>
							<a href="/carreras/escuela-de-desarrollo"><span>Escuela de</span>Desarollo</a>
						</li>
						<li>
							<a href="/admision/modalidades" class="btn btn-primary btn-custom bold">Postula</a>
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
					<h1>Ingenio<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h1>
					<p>Ese es el ADN de nuestros estudiantes: alcanzar el más alto nivel académico y desarrollo personal</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/admision/modalidades"><span>Modalidades</span>de admisión</a>
						</li>
						<li>
							<a href="/admision/charlas-informativas"><span>Charlas</span>informativas</a>
						</li>
						<li>
							<a href="/admision/informacion-economica"><span>Información</span>económica</a>
						</li>
						<li>
							<a href="/admision/modalidades" class="btn btn-primary btn-custom bold">Postula</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="/admision/inscripcion">Inscripción</a>
						</li>
						<li>
							<a href="/admision/calendario-academico"><span>Calendario</span>de admisión</a>
						</li>
						<li>
							<a href="/admision/visita-utec"><span>Visita</span>UTEC</a>
						</li>
						<li>
							<a href="/admision/orientacion-vocacional"><span>Orientación</span>Vocacional</a>
						</li>
						<li>
							<a href="/admision/preguntas-frecuentes"><span>Preguntas</span>Frecuentes</a>
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
					<h1><span>Convenios y alianzas</span><br>internacionales</h1>
					<p>Generamos conexiones con las mejores instituciones educativas del mundo</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<!--<li>
							<a href="#"><span>Proceso de</span>ampliación</a>
						</li>-->
						<li>
							<a href="/convenios/ven-a-la-utec"><span>Ven a</span>la utec</a>
						</li>
						<li>
							<a href="/convenios/convenios-de-intercambio"><span>Convenios de</span>Intercambio</a>
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
					<p>Potencia tus habilidades y alcanza el éxito profesional a través de nuestros cursos</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<!--<li><a href="/edp/cursos/diplomados">Diplomados</a></li>
						<li>
							<a href="/edp/cursos/cursos-online"><span>Cursos</span>online</a>
						</li>-->
						<li>
							<a href="/edp/cursos/cursos-cortos"><span>Cursos</span>Cortos</a>
						</li>
					</ul>
					<ul>
						<!--<li>
							<a href="/edp/cursos/cursos-adhoc"><span>Cursos</span>Adhoc</a>
						</li>-->
						<li><a href="/edp/calendario">Calendario</a></li>
						<li>
							<a href="http://escuela-edp.utec.edu.pe/" class="btn btn-primary btn-custom bold">Inscríbete</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> <!-- END:Header -->

<div id="header-on-scroll"> <!-- HEADER-ON-SCROLL -->
	<div class="nav-main">
		<div class="container">
			<div class="left">
				<div class="logo">
					<a href="#"><img src="/<?php print $theme_path; ?>/assets/img/icon_UTEC.png" alt="Logo UTEC"></a>
				</div>
			</div>
			<div class="left hidden-xs hidden-sm">
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
			<div class="right visible-xs-block visible-sm-block">
				<a href="#" class="menu-trigger icon-menu"></a>
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
					<p>La universidad que potencia el ingenio, la innovación y el emprendimiento</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/somos-utec/respaldo">Respaldo</a>
						</li>
						<li>
							<a href="/somos-utec/autoridades">Autoridades</a>
						</li>
						<li>
							<a href="/somos-utec/profesores">Profesores</a>
						</li>
						<li>
							<a href="/somos-utec/ingenio-en-accion"><span>Ingenio</span>en acción</a>
						</li>
						<li>
							<a href="/somos-utec/metodologia-educativa"><span>Metodología</span>Educativa</a>
						</li>
						<!--<li>
							<a href="#"><span>Calendario</span>Académico</a>
						</li>-->
						<li>
							<a href="/somos-utec/noticias">Noticias</a>
						</li>						
					</ul>
					<ul>
						<li>
							<a href="/somos-utec/eventos-utec">Eventos UTEC</a>
						</li>
						<li>
							<a href="/somos-utec/vida-estudiantil"><span>Vida</span>Estudiantil</a>
						</li>
						<li>
							<a href="/somos-utec/campus-y-laboratorios"><span>Campus y</span>Laboratorios</a>
						</li>
						<li>
							<a href="/somos-utec/trabaja-en-utec"><span>Trabaja</span>en UTEC</a>
						</li>
						<li>
							<a href="/somos-utec/utec-garage"><span>Utec</span>garage</a>
						</li>
						<li>
							<a href="http://utecventures.com/" target="_blank" ><span>Utec</span>Ventures</a>
						</li>
						<!--<li>
							<a href="#" class="btn btn-primary btn-custom bold">Postular</a>
						</li>-->
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
					<p>El paso decisivo para encontrar las mejores soluciones</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/investigacion/proyectos">Proyectos</a>
						</li>
						<li>
							<a href="/investigacion/publicaciones">Publicaciones</a>
						</li>
						<!--<li>
							<a href="#"><span>Empresas</span>y clientes</a>
						</li>
						<li>
							<a href="#">Proyectos</a>
						</li>
						<li>
							<a href="#">Contacto</a>
						</li>-->
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
					<p>Lleva a nuestros estudiantes a experimentar la ingeniería desde el día uno a través de nuestra metodología de aprendizaje activo.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/carreras/ingenieria-industrial"><span>Ingeniería</span>Industrial</a>
						</li>
						<li>
							<a href="/carreras/ingenieria-de-la-energia"><span>Ingeniería</span>De la Energía</a>
						</li>
						<li>
							<a href="/carreras/ingenieria-quimica-industrial"><span>Ingeniería</span>Química Industrial</a>
						</li>
						<li>
							<a href="/carreras/ingenieria-mecanica"><span>Ingeniería</span>Mecánica</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="/carreras/ingenieria-electronica"><span>Ingeniería</span>Electrónica</a>
						</li>
						<li>
							<a href="/carreras/menciones">Menciones</a>
						</li>
						<li>
							<a href="/carreras/escuela-de-desarrollo"><span>Escuela de</span>Desarollo</a>
						</li>
						<li>
							<a href="/admision/modalidades" class="btn btn-primary btn-custom bold">Postula</a>
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
					<h1>Ingenio<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h1>
					<p>Ese es el ADN de nuestros estudiantes: alcanzar el más alto nivel académico y desarrollo personal</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/admision/modalidades"><span>Modalidades</span>de admisión</a>
						</li>
						<li>
							<a href="/admision/charlas-informativas"><span>Charlas</span>informativas</a>
						</li>
						<li>
							<a href="/admision/informacion-economica"><span>Información</span>económica</a>
						</li>
						<li>
							<a href="/admision/modalidades" class="btn btn-primary btn-custom bold">Postula</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="/admision/inscripcion">Inscripción</a>
						</li>
						<li>
							<a href="/admision/calendario-academico"><span>Calendario</span>Académico</a>
						</li>
						<li>
							<a href="/admision/visita-utec"><span>Visita</span>UTEC</a>
						</li>
						<li>
							<a href="/admision/orientacion-vocacional"><span>Orientación</span>Vocacional</a>
						</li>
						<li>
							<a href="/admision/preguntas-frecuentes"><span>Preguntas</span>Frecuentes</a>
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
					<h1><span>Convenios y alianzas</span><br>internacionales</h1>
					<p>Generamos conexiones con las mejores instituciones educativas del mundo</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<!--<li>
							<a href="#"><span>Proceso de</span>ampliación</a>
						</li>-->
						<li>
							<a href="/convenios/ven-a-la-utec"><span>Ven a</span>la utec</a>
						</li>
						<li>
							<a href="/convenios/convenios-de-intercambio"><span>Convenios de</span>Intercambio</a>
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
					<p>Potencia tus habilidades y alcanza el éxito profesional a través de nuestros cursos</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<!--<li><a href="/edp/cursos/diplomados">Diplomados</a></li>
						<li>
							<a href="/edp/cursos/cursos-online"><span>Cursos</span>online</a>
						</li>-->
						<li>
							<a href="/edp/cursos/cursos-cortos"><span>Cursos</span>Cortos</a>
						</li>
					</ul> 
					<ul>
						<!--<li>
							<a href="/edp/cursos/cursos-adhoc"><span>Cursos</span>Adhoc</a>
						</li>
						<li><a href="#">Calendario</a></li>-->
						<li>
							<a href="http://escuela-edp.utec.edu.pe/" class="btn btn-primary btn-custom bold">Inscríbete</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> <!-- END:HEADER-ON-SCROLL -->
