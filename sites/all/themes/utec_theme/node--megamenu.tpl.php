<?php global $language ?>
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
						<a href="/enlaces-rapidos/alumnos" class="atm-menu-superior"><?php print t('Students') ?></a>
					</li>
					<li>
						<a href="/enlaces-rapidos/profesores" class="atm-menu-superior"><?php print t('Faculty') ?></a>
					</li>
					<li>
						<a href="/enlaces-rapidos/empresas" class="atm-menu-superior"><?php print t('Companies') ?></a>
					</li>
					<li>
						<a href="/enlaces-rapidos/postulantes" class="atm-menu-superior"><?php print t('Applicants') ?></a>
					</li>
				</ul>
			</div>
			<div class="right">
				<div class="inline-block pt-xs">
					<ul class="small ml-ch-7 nav-list">
						<li class="form-search">
							<!-- <form action="" class="form-inline mr-14">
								<div class="form-group mb-0">
									<label for="search" class="sr-only">Buscar</label>
									<input type="search" class="input-sm form-control" width="210" placeholder="Buscar...">
									<button type="submit" class="btn btn-default btn-xs" value="S"><i class="icon-search"></i></button>
								</div>
							</form> -->
							<?php print drupal_render(drupal_get_form('search_form')); ?>
						</li>
						<li class="pt-7">
							<a href="/contacto" class="text-gray"><?php print t('Contact us') ?></a>
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
							<span><?php print t('We are Utec') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-display-2" class="atm-menu-principal">
							<div><i class="icon-menu-investigacion"></i></div>
							<span><?php print t('Research') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-display-3" class="atm-menu-principal">
							<div><i class="icon-menu-carreras"></i></div>
							<span><?php print t('Programs') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-display-4" class="atm-menu-principal">
							<div><i class="icon-menu-admision"></i></div>
							<span><?php print t('Admissions') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-display-5" class="atm-menu-principal">
							<div><i class="icon-menu-convenios"></i></div>
							<span><?php print t('Alliances') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-display-6" class="atm-menu-principal">
							<div><i class="icon-menu-edp"></i></div>
							<span><?php print t('Executive Education') ?></span>
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
					<h1><?php print t('Learn') ?><br><span><?php print t('About') ?></span><?php print t(' Us') ?></h1>
					<p><?php print t('The university that empowers ingenuity, innovation and entrepreneurship.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/respaldo"><?php print t('Backing') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/autoridades"><?php print t('Authorities') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/profesores"><?php print t('Faculty') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/ingenio-en-accion"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
						</li>
						<li>
							<?php if ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/somos-utec/metodologia-educativa"><span><?php print t('Educational') ?></span><?php print t('Methodology') ?></a>
							<?php elseif ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/somos-utec/metodologia-educativa"><span><?php print t('Methodology') ?></span><?php print t('Educational') ?></a>
							<?php endif ?>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/noticias"><?php print t('News') ?></a>
						</li>						
						<!--<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/calendario-academico"><span>Calendario</span>Académico</a>
						</li>-->
					</ul> 
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/eventos-utec"><?php print t('Utec Events') ?></a>
						</li>
						<li>
							<?php if ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/somos-utec/vida-estudiantil"><span><?php print t('Student') ?></span><?php print t('Life') ?></a>
							<?php elseif ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/somos-utec/vida-estudiantil"><span><?php print t('Life') ?></span><?php print t('Student') ?></a>
							<?php endif ?>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/campus-y-laboratorios"><span><?php print t('Campus and') ?></span><?php print t('Labs') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/trabaja-en-utec"><span><?php print t('Work') ?></span><?php print t('at UTEC') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/utec-garage"><span>Utec</span> garage</a>
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
					<?php if ($language->prefix == 'en'): ?>
						<h1><?php print t('Research') ?><br><span></span> <?php print t('Experience') ?></h1>
					<?php elseif ($language->prefix == 'es'): ?>
						<h1><?php print t('Experience') ?><br><span>en </span><?php print t('Research') ?></h1>
					<?php endif ?>
					
					<p><?php print t('The right path to finding better solutions.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/investigacion/proyectos"><?php print t('Projects') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/investigacion/publicaciones"><?php print t('Publications') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/investigacion/empresas-y-clientes"><span><?php print t('Companies') ?></span><?php print t('and clients') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/investigacion/contacto"><?php print t('Contact us') ?></a>
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
					<?php if ($language->prefix == 'en'): ?>
						<h1><?php print t('Our ') ?> <span><?php print t('Academic') ?></span><br><?php print  t('Offer') ?></h1>
					<?php elseif ($language->prefix == 'es'): ?>
						<h1><?php print t('Our ') ?> <span><?php print t('Offer') ?></span><br><?php print  t('Academic') ?></h1>
					<?php endif ?>
					<p><?php print t('With our active learning methodology, our students experience engineering from day one.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/carreras/ingenieria-industrial">
								<?php if ($language->prefix == 'en'): ?>
									<span><?php print t('Industrial') ?></span><?php print t('Engineering') ?>
								<?php elseif ($language->prefix == 'es'): ?>
									<span><?php print t('Engineering') ?></span>
									<?php print t('Industrial') ?>
								<?php endif ?>
							</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/carreras/ingenieria-de-la-energia">
								<?php if ($language->prefix == 'en'): ?>
									<span><?php print t('Energy') ?></span>
									<?php print t('Engineering') ?>
								<?php elseif ($language->prefix == 'es'): ?>
									<span><?php print t('Engineering') ?></span>
									<?php print t('Energy') ?>
								<?php endif ?>
							</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/carreras/ingenieria-quimica-industrial">
								<?php if ($language->prefix == 'en'): ?>
									<span><?php print t('Industrial Chemical') ?></span>
									<?php print t('Engineering') ?>
								<?php elseif ($language->prefix == 'es'): ?>
									<span><?php print t('Engineering') ?></span>
									<?php print t('Industrial Chemical') ?>
								<?php endif ?>
							</a>	
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/carreras/ingenieria-mecanica">
								<?php if ($language->prefix == 'en'): ?>
									<span><?php print t('Mechanical') ?></span>
									<?php print t('Engineering') ?>
								<?php elseif ($language->prefix == 'es'): ?>
									<span><?php print t('Engineering') ?></span>
									<?php print t('Mechanical') ?>
								<?php endif ?>
							</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/carreras/ingenieria-electronica">
								<?php if ($language->prefix == 'en'): ?>
									<span><?php print t('Electronic') ?></span>
									<?php print t('Engineering') ?>
								<?php elseif ($language->prefix == 'es'): ?>
									<span><?php print t('Engineering') ?></span>
									<?php print t('Electronic') ?>
								<?php endif ?>
							</a>
						</li>
						<!--<li>
							<a href="/carreras/menciones">Menciones</a>
						</li>
						<li>
							<a href="/carreras/escuela-de-desarrollo"><span>Escuela de</span>Desarollo</a>
						</li>-->
						<li>
							<a href="/<?php print $language->prefix ?>/admision/modalidades" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
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
					<?php if ($language->prefix == 'es'): ?>
						<h1>Ingenio<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h1>
					<?php elseif ($language->prefix == 'en'): ?>
						<h1>Ingenuity,<br><span>dedication,</span> and<br><span>the pursuit</span><br>of excellence</h1>
					<?php endif ?>
					<p><?php print t("Our students' DNA: achieving highest academic achievement and personal development.") ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/modalidades">
								<?php if ($language->prefix == 'es'): ?>
									<span>Modalidades</span>de admisión
								<?php elseif ($language->prefix == 'en'): ?>
									<span>Admissions</span>
								<?php endif ?>
							</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/charlas-informativas">
								<?php if ($language->prefix == 'es'): ?>
									<span>Charlas</span>informativas
								<?php elseif ($language->prefix == 'en'): ?>
									<span>Informative</span>talks
								<?php endif ?>
							</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/informacion-economica">
								<?php if ($language->prefix == 'es'): ?>
									<span>Información</span>económica
								<?php elseif ($language->prefix == 'en'): ?>
									<span>Financial</span>information
								<?php endif ?>
							</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/modalidades" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/visita-utec"><span><?php print t('Visit') ?></span>UTEC</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/orientacion-vocacional">
								<?php if ($language->prefix == 'es'): ?>
									<span>Orientación</span>Vocacional
								<?php elseif ($language->prefix == 'en'): ?>
									<span>Guidance</span>
								<?php endif ?>
							</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/preguntas-frecuentes">
								<?php if ($language->prefix == 'es'): ?>
									<span>Preguntas</span>Frecuentes
								<?php elseif ($language->prefix == 'en'): ?>
									<span>Frequently Asked</span>Questions
								<?php endif ?>
							</a>
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
					<?php if ($language->prefix == 'es'): ?>
						<h1><span>Convenios y alianzas</span><br>internacionales</h1>
						<p>Generamos conexiones con las mejores instituciones educativas del mundo.</p>
					<?php elseif ($language->prefix == 'en'): ?>
						<h1><span>International</span><br>alliances</h1>
						<p>We hold links with the best educational institutions in the world.</p>
					<?php endif ?>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<!--<li>
							<a href="#"><span>Proceso de</span>ampliación</a>
						</li>-->
						<li>
							<a href="/<?php print $language->prefix ?>/convenios/ven-a-la-utec"><span>Ven a</span>la utec</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/convenios/convenios-de-intercambio"><span>Convenios de</span>Intercambio</a>
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
					<?php if ($language->prefix == 'en'): ?>
						<h1>School of<br><span>profesional</span><br>development</h1>
						<p>Potencia tus habilidades y alcanza el éxito profesional a través de nuestros cursos.</p>
					<?php elseif ($language->prefix == 'es'): ?>
						<h1>Escuela de<br><span>desarollo</span><br>profesional</h1>
						<p>Enhance your skills and boost your career through our courses.</p>
					<?php endif ?>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<!--<li><a href="/edp/cursos/diplomados">Diplomados</a></li>
						<li>
							<a href="/edp/cursos/cursos-online"><span>Cursos</span>online</a>
						</li>-->
						<li><a href="/edp/la-escuela"><?php print t('The School') ?></a></li>
						<li>
							<?php if ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/edp/cursos/cursos-cortos"><span>Short</span>Courses</a>
							<?php elseif ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/edp/cursos/cursos-cortos"><span>Cursos</span>Cortos</a>
							<?php endif ?>
						</li>
					</ul>
					<ul>
						<!--<li>
							<a href="/<?php print $language->prefix ?>/edp/cursos/cursos-adhoc"><span>Cursos</span>Adhoc</a>
						</li>-->
						<li>
							<a href="/<?php print $language->prefix ?>/edp/calendario"><?php print t('Calendar') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/edp/inscripcion" class="btn btn-primary btn-custom bold"><?php print t('Sign up') ?></a>
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
					<a href="/"><img src="/<?php print $theme_path; ?>/assets/img/icon_UTEC.png" alt="Logo UTEC"></a>
				</div>
			</div>
			<div class="left hidden-xs hidden-sm">
				<ul class="nav-display-triggers">
					<li>
						<a href="#nav-shrink-display-1">
							<span><?php print t('We are Utec') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-2">
							<span><?php print t('Research') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-3">
							<span><?php print t('Programs') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-4">
							<span><?php print t('Admission') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-5">
							<span><?php print t('Alliances') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-6">
							<span><?php print t('Executive Education') ?></span>
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
					<h1><?php print t('Learn') ?><br><span><?php print t('About') ?></span><?php print t(' Us') ?></h1>
					<p><?php print t('The university that empowers ingenuity, innovation and entrepreneurship.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/respaldo"><?php print t('Backing') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/autoridades"><?php print t('Authorities') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/profesores"><?php print t('Faculty') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/ingenio-en-accion"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
						</li>
						<li>
							<?php if ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/somos-utec/metodologia-educativa"><span><?php print t('Educational') ?></span><?php print t('Methodology') ?></a>
							<?php elseif ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/somos-utec/metodologia-educativa"><span><?php print t('Methodology') ?></span><?php print t('Educational') ?></a>
							<?php endif ?>
						</li>
						<!--<li>
							<a href="#"><span>Calendario</span>Académico</a>
						</li>-->
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/noticias"><?php print t('News') ?></a>
						</li>						
					</ul>
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/eventos-utec"><?php print t('UTEC Events') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/vida-estudiantil"><span>Vida</span>Estudiantil</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/campus-y-laboratorios"><span>Campus y</span>Laboratorios</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/trabaja-en-utec"><span>Trabaja</span>en UTEC</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/somos-utec/utec-garage"><span>Utec</span>garage</a>
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
					<p>El paso decisivo para encontrar las mejores soluciones.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/investigacion/proyectos"><?php print t('Projects') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/investigacion/publicaciones"><?php print t('Publications') ?></a>
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
							<a href="/<?php print $language->prefix ?>/carreras/ingenieria-industrial"><span>Ingeniería</span>Industrial</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/carreras/ingenieria-de-la-energia"><span>Ingeniería</span>De la Energía</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/carreras/ingenieria-quimica-industrial"><span>Ingeniería</span>Química Industrial</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/carreras/ingenieria-mecanica"><span>Ingeniería</span>Mecánica</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/carreras/ingenieria-electronica"><span>Ingeniería</span>Electrónica</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/carreras/menciones">Menciones</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/carreras/escuela-de-desarrollo"><span>Escuela de</span>Desarollo</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/modalidades" class="btn btn-primary btn-custom bold">Postula</a>
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
					<p>Ese es el ADN de nuestros estudiantes: alcanzar el más alto nivel académico y desarrollo personal.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/modalidades"><span>Modalidades</span>de admisión</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/charlas-informativas"><span>Charlas</span>informativas</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/informacion-economica"><span>Información</span>económica</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/modalidades" class="btn btn-primary btn-custom bold">Postula</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/pre-inscripcion">Pre-Inscripción</a>
						</li>
						<!--<li>
							<a href="/<?php print $language->prefix ?>/admision/calendario-academico"><span>Calendario</span>Académico</a>
						</li>-->
						<li>
							<a href="/<?php print $language->prefix ?>/admision/visita-utec"><span>Visita</span>UTEC</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/orientacion-vocacional"><span>Orientación</span>Vocacional</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/admision/preguntas-frecuentes"><span>Preguntas</span>Frecuentes</a>
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
					<p>Generamos conexiones con las mejores instituciones educativas del mundo.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<!--<li>
							<a href="#"><span>Proceso de</span>ampliación</a>
						</li>-->
						<li>
							<a href="/<?php print $language->prefix ?>/convenios/ven-a-la-utec"><span>Ven a</span>la utec</a>
						</li>
						<li>
							<a href="/<?php print $language->prefix ?>/convenios/convenios-de-intercambio"><span>Convenios de</span>Intercambio</a>
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
					<p>Potencia tus habilidades y alcanza el éxito profesional a través de nuestros cursos.</p>
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
							<?php if ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/edp/cursos/cursos-cortos"><span>Short</span>Courses</a>
							<?php elseif ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/edp/cursos/cursos-cortos"><span>Cursos</span>Cortos</a>
							<?php endif ?>
						</li>
					</ul> 
					<ul>
						<!--<li>
							<a href="/edp/cursos/cursos-adhoc"><span>Cursos</span>Adhoc</a>
						</li>
						<li><a href="#">Calendario</a></li>-->
						<li>
							<a href="http://escuela-edp.utec.edu.pe/" class="btn btn-primary btn-custom bold"><?php print t('Sign up') ?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> <!-- END:HEADER-ON-SCROLL -->
