<?php global $language ?>
<?php $theme_path = drupal_get_path('theme', 'utec_theme'); ?>

<div id="header" class="hidden-xs hidden-sm"> <!-- HEADER -->
	<div class="tool-bar bg-gray-lighter pt-sm pb-sm">
		<div class="container">
			<div class="left">
				<ul class=" thin text-gray mr-ch-14 nav-list pt-7">
					<li>
						<a href="/<?php print $language->prefix ?>/quick-links/students" class="atm-menu-superior"><?php print t('Students') ?></a>
					</li>
					<li>
						<a href="/<?php print $language->prefix ?>/enlaces-rapidos/profesores" class="atm-menu-superior"><?php print t('Faculty') ?></a>
					</li>
					<li>
						<a href="/<?php print $language->prefix ?>/enlaces-rapidos/empresas" class="atm-menu-superior"><?php print t('Companies') ?></a>
					</li>
					<li>
						<a href="/<?php print $language->prefix ?>/enlaces-rapidos/postulantes" class="atm-menu-superior"><?php print t('Applicants') ?></a>
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
							<span><?php print t('SPD') ?></span>
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
					<p><?php print t('The university that empowers ingenuity, innovation, and entrepreneurship.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->prefix == 'es'): ?>
							<a href="/<?php print $language->prefix ?>/respaldo"><?php print t('A Solid Foundation') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
							<a href="/<?php print $language->prefix ?>/governance"><?php print t('A Solid Foundation') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
							<a href="/<?php print $language->prefix ?>/autoridades"><?php print t('Authorities') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
							<a href="/<?php print $language->prefix ?>/authorities"><?php print t('Authorities') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
							<a href="/<?php print $language->prefix ?>/profesores"><?php print t('Faculty') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
							<a href="/<?php print $language->prefix ?>/faculty"><?php print t('Faculty') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
							<a href="/<?php print $language->prefix ?>/ingenio-en-accion"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
							<a href="/<?php print $language->prefix ?>/ingenuity-in-action"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/metodologia-educativa"><span>Metodología</span>Educativa</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/academic-methodology"><span><?php print t('Academic') ?></span><?php print t('Methodology') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/noticias"><?php print t('News') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/news"><?php print t('News') ?></a>
							<?php endif ?>
						</li>						
					</ul> 
					<ul>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/eventos-utec"><?php print t('Events') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/events"><?php print t('Events') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/vida-estudiantil"><span>Vida Estudiantil</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/student-life"><span>UTEC Life</span></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/campus-y-laboratorios"><span><?php print t('Campus and') ?></span><?php print t('Labs') ?></a>							
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/campus-and-labs"><span><?php print t('Campus and') ?></span><?php print t('Labs') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/trabaja-en-utec"><span><?php print t('Work') ?></span><?php print t('at UTEC') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/work-utec"><span><?php print t('Work') ?></span><?php print t('at UTEC') ?></a>
							<?php endif ?>						
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/utec-garage"><span>Utec</span> garage</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/utec-garage"><span>Utec</span> garage</a>
							<?php endif ?>													
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/calendario-academico"><span>Calendario</span> Académico</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/academic-calendar"><span>Academic</span> Calendar</a>
							<?php endif ?>													
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
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/proyectos"><?php print t('Projects') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/projects"><?php print t('Projects') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/publicaciones"><?php print t('Publications') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/publications"><?php print t('Publications') ?></a>
							<?php endif ?>						
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/empresas-y-clientes"><span><?php print t('Companies') ?></span><?php print t('and clients') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/our-clients"><span><?php print t('Companies') ?></span><?php print t('and clients') ?></a>
							<?php endif ?>								
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/investigacion/contacto"><?php print t('Contact us') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/research/contact"><?php print t('Contact us') ?></a>
							<?php endif ?>							
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
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/ingenieria-industrial">
								<span><?php print t('Engineering') ?></span><?php print t('Industrial') ?>
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/industrial-engineering">
								<span><?php print t('Industrial') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/ingenieria-de-la-energia">
								<span>Ingeniería</span>de la Energía
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/energy-engineering">
								<span>Energy</span>Engineering
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/ingenieria-quimica-industrial">
								<span>Ingeniería</span>Química Industrial
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/industrial-chemical-engineering">
								<span><?php print t('Industrial Chemical') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
						</li>
						<li>
							
								<?php if ($language->prefix == 'es'): ?>
									<a href="/<?php print $language->prefix ?>/ingenieria-mecanica">
									<span><?php print t('Engineering') ?></span><?php print t('Mechanical') ?>
									</a>
								<?php elseif ($language->prefix == 'en'): ?>
									<a href="/<?php print $language->prefix ?>/mechanical-engineering">
									<span><?php print t('Mechanical') ?></span><?php print t('Engineering') ?>
									</a>
								<?php endif ?>
							</a>
						</li>
					</ul>
					<ul>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/ingenieria-electronica">
								<span><?php print t('Engineering') ?></span><?php print t('Electronic') ?>
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/electronic-engineering">
								<span><?php print t('Electronic') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
						</li>
						<!--<li>
							<a href="/carreras/menciones">Menciones</a>
						</li>
						<li>
							<a href="/carreras/escuela-de-desarrollo"><span>Escuela de</span>Desarollo</a>
						</li>-->
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/modalidades-de-admision" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/methods-of-admission" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
							<?php endif ?>
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
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/modalidades-de-admision">
								<span>Modalidades</span>de admisión
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/methods-of-admission">
								<span>Admissions</span>
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/charlas-informativas">
								<span>Charlas</span>informativas
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/admissions-talks">
								<span>Informative</span>talks
								</a>
							<?php endif ?>
						</li>
						<li>
							
								<?php if ($language->prefix == 'es'): ?>
									<a href="/<?php print $language->prefix ?>/informacion-economica">
									<span>Información</span>económica
									</a>
								<?php elseif ($language->prefix == 'en'): ?>
									<a href="/<?php print $language->prefix ?>/financial-information">
									<span>Financial</span>information
									</a>
								<?php endif ?>
							</a>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/modalidades-de-admision" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/methods-of-admission" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
							<?php endif ?>
						</li>
					</ul>
					<ul>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/calendario-de-admision">
								<span>Calendario de</span>Admisión</a>
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/admissions-calendar">
								<span>Admissions</span>Calendar
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/visita-utec"><span><?php print t('Visit') ?></span>UTEC</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/visit-utec"><span><?php print t('Visit') ?></span>UTEC</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/orientacion-vocacional">
								<span>Orientación</span>Vocacional
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/advising-and-counseling">
								<span>Guidance</span>
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/preguntas-frecuentes">
								<span>Preguntas</span>Frecuentes
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/admissions-faq">
								<span>Frequently Asked</span>Questions
								</a>
							<?php endif ?>
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
						<p>We've built strong relationships with the best educational institutions in the world.</p>
					<?php endif ?>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/convenios-de-intercambio">
								<span>Convenios de</span>Intercambio
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/alliances/exchange">
								<span>Alliances</span>
								</a>
							<?php endif ?>							
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
						<p>Strengthen your skills and achieve professional success.</p>
					<?php elseif ($language->prefix == 'es'): ?>
						<h1>Escuela de<br><span>desarollo</span><br>profesional</h1>
						<p>Potencia tus habilidades y alcanza el éxito profesional a través de nuestros cursos.</p>
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
						<li>
							<?php if ($language->prefix == 'es'): ?>
							<a href="/<?php print $language->prefix ?>/edp/la-escuela"><?php print t('The School') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
							<a href="/<?php print $language->prefix ?>/school-of-professional-development/the-school"><?php print t('The School') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/edp/cursos-cortos">
								<span>Cursos</span>Cortos
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/school-of-professional-development/short-courses">
								<span>Short</span>Courses
								</a>
							<?php endif ?>
							</a>
						</li>
					</ul>
					<ul>
						<!--<li>
							<a href="/<?php print $language->prefix ?>/edp/cursos/cursos-adhoc"><span>Cursos</span>Adhoc</a>
						</li>-->
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/edp/calendario"><?php print t('Calendar') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/school-of-professional-development/calendar"><?php print t('Calendar') ?></a>
							<?php endif ?>
						</li>
						<li>
							<a href="http://escuela-edp.utec.edu.pe/" class="btn btn-primary btn-custom bold"><?php print t('Contact us') ?></a>
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
							<span><?php print t('Admissions') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-5">
							<span><?php print t('Alliances') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-6">
							<span><?php print t('SPD') ?></span>
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
					<p><?php print t('The university that empowers ingenuity, innovation, and entrepreneurship.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->prefix == 'es'): ?>
							<a href="/<?php print $language->prefix ?>/respaldo"><?php print t('A Solid Foundation') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
							<a href="/<?php print $language->prefix ?>/governance"><?php print t('A Solid Foundation') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
							<a href="/<?php print $language->prefix ?>/autoridades"><?php print t('Authorities') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
							<a href="/<?php print $language->prefix ?>/authorities"><?php print t('Authorities') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
							<a href="/<?php print $language->prefix ?>/profesores"><?php print t('Faculty') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
							<a href="/<?php print $language->prefix ?>/faculty"><?php print t('Faculty') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
							<a href="/<?php print $language->prefix ?>/ingenio-en-accion"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
							<a href="/<?php print $language->prefix ?>/ingenuity-in-action"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/metodologia-educativa"><span>Metodología</span>Educativa</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/academic-methodology"><span><?php print t('Academic') ?></span><?php print t('Methodology') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/noticias"><?php print t('News') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/news"><?php print t('News') ?></a>
							<?php endif ?>
						</li>						
					</ul> 
					<ul>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/eventos-utec"><?php print t('Events') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/events"><?php print t('Events') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/vida-estudiantil"><span>Vida Estudiantil</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/student-life"><span>UTEC Life</span></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/campus-y-laboratorios"><span><?php print t('Campus and') ?></span><?php print t('Labs') ?></a>							
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/campus-and-labs"><span><?php print t('Campus and') ?></span><?php print t('Labs') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/trabaja-en-utec"><span><?php print t('Work') ?></span><?php print t('at UTEC') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/work-utec"><span><?php print t('Work') ?></span><?php print t('at UTEC') ?></a>
							<?php endif ?>						
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/utec-garage"><span>Utec</span> garage</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/utec-garage"><span>Utec</span> garage</a>
							<?php endif ?>													
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/calendario-academico"><span>Calendario</span> Académico</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/academic-calendar"><span>Academic</span> Calendar</a>
							<?php endif ?>													
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
					<?php if ($language->prefix == 'en'): ?>
						<h1><?php print t('Research') ?><br><span></span> <?php print t('Experience') ?></h1>
						<p>The right path to finding better solutions.</p>
					<?php elseif ($language->prefix == 'es'): ?>
						<h1><?php print t('Experience') ?><br><span>en </span><?php print t('Research') ?></h1>
						<p>El paso decisivo para encontrar las mejores soluciones.</p>
					<?php endif ?>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/proyectos"><?php print t('Projects') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/projects"><?php print t('Projects') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/publicaciones"><?php print t('Publications') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/publications"><?php print t('Publications') ?></a>
							<?php endif ?>						
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/empresas-y-clientes"><span><?php print t('Companies') ?></span><?php print t('and clients') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/our-clients"><span><?php print t('Companies') ?></span><?php print t('and clients') ?></a>
							<?php endif ?>								
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/investigacion/contacto"><?php print t('Contact us') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>research/contact"><?php print t('Contact us') ?></a>
							<?php endif ?>							
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
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/ingenieria-industrial">
								<span><?php print t('Engineering') ?></span><?php print t('Industrial') ?>
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/industrial-engineering">
								<span><?php print t('Industrial') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/ingenieria-de-la-energia">
								<span>Ingeniería</span>de la Energía
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/energy-engineering">
								<span>Energy</span>Engineering
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/ingenieria-quimica-industrial">
								<span><?php print t('Engineering') ?></span><?php print t('Industrial Chemical') ?>
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/industrial-chemical-engineering">
								<span><?php print t('Industrial Chemical') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/ingenieria-mecanica">
								<span><?php print t('Engineering') ?></span><?php print t('Mechanical') ?>
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/mechanical-engineering">
								<span><?php print t('Mechanical') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
						</li>
					</ul>
					<ul>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/ingenieria-electronica">
								<span><?php print t('Engineering') ?></span><?php print t('Electronic') ?>
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/electronic-engineering">
								<span><?php print t('Electronic') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
						</li>
						<!--<li>
							<a href="/carreras/menciones">Menciones</a>
						</li>
						<li>
							<a href="/carreras/escuela-de-desarrollo"><span>Escuela de</span>Desarollo</a>
						</li>-->
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/modalidades-de-admision" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/methods-of-admission" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
							<?php endif ?>
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
					<?php if ($language->prefix == 'es'): ?>
						<h1>Ingenio<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h1>
					<?php elseif ($language->prefix == 'en'): ?>
						<h1>Ingenuity,<br><span>dedication,</span> and<br><span>the pursuit</span><br>of excellence</h1>
					<?php endif ?>
					<p><?php print t("Our students' DNA: achieving highest academic achievement and personal development") ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/modalidades-de-admision">
								<span>Modalidades</span>de admisión
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/methods-of-admission">
								<span>Admissions</span>
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/charlas-informativas">
								<span>Charlas</span>informativas
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/admissions-talks">
								<span>Informative</span>talks
								</a>
							<?php endif ?>
						</li>
						<li>
							
								<?php if ($language->prefix == 'es'): ?>
									<a href="/<?php print $language->prefix ?>/informacion-economica">
									<span>Información</span>económica
									</a>
								<?php elseif ($language->prefix == 'en'): ?>
									<a href="/<?php print $language->prefix ?>/financial-information">
									<span>Financial</span>information
									</a>
								<?php endif ?>
							</a>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/modalidades-de-admision" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/methods-of-admission" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
							<?php endif ?>
						</li>
					</ul>
					<ul>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/calendario-de-admision">
								<span>Calendario de</span>Admisión</a>
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/admissions-calendar">
								<span>Admissions</span>Calendar
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/visita-utec"><span><?php print t('Visit') ?></span>UTEC</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/visit-utec"><span><?php print t('Visit') ?></span>UTEC</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/orientacion-vocacional">
								<span>Orientación</span>Vocacional
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/advising-and-counseling">
								<span>Guidance</span>
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/preguntas-frecuentes">
								<span>Preguntas</span>Frecuentes
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/admissions-faq">
								<span>Frequently Asked</span>Questions
								</a>
							<?php endif ?>
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
					<?php if ($language->prefix == 'es'): ?>
						<h1><span>Convenios y alianzas</span><br>internacionales</h1>
					<?php elseif ($language->prefix == 'en'): ?>
						<h1><span>Alliances</span></h1>
					<?php endif ?>	
						<p><?php print t('We’ve built strong relationships with the best educational institutions in the world.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/convenios-de-intercambio">
								<span>Convenios de</span>Intercambio
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/alliances/exchange">
								<span>Alliances</span>
								</a>
							<?php endif ?>							
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
					<?php if ($language->prefix == 'en'): ?>
						<h1>School of<br><span>professional</span><br>development</h1>
						<p>Strengthen your skills and achieve professional success.</p>
					<?php elseif ($language->prefix == 'es'): ?>
						<h1>Escuela de<br><span>desarollo</span><br>profesional</h1>
						<p>Potencia tus habilidades y alcanza el éxito profesional a través de nuestros cursos.</p>
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
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/edp/cursos-cortos">
								<span>Cursos</span>Cortos
								</a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/school-of-professional-development/short-courses">
								<span>Short</span>Courses
								</a>
							<?php endif ?>
							</a>
						</li>
					</ul>
					<ul>
						<!--<li>
							<a href="/<?php print $language->prefix ?>/edp/cursos/cursos-adhoc"><span>Cursos</span>Adhoc</a>
						</li>-->
						<li>
							<?php if ($language->prefix == 'es'): ?>
								<a href="/<?php print $language->prefix ?>/edp/calendario"><?php print t('Calendar') ?></a>
							<?php elseif ($language->prefix == 'en'): ?>
								<a href="/<?php print $language->prefix ?>/school-of-professional-development/calendar"><?php print t('Calendar') ?></a>
							<?php endif ?>
						</li>
						<li>
							<a href="http://escuela-edp.utec.edu.pe/" class="btn btn-primary btn-custom bold"><?php print t('Contact us') ?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> <!-- END:HEADER-ON-SCROLL -->
