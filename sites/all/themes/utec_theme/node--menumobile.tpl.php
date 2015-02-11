<?php global $language ?>
<div class="mobile-nav-display-triggers"> 
  <ul>
    <li>
      <a href="#mobile-nav-display-1" class="atm-menu-principal-movil"><?php print t('We are Utec') ?></a>
    </li>
    <li>
      <a href="#mobile-nav-display-2" class="atm-menu-principal-movil"><?php print t('Research') ?></a>
    </li>
    <li>
      <a href="#mobile-nav-display-3" class="atm-menu-principal-movil"><?php print t('Programs') ?></a>
    </li>
    <li>
      <a href="#mobile-nav-display-4" class="atm-menu-principal-movil"><?php print t('Admissions') ?></a>
    </li>
    <li>
      <a href="#mobile-nav-display-5" class="atm-menu-principal-movil"><?php print t('Alliances') ?></a>
    </li>
    <li>
      <a href="#mobile-nav-display-6" class="atm-menu-principal-movil"><?php print t('Executive Education') ?></a>
    </li>
		<li>
			<?php print block_render('locale', 'language'); ?>
			<!-- <a href="/en" class="btn btn-xs btn-custom btn-gray" rel="nofollow">EN</a> -->
		</li>    
  </ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-1">
  <a class="back"><?php print t('Go Back') ?></a>
  
	<?php if ($language->language  != 'en'): ?>
		<h3 class="h1 pl-14">Conoce<br><span>Quiénes</span> Somos</h3>
	<?php elseif ($language->language == 'en'): ?>
		<h3 class="h1 pl-14">Learn<br><span>about</span> us</h3>
	<?php endif ?>  
	<ul>
		<li>
			<?php if ($language->language  != 'en'): ?>
			<a href="/respaldo" class="atm-menu-secundario-movil"><?php print t('A Solid Foundation') ?></a>
			<?php elseif ($language->language == 'en'): ?>
			<a href="/<?php print $language->language ?>/a-solid-foundation" class="atm-menu-secundario-movil"><?php print t('A Solid Foundation') ?></a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
			<a href="/autoridades" class="atm-menu-secundario-movil"><?php print t('Authorities') ?></a>
			<?php elseif ($language->language == 'en'): ?>
			<a href="/<?php print $language->language ?>/authorities" class="atm-menu-secundario-movil"><?php print t('Authorities') ?></a>
			<?php endif ?>							
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
			<a href="/profesores" class="atm-menu-secundario-movil"><?php print t('Faculty') ?></a>
			<?php elseif ($language->language == 'en'): ?>
			<a href="/<?php print $language->language ?>/faculty" class="atm-menu-secundario-movil"><?php print t('Faculty') ?></a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
			<a href="/ingenio-en-accion" class="atm-menu-secundario-movil"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
			<?php elseif ($language->language == 'en'): ?>
			<a href="/<?php print $language->language ?>/ingenuity-in-action" class="atm-menu-secundario-movil"><span><?php print t('Ingenuity') ?></span> <?php print t('in action') ?></a>
			<?php endif ?>							
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/metodologia-educativa" class="atm-menu-secundario-movil"><span>Metodología </span>Educativa</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/teaching-methodology" class="atm-menu-secundario-movil"><span>Teaching </span>Methodology</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/noticias" class="atm-menu-secundario-movil"><?php print t('News') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/news" class="atm-menu-secundario-movil"><?php print t('News') ?></a>
			<?php endif ?>
		</li>						
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/eventos-utec" class="atm-menu-secundario-movil"><?php print t('Events') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/utec-events" class="atm-menu-secundario-movil"><?php print t('Events') ?></a>
			<?php endif ?>							
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/vida-estudiantil" class="atm-menu-secundario-movil"><span>Vida Estudiantil</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/student-life" class="atm-menu-secundario-movil"><span>Student Life</span></a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/campus-y-laboratorios" class="atm-menu-secundario-movil"><span>Campus y </span>Laboratorios</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/campus-and-labs" class="atm-menu-secundario-movil"><span>Campus and </span>Labs</a>							
			<?php endif ?>							
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/trabaja-en-utec" class="atm-menu-secundario-movil"><span>Trabaja </span>en UTEC</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/work-at-utec" class="atm-menu-secundario-movil"><span>Work </span>at UTEC</a>
			<?php endif ?>						
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/utec-garage" class="atm-menu-secundario-movil"><span>Utec</span> garage</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/utec-garage" class="atm-menu-secundario-movil"><span>Utec</span> garage</a>
			<?php endif ?>													
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/calendario-academico" class="atm-menu-secundario-movil"><span>Calendario</span> Académico</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/academic-calendar" class="atm-menu-secundario-movil"><span>Academic</span> Calendar</a>
			<?php endif ?>													
		</li>						
		<li>
			<a href="http://utecventures.com/" target="_blank"  class="atm-menu-secundario-movil"><span>Utec </span>Ventures</a>
		</li>
		<!--<li>
			<a href="#" class="btn btn-primary btn-custom bold">Postular</a>
		</li>-->
	</ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-2">
  <a class="back"><?php print t('Go Back') ?></a>
	<?php if ($language->language  != 'en'): ?>
		<h3 class="h1 pl-14">Experiencia<br><span>en</span> <?php print t('Research') ?></h3>
	<?php elseif ($language->language == 'en'): ?>
		<h3 class="h1 pl-14">Research<br><span>Experience</span></h3>
	<?php endif ?>   
	<ul>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/proyectos" class="atm-menu-secundario-movil"><?php print t('Projects') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/projects" class="atm-menu-secundario-movil"><?php print t('Projects') ?></a>
			<?php endif ?>							
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/publicaciones" class="atm-menu-secundario-movil"><?php print t('Publications') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/publications" class="atm-menu-secundario-movil"><?php print t('Publications') ?></a>
			<?php endif ?>						
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/empresas-y-clientes" class="atm-menu-secundario-movil"><span><?php print t('Companies') ?></span> <?php print t('and clients') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/companies" class="atm-menu-secundario-movil"><span><?php print t('Companies') ?></span> <?php print t('and clients') ?></a>
			<?php endif ?>								
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/contacto" class="atm-menu-secundario-movil"><?php print t('Contact us') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/research/contact" class="atm-menu-secundario-movil"><?php print t('Contact us') ?></a>
			<?php endif ?>							
		</li>
	</ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-3">
  <a class="back"><?php print t('Go Back') ?></a>	
  <?php if ($language->language  != 'en'): ?>
		<h3 class="h1 pl-14">Nuestra<br><span>oferta</span><br>Académica</h3>
	<?php elseif ($language->language == 'en'): ?>
		<h3 class="h1 pl-14">Our<br><span>Academic</span><br>Offer</h3>
	<?php endif ?>   
	<ul>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/ingenieria-industrial" class="atm-menu-secundario-movil">
				<span>Ingeniería </span>Industrial
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/industrial-engineering" class="atm-menu-secundario-movil">
				<span>Industrial </span>Engineering
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/ingenieria-de-la-energia" class="atm-menu-secundario-movil">
				<span>Ingeniería </span>de la Energía
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/energy-engineering" class="atm-menu-secundario-movil">
				<span>Industrial </span>Engineering
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/ingenieria-quimica-industrial" class="atm-menu-secundario-movil">
				<span>Ingeniería </span>Química Industrial
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/industrial-chemical-engineering" class="atm-menu-secundario-movil">
				<span>Industrial Chemical </span>Engineering
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/ingenieria-mecanica" class="atm-menu-secundario-movil">
				<span>Ingeniería </span>Mecánica
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/mechanical-engineering" class="atm-menu-secundario-movil">
				<span>Mechanical </span>Engineering
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/ingenieria-electronica" class="atm-menu-secundario-movil">
				<span>Ingeniería </span>Electrónica
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/electronic-engineering" class="atm-menu-secundario-movil">
				<span>Electronic </span>Engineering
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
				<a href="/modalidades-de-admision" class="btn btn-primary btn-custom bold atm-menu-secundario-movil"><?php print t('Apply') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/methods-of-admission" class="btn btn-primary btn-custom bold atm-menu-secundario-movil"><?php print t('Apply') ?></a>
			<?php endif ?>
		</li>
	</ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-4">
  <a class="back"><?php print t('Go Back') ?></a>
  <?php if ($language->language  != 'en'): ?>
    <h3 class="h1 pl-14">Ingenio<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h3>
  <?php elseif ($language->language == 'en'): ?>
    <h3 class="h1 pl-14">Ingenuity,<br><span>dedication,</span> and<br><span>the pursuit</span><br>of excellence</h3>
  <?php endif ?>
	<ul>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/modalidades-de-admision" class="atm-menu-secundario-movil">
				<span>Modalidades </span>de admisión
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/methods-of-admission" class="atm-menu-secundario-movil">
				<span>Methods of</span> Admision
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/charlas-informativas" class="atm-menu-secundario-movil">
				<span>Charlas </span>informativas
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/informative-talks" class="atm-menu-secundario-movil"> 
				<span>Informative </span>talks
				</a>
			<?php endif ?>
		</li>
		<li>
				<?php if ($language->language  != 'en'): ?>
					<a href="/informacion-economica" class="atm-menu-secundario-movil">
					<span>Información </span>económica
					</a>
				<?php elseif ($language->language == 'en'): ?>
					<a href="/<?php print $language->language ?>/financial-information" class="atm-menu-secundario-movil">
					<span>Financial </span>information
					</a>
				<?php endif ?>
			</a>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/calendario-de-admision" class="atm-menu-secundario-movil">
				<span>Calendario de </span>Admisión</a>
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/admissions-calendar" class="atm-menu-secundario-movil">
				<span>Admissions </span>Calendar
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/visita-utec" class="atm-menu-secundario-movil"><span>Visita </span>UTEC</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/visit-utec" class="atm-menu-secundario-movil"><span>Visit </span>UTEC</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/orientacion-vocacional" class="atm-menu-secundario-movil">
				<span>Orientación </span>Vocacional
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/career-guidance-and-orientation" class="atm-menu-secundario-movil">
				<span>Guidance</span>
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/preguntas-frecuentes" class="atm-menu-secundario-movil">
				<span>Preguntas </span>Frecuentes
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/frequently-asked-questions" class="atm-menu-secundario-movil">
				<span>Frequently Asked </span>Questions
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/modalidades-de-admision" class="btn btn-primary btn-custom bold atm-menu-secundario-movil"><?php print t('Apply') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/methods-of-admission" class="btn btn-primary btn-custom bold atm-menu-secundario-movil"><?php print t('Apply') ?></a>
			<?php endif ?>
		</li>
	</ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-5">
  <a class="back"><?php print t('Go Back') ?></a>
  <?php if ($language->language  != 'en'): ?>
    <h3 class="h1 pl-14">Convenios y alianzas <br>internacionales</h3>
  <?php elseif ($language->language == 'en'): ?>
    <h3 class="h1 pl-14">International <br>alliances</h3>
  <?php endif ?>
	<ul>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/convenios-de-intercambio" class="atm-menu-secundario-movil">
				<span>Convenios de </span>Intercambio
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/alliances" class="atm-menu-secundario-movil">
				<span>Alliances</span>
				</a>
			<?php endif ?>							
		</li>
	</ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-6">
  <a class="back"><?php print t('Go Back') ?></a>
  <?php if ($language->language  != 'en'): ?>
    <h3 class="h1 pl-14">Escuela de<br><span>Educación</span><br>Ejecutiva</h3>
  <?php elseif ($language->language == 'en'): ?>
    <h3 class="h1 pl-14">School of<br><span>Executive</span><br>Education</h3>
  <?php endif ?>
	<ul>
		<!--<li><a href="/edp/cursos/diplomados">Diplomados</a></li>
		<li>
			<a href="/edp/cursos/cursos-online"><span>Cursos</span>online</a>
		</li>-->
		<li><a href="/educacion-ejecutiva"><?php print t('Executive Education') ?></a></li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/educacion-ejecutiva/cursos-cortos" class="atm-menu-secundario-movil">
				<span>Cursos </span>Cortos
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/executive-education/short-courses" class="atm-menu-secundario-movil">
				<span>Short </span>Courses
				</a>
			<?php endif ?>
			</a>
		</li>
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/educacion-ejecutiva/diplomados" class="atm-menu-secundario-movil">
				Diplomados
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/executive-education/diploma" class="atm-menu-secundario-movil">
				Diploma
				</a>
			<?php endif ?>
			</a>
		</li>		
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/educacion-ejecutiva/cursos-inhouse" class="atm-menu-secundario-movil">
				<span>Cursos </span>Inhouse
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/executive-education/inhouse-courses" class="atm-menu-secundario-movil">
				<span>Inhouse </span>Courses
				</a>
			<?php endif ?>
			</a>
		</li>				
		<li>
			<?php if ($language->language  != 'en'): ?>
				<a href="/educacion-ejecutiva/calendario"  class="atm-menu-secundario-movil"><?php print t('Calendar') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/executive-education/calendar"  class="atm-menu-secundario-movil"><?php print t('Calendar') ?></a>
			<?php endif ?>
		</li>
		<li>
			<a href="http://escuela-edp.utec.edu.pe/" class="btn btn-primary btn-custom bold atm-menu-secundario-movil"><?php print t('Contact us') ?></a>
		</li>
	</ul>
</div>