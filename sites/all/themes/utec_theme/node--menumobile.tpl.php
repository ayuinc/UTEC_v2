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
      <a href="#mobile-nav-display-6" class="atm-menu-principal-movil"><?php print t('SPD') ?></a>
    </li>
  </ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-1">
  <a class="back"><?php print t('Go Back') ?></a>
  <h1>Conoce<br><span>Quiénes</span> Somos</h1>
	<ul>
		<li>
			<?php if ($language->language == 'es'): ?>
			<a href="/<?php print $language->language ?>/respaldo"><?php print t('A Solid Foundation') ?></a>
			<?php elseif ($language->language == 'en'): ?>
			<a href="/<?php print $language->language ?>/a-solid-foundation"><?php print t('A Solid Foundation') ?></a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
			<a href="/<?php print $language->language ?>/autoridades"><?php print t('Authorities') ?></a>
			<?php elseif ($language->language == 'en'): ?>
			<a href="/<?php print $language->language ?>/authorities"><?php print t('Authorities') ?></a>
			<?php endif ?>							
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
			<a href="/<?php print $language->language ?>/profesores"><?php print t('Faculty') ?></a>
			<?php elseif ($language->language == 'en'): ?>
			<a href="/<?php print $language->language ?>/faculty"><?php print t('Faculty') ?></a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
			<a href="/<?php print $language->language ?>/ingenio-en-accion"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
			<?php elseif ($language->language == 'en'): ?>
			<a href="/<?php print $language->language ?>/ingenuity-in-action"><span><?php print t('Ingenuity') ?></span><?php print t('in action') ?></a>
			<?php endif ?>							
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/metodologia-educativa"><span>Metodología</span>Educativa</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/academic-methodology"><span><?php print t('Academic') ?></span><?php print t('Methodology') ?></a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/noticias"><?php print t('News') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/news"><?php print t('News') ?></a>
			<?php endif ?>
		</li>						
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/eventos-utec"><?php print t('Events') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/events"><?php print t('Events') ?></a>
			<?php endif ?>							
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/vida-estudiantil"><span>Vida Estudiantil</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/student-life"><span>UTEC Life</span></a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/campus-y-laboratorios"><span><?php print t('Campus and') ?></span><?php print t('Labs') ?></a>							
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/campus-and-labs"><span><?php print t('Campus and') ?></span><?php print t('Labs') ?></a>
			<?php endif ?>							
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/trabaja-en-utec"><span><?php print t('Work') ?></span><?php print t('at UTEC') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/work-at-utec"><span><?php print t('Work') ?></span><?php print t('at UTEC') ?></a>
			<?php endif ?>						
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/utec-garage"><span>Utec</span> garage</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/utec-garage"><span>Utec</span> garage</a>
			<?php endif ?>													
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/calendario-academico"><span>Calendario</span> Académico</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/academic-calendar"><span>Academic</span> Calendar</a>
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
<div class="mobile-nav-display" id="mobile-nav-display-2">
  <a class="back"><?php print t('Go Back') ?></a>
  <h1>Experiencia<br><span>en</span> <?php print t('Research') ?></h1>
	<ul>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/proyectos"><?php print t('Projects') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/projects"><?php print t('Projects') ?></a>
			<?php endif ?>							
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/publicaciones"><?php print t('Publications') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/publications"><?php print t('Publications') ?></a>
			<?php endif ?>						
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/empresas-y-clientes"><span><?php print t('Companies') ?></span><?php print t('and clients') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/companies"><span><?php print t('Companies') ?></span><?php print t('and clients') ?></a>
			<?php endif ?>								
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/contacto"><?php print t('Contact us') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/contact"><?php print t('Contact us') ?></a>
			<?php endif ?>							
		</li>
	</ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-3">
  <a class="back"><?php print t('Go Back') ?></a>
  <h1>Nuestra <span>oferta</span><br>Académica</h1>
	<ul>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/ingenieria-industrial">
				<span>Ingeniería</span>Industrial
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/industrial-engineering">
				<span>Industrial</span>Engineering
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/ingenieria-de-la-energia">
				<span>Ingeniería</span>de la Energía
				</a>
				<?php print t('Engineering') ?>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/energy-engineering">
				<span>Industrial</span>Engineering
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/ingenieria-quimica-industrial">
				<span>Ingeniería</span>Química Industrial
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/industrial-chemical-engineering">
				<span>Industrial Chemical</span>Engineering
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/ingenieria-mecanica">
				<span>Ingeniería</span>Mecánica
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/mechanical-engineering">
				<span>Mechanical</span>Engineering
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/ingenieria-electronica">
				<span>Ingeniería</span>Electrónica
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/electronic-engineering">
				<span>Electronic</span>Engineering
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
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/modalidades-de-admision" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/methods-of-admission" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
			<?php endif ?>
		</li>
	</ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-4">
  <a class="back"><?php print t('Go Back') ?></a>
  <?php if ($language->language == 'es'): ?>
    <h1>Ingenio<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h1>
  <?php elseif ($language->language == 'en'): ?>
    <h1>Ingenuity,<br><span>dedication,</span> and<br><span>the pursuit</span><br>of excellence</h1>
  <?php endif ?>
	<ul>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/modalidades-de-admision">
				<span>Modalidades</span>de admisión
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/methods-of-admission">
				<span>Admissions</span>
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/charlas-informativas">
				<span>Charlas</span>informativas
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/admissions-talks">
				<span>Informative</span>talks
				</a>
			<?php endif ?>
		</li>
		<li>
				<?php if ($language->language == 'es'): ?>
					<a href="/<?php print $language->language ?>/informacion-economica">
					<span>Información</span>económica
					</a>
				<?php elseif ($language->language == 'en'): ?>
					<a href="/<?php print $language->language ?>/financial-information">
					<span>Financial</span>information
					</a>
				<?php endif ?>
			</a>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/modalidades-de-admision" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/methods-of-admission" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/calendario-de-admision">
				<span>Calendario de</span>Admisión</a>
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/admissions-calendar">
				<span>Admissions</span>Calendar
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/visita-utec"><span><?php print t('Visit') ?></span>UTEC</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/visit-utec"><span><?php print t('Visit') ?></span>UTEC</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/orientacion-vocacional">
				<span>Orientación</span>Vocacional
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/advising-and-counseling">
				<span>Guidance</span>
				</a>
			<?php endif ?>
		</li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/preguntas-frecuentes">
				<span>Preguntas</span>Frecuentes
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/admissions-faq">
				<span>Frequently Asked</span>Questions
				</a>
			<?php endif ?>
		</li>
	</ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-5">
  <a class="back"><?php print t('Go Back') ?></a>
  <?php if ($language->language == 'es'): ?>
    <h1>Convenios y alianzas <br>internacionales</h1>
  <?php elseif ($language->language == 'en'): ?>
    <h1>International <br>alliances</h1>
  <?php endif ?>
	<ul>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/convenios-de-intercambio">
				<span>Convenios de</span>Intercambio
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/alliances/exchange">
				<span>Alliances</span>
				</a>
			<?php endif ?>							
		</li>
	</ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-6">
  <a class="back"><?php print t('Go Back') ?></a>
  <?php if ($language->language == 'es'): ?>
    <h1>Escuela de<br><span>desarollo</span><br>profesional</h1>
  <?php elseif ($language->language == 'en'): ?>
    <h1>School of<br><span>profesional</span><br>development</h1>
  <?php endif ?>
	<ul>
		<!--<li><a href="/edp/cursos/diplomados">Diplomados</a></li>
		<li>
			<a href="/edp/cursos/cursos-online"><span>Cursos</span>online</a>
		</li>-->
		<li><a href="/edp/la-escuela"><?php print t('The School') ?></a></li>
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/edp/cursos-cortos">
				<span>Cursos</span>Cortos
				</a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/school-of-professional-development/short-courses">
				<span>Short</span>Courses
				</a>
			<?php endif ?>
			</a>
		</li>
		<!--<li>
			<a href="/<?php print $language->language ?>/edp/cursos/cursos-adhoc"><span>Cursos</span>Adhoc</a>
		</li>-->
		<li>
			<?php if ($language->language == 'es'): ?>
				<a href="/<?php print $language->language ?>/edp/calendario"><?php print t('Calendar') ?></a>
			<?php elseif ($language->language == 'en'): ?>
				<a href="/<?php print $language->language ?>/school-of-professional-development/calendar"><?php print t('Calendar') ?></a>
			<?php endif ?>
		</li>
		<li>
			<a href="http://escuela-edp.utec.edu.pe/" class="btn btn-primary btn-custom bold"><?php print t('Contact us') ?></a>
		</li>
	</ul>
</div>