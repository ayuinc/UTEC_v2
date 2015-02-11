<?php global $language ?>
<?php $theme_path = drupal_get_path('theme', 'utec_theme'); ?>

<div id="header" class="hidden-xs hidden-sm"> <!-- HEADER -->
	<div class="tool-bar bg-gray-lighter pt-sm pb-sm">
		<div class="container">
			<div class="left">
				<ul class=" thin text-gray mr-ch-14 nav-list pt-7">
					<?php if ($language->language != 'en'): ?>
						<li>
							<a href="/enlaces-rapidos/estudiantes" class="atm-menu-superior text-hover-primary"><?php print t('Students') ?></a>  
						</li>
						<li>
							<a href="/enlaces-rapidos/profesores" class="atm-menu-superior text-hover-primary"><?php print t('Faculty') ?></a>
						</li>
						<li>
							<a href="/enlaces-rapidos/empresas" class="atm-menu-superior text-hover-primary"><?php print t('Companies') ?></a>
						</li>
						<li>
							<a href="/enlaces-rapidos/postulantes" class="atm-menu-superior text-hover-primary"><?php print t('Applicants') ?></a>
						</li>
					<?php elseif ($language->language == 'en'): ?>
						<li>
							<a href="/<?php print $language->language ?>/quick-links/students" class="atm-menu-superior text-hover-primary"><?php print t('Students') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->language ?>/quick-links/faculty" class="atm-menu-superior text-hover-primary"><?php print t('Faculty') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->language ?>/quick-links/companies" class="atm-menu-superior text-hover-primary"><?php print t('Companies') ?></a>
						</li>
						<li>
							<a href="/<?php print $language->language ?>/quick-links/applicants" class="atm-menu-superior text-hover-primary"><?php print t('Applicants') ?></a>
						</li>
					<?php endif ?>
				</ul>
			</div>
			<div class="right">
				<div class="inline-block pt-xs">
					<ul class="small ml-ch-7 nav-list">
						<li class="form-search">
							<?php print drupal_render(drupal_get_form('search_form')); ?>
						</li>
						<?php if ($language->language != 'en'): ?>
							<li class="pt-7">
								<a href="/contacto" class="text-gray atm-contacto"><?php print t('Contact us') ?></a>
							</li>
							<li class="pt-7">
								<a href="/blog" class="text-gray atm-blog">Blog</a>
							</li>
						<?php elseif ($language->language == 'en'): ?>
							<li class="pt-7">
								<a href="/en/contact-us" class="text-gray atm-contacto"><?php print t('Contact us') ?></a>
							</li>
							<li class="pt-7">
								<a href="/en/in-the-spotlight" class="text-gray atm-blog">Blog</a>
							</li>
						<?php endif ?>						
						<li>
							<?php print block_render('locale', 'language'); ?>
							<!-- <a href="/en" class="btn btn-xs btn-custom btn-gray" rel="nofollow">EN</a> -->
						</li>
						<li>
							<!-- <a href="/es" class="btn btn-xs btn-custom btn-gray" rel="nofollow">ES</a> -->
						</li>
						<li>
							<a href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=http%3A%2F%2Futec-portal.appspot.com%2F&client_id=21208237274-d8jlir9qadpcp35mksh6takkemp9hdue.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&approval_prompt=auto" target="_blank" class="btn btn-xs btn-custom btn-gray atm-login" rel="nofollow">Intranet</a>
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
					<h3 class="h1"><?php print t('Learn') ?><br><span><?php print t('About') ?></span><?php print t(' Us') ?></h3>
					<p><?php print t('The university that empowers ingenuity, innovation, and entrepreneurship.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
							<a href="/respaldo" class="atm-menu-secundario"><?php print t('A Solid Foundation') ?></a>
							<?php elseif ($language->language == 'en'): ?>
							<a href="/<?php print $language->language ?>/a-solid-foundation" class="atm-menu-secundario"><?php print t('A Solid Foundation') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
							<a href="/autoridades" class="atm-menu-secundario"><?php print t('Authorities') ?></a>
							<?php elseif ($language->language == 'en'): ?>
							<a href="/<?php print $language->language ?>/authorities" class="atm-menu-secundario"><?php print t('Authorities') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
							<a href="/profesores" class="atm-menu-secundario"><?php print t('Faculty') ?></a>
							<?php elseif ($language->language == 'en'): ?>
							<a href="/<?php print $language->language ?>/faculty" class="atm-menu-secundario"><?php print t('Faculty') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
							<a href="/ingenio-en-accion" class="atm-menu-secundario"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
							<?php elseif ($language->language == 'en'): ?>
							<a href="/<?php print $language->language ?>/ingenuity-in-action" class="atm-menu-secundario"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/metodologia-educativa" class="atm-menu-secundario"><span>Metodología</span>Educativa</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/teaching-methodology" class="atm-menu-secundario"><span><?php print t('Teaching') ?></span><?php print t('Methodology') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/noticias" class="atm-menu-secundario"><?php print t('News') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/news" class="atm-menu-secundario"><?php print t('News') ?></a>
							<?php endif ?>
						</li>						
					</ul> 
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/eventos" class="atm-menu-secundario">Eventos UTEC</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/events" class="atm-menu-secundario">UTEC Events</a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/vida-estudiantil" class="atm-menu-secundario"><span>Vida</span> Estudiantil</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/student-life" class="atm-menu-secundario"><span>Student</span> Life</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/campus-y-laboratorios" class="atm-menu-secundario"><span><?php print t('Campus and') ?></span><?php print t('Labs') ?></a>							
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/campus-and-labs" class="atm-menu-secundario"><span><?php print t('Campus and') ?></span><?php print t('Labs') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/trabaja-en-utec" class="atm-menu-secundario"><span><?php print t('Work') ?></span><?php print t('at UTEC') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/work-at-utec" class="atm-menu-secundario"><span><?php print t('Work') ?></span><?php print t('at UTEC') ?></a>
							<?php endif ?>						
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/utec-garage" class="atm-menu-secundario"><span>Utec</span> garage</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/utec-garage" class="atm-menu-secundario"><span>Utec</span> garage</a>
							<?php endif ?>													
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/calendario-academico" class="atm-menu-secundario"><span>Calendario</span> Académico</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/academic-calendar" class="atm-menu-secundario"><span>Academic</span> Calendar</a>
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
					<?php if ($language->language == 'en'): ?>
						<h3 class="h1"><?php print t('Research') ?><br><span></span> <?php print t('Experience') ?></h3>
					<?php elseif ($language->language != 'en'): ?>
						<h3 class="h1"><?php print t('Experience') ?><br><span>en </span><?php print t('Research') ?></h3>
					<?php endif ?>
					<p><?php print t('The right path to finding better solutions.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/proyectos" class="atm-menu-secundario"><?php print t('Projects') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/projects" class="atm-menu-secundario"><?php print t('Projects') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/publicaciones" class="atm-menu-secundario"><?php print t('Publications') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/publications" class="atm-menu-secundario"><?php print t('Publications') ?></a>
							<?php endif ?>						
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/empresas-y-clientes" class="atm-menu-secundario"><span><?php print t('Companies') ?></span><?php print t('and clients') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/companies" class="atm-menu-secundario"><span><?php print t('Companies') ?></span><?php print t('and clients') ?></a>
							<?php endif ?>								
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/investigacion/contacto" class="atm-menu-secundario"><?php print t('Contact us') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/research/contact" class="atm-menu-secundario"><?php print t('Contact us') ?></a>
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
					<?php if ($language->language  == 'en'): ?>
						<h3 class="h1"><?php print t('Our ') ?> <span><?php print t('Academic') ?></span><br><?php print  t('Offer') ?></h3>
					<?php elseif ($language->language != 'en'): ?>
						<h3 class="h1">Nuestra <span>Oferta</span><br>Académica</h3>
					<?php endif ?>
					<p><?php print t('With our active learning methodology, our students experience engineering from day one.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/ingenieria-industrial"  class="atm-menu-secundario">
								<span><?php print t('Engineering') ?></span><?php print t('Industrial') ?>
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/industrial-engineering"  class="atm-menu-secundario">
								<span><?php print t('Industrial') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/ingenieria-de-la-energia" class="atm-menu-secundario">
								<span>Ingeniería</span>de la Energía
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/energy-engineering" class="atm-menu-secundario">
								<span>Energy</span>Engineering
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/ingenieria-quimica-industrial" class="atm-menu-secundario">
								<span>Ingeniería</span>Química Industrial
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/industrial-chemical-engineering" class="atm-menu-secundario">
								<span><?php print t('Industrial Chemical') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/ingenieria-mecanica"  class="atm-menu-secundario">
								<span><?php print t('Engineering') ?></span><?php print t('Mechanical') ?>
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/mechanical-engineering"  class="atm-menu-secundario">
								<span><?php print t('Mechanical') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
							</a>
						</li>
					</ul>
					<ul>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/ingenieria-electronica"  class="atm-menu-secundario">
								<span><?php print t('Engineering') ?></span><?php print t('Electronic') ?>
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/electronic-engineering"  class="atm-menu-secundario">
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
							<?php if ($language->language  != 'en'): ?>
								<a href="/modalidades-de-admision" class="btn btn-primary btn-custom bold atm-menu-secundario"><?php print t('Apply') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/methods-of-admission" class="btn btn-primary btn-custom bold atm-menu-secundario"><?php print t('Apply') ?></a>
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
					<?php if ($language->language != 'en'): ?>
						<h3 class="h1">Ingenio<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h3>
					<?php elseif ($language->language == 'en'): ?>
						<h3 class="h1">Ingenuity,<br><span>dedication,</span> and<br><span>the pursuit</span><br>of excellence</h3>
					<?php endif ?>
					<p><?php print t("Our students' DNA: achieving highest academic achievement and personal development.") ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/modalidades-de-admision" class="atm-menu-secundario">
								<span>Modalidades</span>de admisión
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/methods-of-admission" class="atm-menu-secundario">
								Admissions
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/charlas-informativas" class="atm-menu-secundario">
								<span>Charlas</span>informativas
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/informative-talks" class="atm-menu-secundario">
								<span>Informative</span>talks
								</a>
							<?php endif ?>
						</li>
						<li>
							
								<?php if ($language->language != 'en'): ?>
									<a href="/informacion-economica" class="atm-menu-secundario">
									<span>Información</span>económica
									</a>
								<?php elseif ($language->language == 'en'): ?>
									<a href="/<?php print $language->language ?>/financial-information" class="atm-menu-secundario">
									<span>Financial</span>information
									</a>
								<?php endif ?>
							</a>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/modalidades-de-admision" class="btn btn-primary btn-custom bold atm-menu-secundario"><?php print t('Apply') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/methods-of-admission" class="btn btn-primary btn-custom bold atm-menu-secundario"><?php print t('Apply') ?></a>
							<?php endif ?>
						</li>
					</ul>
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/calendario-de-admision" class="atm-menu-secundario">
								<span>Calendario de</span>Admisión</a>
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/admissions-calendar" class="atm-menu-secundario">
								<span>Admissions</span>Calendar
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/visita-utec" class="atm-menu-secundario"><span><?php print t('Visit') ?></span>UTEC</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/visit-utec" class="atm-menu-secundario"><span><?php print t('Visit') ?></span>UTEC</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/orientacion-vocacional" class="atm-menu-secundario">
								<span>Orientación</span>Vocacional
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/career-guidance-and-orientation" class="atm-menu-secundario">
								Guidance
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/preguntas-frecuentes" class="atm-menu-secundario">
								<span>Preguntas</span>Frecuentes
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/frequently-asked-questions" class="atm-menu-secundario">
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
					<?php if ($language->language != 'en'): ?>
						<h3 class="h1"><span>Convenios y alianzas</span><br>internacionales</h3>
						<p>Generamos conexiones con las mejores instituciones educativas del mundo.</p>
					<?php elseif ($language->language == 'en'): ?>
						<h3 class="h1"><span>International</span><br>alliances</h3>
						<p>We've built strong relationships with the best educational institutions in the world.</p>
					<?php endif ?>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/convenios-de-intercambio" class="atm-menu-secundario">
								<span>Convenios de</span>Intercambio
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/alliances" class="atm-menu-secundario">
								Alliances
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
					<?php if ($language->language == 'en'): ?>
						<h3 class="h1">School of<br><span>profesional</span><br>development</h3>
						<p>Strengthen your skills and achieve professional success.</p>
					<?php elseif ($language->language != 'en'): ?>
						<h3 class="h1">Escuela de<br><span>desarollo</span><br>profesional</h3>
						<p>Potencia tus habilidades y alcanza el éxito profesional a través de nuestros cursos.</p>
					<?php endif ?>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
							<a href="/educacion-ejecutiva" class="atm-menu-secundario"><?php print t('SPD') ?></a>
							<?php elseif ($language->language == 'en'): ?>
							<a href="/<?php print $language->language ?>/executive-education" class="atm-menu-secundario"><?php print t('SPD') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/educacion-ejecutiva/cursos-cortos" class="atm-menu-secundario">
								<span>Cursos</span>Cortos
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/executive-education/short-courses" class="atm-menu-secundario">
								<span>Short</span>Courses
								</a>
							<?php endif ?>
							</a>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/educacion-ejecutiva/diplomados" class="atm-menu-secundario">
									Diplomados
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/executive-education/diploma" class="atm-menu-secundario">
									Diploma
								</a>
							<?php endif ?>
							</a>
						</li>
						<!--<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/edp/cursos-online" class="atm-menu-secundario">
									<span>Cursos</span>Online
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/spd/online-courses" class="atm-menu-secundario">
									<span>Online</span>Courses
								</a>
							<?php endif ?>
							</a>
						</li>-->
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/educacion-ejecutiva/cursos-inhouse" class="atm-menu-secundario">
									<span>Cursos</span>Inhouse
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/executive-education/inhouse-courses" class="atm-menu-secundario">
									<span>Inhouse</span>Courses
								</a>
							<?php endif ?>
							</a>
						</li>
					</ul>
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/educacion-ejecutiva/calendario" class="atm-menu-secundario"><?php print t('Calendar') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/executive-education/calendar" class="atm-menu-secundario"><?php print t('Calendar') ?></a>
							<?php endif ?>
						</li>
						<li>
							<a href="http://escuela-edp.utec.edu.pe/" class="btn btn-primary btn-custom bold atm-menu-secundario" target="_blank"><?php print t('Contact us') ?></a>
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
					<a href="/" class="atm-logo"><img src="/<?php print $theme_path; ?>/assets/img/icon_UTEC.png" alt="Logo UTEC"></a>
				</div>
			</div>
			<div class="left hidden-xs hidden-sm">
				<ul class="nav-display-triggers">
					<li>
						<a href="#nav-shrink-display-1" class="atm-menu-principal">
							<span><?php print t('We are Utec') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-2" class="atm-menu-principal">
							<span><?php print t('Research') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-3" class="atm-menu-principal">
							<span><?php print t('Programs') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-4" class="atm-menu-principal">
							<span><?php print t('Admissions') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-5" class="atm-menu-principal">
							<span><?php print t('Alliances') ?></span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-6" class="atm-menu-principal">
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
					<h3 class="h1"><?php print t('Learn') ?><br><span><?php print t('About') ?></span><?php print t(' Us') ?></h3>
					<p><?php print t('The university that empowers ingenuity, innovation, and entrepreneurship.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
							<a href="/respaldo" class="atm-menu-secundario"><?php print t('A Solid Foundation') ?></a>
							<?php elseif ($language->language == 'en'): ?>
							<a href="/<?php print $language->language ?>/a-solid-foundation" class="atm-menu-secundario"><?php print t('A Solid Foundation') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
							<a href="/autoridades" class="atm-menu-secundario"><?php print t('Authorities') ?></a>
							<?php elseif ($language->language == 'en'): ?>
							<a href="/<?php print $language->language ?>/authorities" class="atm-menu-secundario"><?php print t('Authorities') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
							<a href="/profesores" class="atm-menu-secundario"><?php print t('Faculty') ?></a>
							<?php elseif ($language->language == 'en'): ?>
							<a href="/<?php print $language->language ?>/faculty" class="atm-menu-secundario"><?php print t('Faculty') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
							<a href="/ingenio-en-accion" class="atm-menu-secundario"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
							<?php elseif ($language->language == 'en'): ?>
							<a href="/<?php print $language->language ?>/ingenuity-in-action" class="atm-menu-secundario"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/metodologia-educativa" class="atm-menu-secundario"><span>Metodología</span>Educativa</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/teaching-methodology" class="atm-menu-secundario"><span><?php print t('Teaching') ?></span><?php print t('Methodology') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/noticias" class="atm-menu-secundario"><?php print t('News') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/news" class="atm-menu-secundario"><?php print t('News') ?></a>
							<?php endif ?>
						</li>						
					</ul> 
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/eventos" class="atm-menu-secundario">Eventos UTEC</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/events" class="atm-menu-secundario">UTEC Events</a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/vida-estudiantil" class="atm-menu-secundario"><span>Vida</span> Estudiantil</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/student-life" class="atm-menu-secundario"><span>Student</span> Life</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/campus-y-laboratorios" class="atm-menu-secundario"><span><?php print t('Campus and') ?></span><?php print t('Labs') ?></a>							
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/campus-and-labs" class="atm-menu-secundario"><span><?php print t('Campus and') ?></span><?php print t('Labs') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/trabaja-en-utec" class="atm-menu-secundario"><span><?php print t('Work') ?></span><?php print t('at UTEC') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/work-at-utec" class="atm-menu-secundario"><span><?php print t('Work') ?></span><?php print t('at UTEC') ?></a>
							<?php endif ?>						
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/utec-garage" class="atm-menu-secundario"><span>Utec</span> garage</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/utec-garage" class="atm-menu-secundario"><span>Utec</span> garage</a>
							<?php endif ?>													
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/calendario-academico" class="atm-menu-secundario"><span>Calendario</span> Académico</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/academic-calendar" class="atm-menu-secundario"><span>Academic</span> Calendar</a>
							<?php endif ?>													
						</li>						
						<li>
							<a href="http://utecventures.com/" target="_blank"  class="atm-menu-secundario"><span>Utec</span>Ventures</a>
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
					<?php if ($language->language == 'en'): ?>
						<h3 class="h1"><?php print t('Research') ?><br><span></span> <?php print t('Experience') ?></h3>
					<?php elseif ($language->language != 'en'): ?>
						<h3 class="h1"><?php print t('Experience') ?><br><span>en </span><?php print t('Research') ?></h3>
					<?php endif ?>
					<p><?php print t('The right path to finding better solutions.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/proyectos" class="atm-menu-secundario"><?php print t('Projects') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/projects" class="atm-menu-secundario"><?php print t('Projects') ?></a>
							<?php endif ?>							
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/publicaciones" class="atm-menu-secundario"><?php print t('Publications') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/publications" class="atm-menu-secundario"><?php print t('Publications') ?></a>
							<?php endif ?>						
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/empresas-y-clientes" class="atm-menu-secundario"><span><?php print t('Companies') ?></span><?php print t('and clients') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/companies" class="atm-menu-secundario"><span><?php print t('Companies') ?></span><?php print t('and clients') ?></a>
							<?php endif ?>								
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/investigacion/contacto" class="atm-menu-secundario"><?php print t('Contact us') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/research/contact" class="atm-menu-secundario"><?php print t('Contact us') ?></a>
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
					<?php if ($language->language  == 'en'): ?>
						<h3 class="h1"><?php print t('Our ') ?> <span><?php print t('Academic') ?></span><br><?php print  t('Offer') ?></h3>
					<?php elseif ($language->language != 'en'): ?>
						<h3 class="h1">Nuestras <span>Ofertas</span><br>Académicas</h3>
					<?php endif ?>
					<p><?php print t('With our active learning methodology, our students experience engineering from day one.') ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/ingenieria-industrial" class="atm-menu-secundario">
								<span><?php print t('Engineering') ?></span><?php print t('Industrial') ?>
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/industrial-engineering" class="atm-menu-secundario">
								<span><?php print t('Industrial') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/ingenieria-de-la-energia" class="atm-menu-secundario">
								<span>Ingeniería</span>de la Energía
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/energy-engineering" class="atm-menu-secundario">
								<span>Energy</span>Engineering
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/ingenieria-quimica-industrial" class="atm-menu-secundario">
								<span>Ingeniería</span>Química Industrial
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/industrial-chemical-engineering" class="atm-menu-secundario">
								<span><?php print t('Industrial Chemical') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/ingenieria-mecanica" class="atm-menu-secundario">
								<span><?php print t('Engineering') ?></span><?php print t('Mechanical') ?>
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/mechanical-engineering" class="atm-menu-secundario">
								<span><?php print t('Mechanical') ?></span><?php print t('Engineering') ?>
								</a>
							<?php endif ?>
							</a>
						</li>
					</ul>
					<ul>
						<li>
							<?php if ($language->language  != 'en'): ?>
								<a href="/ingenieria-electronica" class="atm-menu-secundario">
								<span><?php print t('Engineering') ?></span><?php print t('Electronic') ?>
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/electronic-engineering" class="atm-menu-secundario">
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
							<?php if ($language->language  != 'en'): ?>
								<a href="/modalidades-de-admision" class="btn btn-primary btn-custom bold atm-menu-secundario"><?php print t('Apply') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/methods-of-admission" class="btn btn-primary btn-custom bold atm-menu-secundario"><?php print t('Apply') ?></a>
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
					<?php if ($language->language != 'en'): ?>
						<h3 class="h1">Ingenio<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h3>
					<?php elseif ($language->language == 'en'): ?>
						<h3 class="h1">Ingenuity,<br><span>dedication,</span> and<br><span>the pursuit</span><br>of excellence</h3>
					<?php endif ?>
					<p><?php print t("Our students' DNA: achieving highest academic achievement and personal development.") ?></p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/modalidades-de-admision" class="atm-menu-secundario">
								<span>Modalidades</span>de admisión
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/methods-of-admission" class="atm-menu-secundario">
								Admissions
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/charlas-informativas" class="atm-menu-secundario">
								<span>Charlas</span>informativas
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/informative-talks" class="atm-menu-secundario">
								<span>Informative</span>talks
								</a>
							<?php endif ?>
						</li>
						<li>
							
								<?php if ($language->language != 'en'): ?>
									<a href="/informacion-economica" class="atm-menu-secundario">
									<span>Información</span>económica
									</a>
								<?php elseif ($language->language == 'en'): ?>
									<a href="/<?php print $language->language ?>/financial-information" class="atm-menu-secundario">
									<span>Financial</span>information
									</a>
								<?php endif ?>
							</a>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/modalidades-de-admision" class="btn btn-primary btn-custom bold atm-menu-secundario"><?php print t('Apply') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/methods-of-admission" class="btn btn-primary btn-custom bold atm-menu-secundario"><?php print t('Apply') ?></a>
							<?php endif ?>
						</li>
					</ul>
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/calendario-de-admision" class="atm-menu-secundario">
								<span>Calendario de</span>Admisión</a>
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/admissions-calendar" class="atm-menu-secundario">
								<span>Admissions</span>Calendar
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/visita-utec" class="atm-menu-secundario"><span><?php print t('Visit') ?></span>UTEC</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/visit-utec" class="atm-menu-secundario"><span><?php print t('Visit') ?></span>UTEC</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/orientacion-vocacional" class="atm-menu-secundario">
								<span>Orientación</span>Vocacional
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/career-guidance-and-orientation" class="atm-menu-secundario">
								Guidance
								</a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/preguntas-frecuentes" class="atm-menu-secundario">
								<span>Preguntas</span>Frecuentes
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/frequently-asked-questions" class="atm-menu-secundario">
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
					<?php if ($language->language != 'en'): ?>
						<h3 class="h1"><span>Convenios y alianzas</span><br>internacionales</h3>
						<p>Generamos conexiones con las mejores instituciones educativas del mundo.</p>
					<?php elseif ($language->language == 'en'): ?>
						<h3 class="h1"><span>International</span><br>alliances</h3>
						<p>We've built strong relationships with the best educational institutions in the world.</p>
					<?php endif ?>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/convenios-de-intercambio" class="atm-menu-secundario">
								<span>Convenios de</span>Intercambio
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/alliances" class="atm-menu-secundario">
								Alliances
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
					<?php if ($language->language == 'en'): ?>
						<h3 class="h1">School of<br><span>profesional</span><br>development</h3>
						<p>Strengthen your skills and achieve professional success.</p>
					<?php elseif ($language->language != 'en'): ?>
						<h3 class="h1">Escuela de<br><span>desarollo</span><br>profesional</h3>
						<p>Potencia tus habilidades y alcanza el éxito profesional a través de nuestros cursos.</p>
					<?php endif ?>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
							<a href="/educacion-ejecutiva" class="atm-menu-secundario"><?php print t('SPD') ?></a>
							<?php elseif ($language->language == 'en'): ?>
							<a href="/<?php print $language->language ?>/executive-education" class="atm-menu-secundario"><?php print t('SPD') ?></a>
							<?php endif ?>
						</li>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/educacion-ejecutiva/cursos-cortos" class="atm-menu-secundario">
								<span>Cursos</span>Cortos
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/executive-education/short-courses" class="atm-menu-secundario">
								<span>Short</span>Courses
								</a>
							<?php endif ?>
							</a>
						</li>
												<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/educacion-ejecutiva/diplomados" class="atm-menu-secundario">
									Diplomados
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/executive-education/diploma" class="atm-menu-secundario">
									Diploma
								</a>
							<?php endif ?>
							</a>
						</li>
						<!--<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/edp/cursos-online" class="atm-menu-secundario">
									<span>Cursos</span>Online
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/spd/online-courses" class="atm-menu-secundario">
									<span>Online</span>Courses
								</a>
							<?php endif ?>
							</a>
						</li>-->
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/educacion-ejecutiva/cursos-inhouse" class="atm-menu-secundario">
									<span>Cursos</span>Inhouse
								</a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/executive-education/inhouse-courses" class="atm-menu-secundario">
									<span>Inhouse</span> Courses
								</a>
							<?php endif ?>
							</a>
						</li>
					</ul>
					<ul>
						<li>
							<?php if ($language->language != 'en'): ?>
								<a href="/educacion-ejecutiva/calendario" class="atm-menu-secundario"><?php print t('Calendar') ?></a>
							<?php elseif ($language->language == 'en'): ?>
								<a href="/<?php print $language->language ?>/executive-education/calendar" class="atm-menu-secundario"><?php print t('Calendar') ?></a>
							<?php endif ?>
						</li>
						<li>
							<a href="http://escuela-edp.utec.edu.pe/" class="btn btn-primary btn-custom bold atm-menu-secundario" target="_blank"><?php print t('Contact us') ?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
</div> <!-- END:HEADER-ON-SCROLL -->
