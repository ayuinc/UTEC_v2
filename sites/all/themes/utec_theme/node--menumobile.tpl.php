<?php global $language ?>
<div class="mobile-nav-display-triggers"> 
  <ul>
    <li>
      <a href="#mobile-nav-display-1"><?php print t('We are Utec') ?></a>
    </li>
    <li>
      <a href="#mobile-nav-display-2"><?php print t('Research') ?></a>
    </li>
    <li>
      <a href="#mobile-nav-display-3"><?php print t('Programs') ?></a>
    </li>
    <li>
      <a href="#mobile-nav-display-4"><?php print t('Admissions') ?></a>
    </li>
    <li>
      <a href="#mobile-nav-display-5"><?php print t('Alliances') ?></a>
    </li>
    <li>
      <a href="#mobile-nav-display-6"><?php print t('Executive Education') ?></a>
    </li>
  </ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-1">
  <a class="back"><?php print t('Go Back') ?></a>
  <h1>Conoce<br><span>Quiénes</span> Somos</h1>
  <ul>
    <li>
      <a href="/<?php print $language->prefix ?>/somos-utec/respaldo"><?php print t('A Solid Foundation') ?></a>
    </li>
    <li>
      <a href="/<?php print $language->prefix ?>/somos-utec/autoridades"><?php print t('Authorities') ?></a>
    </li>
    <li>
      <a href="/<?php print $language->prefix ?>/somos-utec/profesores"><?php print t('Faculty') ?></a>
    </li>
    <li>
      <?php if ($language->prefix == 'en'): ?>
        <a href="/<?php print $language->prefix ?>/somos-utec/ingenio-en-accion"><span>Ingenuity</span> in action</a>
      <?php elseif ($language->prefix == 'es'): ?>
        <a href="/<?php print $language->prefix ?>/somos-utec/ingenio-en-accion"><span>Ingenio</span> en acción</a>
      <?php endif ?>
    </li>
    <li>
      <?php if ($language->prefix == 'en'): ?>
        <a href="/<?php print $language->prefix ?>/somos-utec/metodologia-educativa"><span>Educational</span> Methodology</a>
      <?php elseif ($language->prefix == 'es'): ?>
        <a href="/<?php print $language->prefix ?>/somos-utec/metodologia-educativa"><span>Metodología</span> Educativa</a>
      <?php endif ?>
    </li>
    <li>
      <?php if ($language->prefix == 'en'): ?>
        <a href="/<?php print $language->prefix ?>/somos-utec/calendario-admision"><span>Admissions</span>Calendar</a>
      <?php elseif ($language->prefix == 'es'): ?>
        <a href="/<?php print $language->prefix ?>/somos-utec/calendario-admision"><span>Calendario</span>de Admisión</a>
      <?php endif ?>
    </li>
    <li>
      <a href="/<?php print $language->prefix ?>/somos-utec/noticias"><?php print t('News') ?></a>
    </li>
    <li>
      <a href="/<?php print $language->prefix ?>/somos-utec/eventos-utec"><?php print t('Events') ?></a>
    </li>
    <li>
      <?php if ($language->prefix == 'en'): ?>
        <a href="/<?php print $language->prefix ?>/somos-utec/vida-estudiantil"><span>Life at</span> UTEC</a>
      <?php elseif ($language->prefix == 'es'): ?>
        <a href="/<?php print $language->prefix ?>/somos-utec/vida-estudiantil"><span>Vida</span> Estudiantil</a>
      <?php endif ?>

    </li>
    <li>
      <a href="/<?php print $language->prefix ?>/somos-utec/campus-y-laboratorios"><span><?php print t('Campus and') ?></span><?php print t(' Labs') ?></a>
    </li>
    <li>
      <a href="/<?php print $language->prefix ?>/somos-utec/trabaja-en-utec"><span><?php print t('Work') ?>Trabaja</span><?php print t(' at UTEC') ?></a>
    </li>
		<li>
			<a href="/<?php print $language->prefix ?>/somos-utec/utec-garage"><span>UTEC</span> garage</a>
		</li>
		<li>
			<a href="http://utecventures.com/" target="_blank" ><span>UTEC</span>Ventures</a>
		</li>
  </ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-2">
  <a class="back"><?php print t('Go Back') ?></a>
  <h1>Experiencia<br><span>en</span> <?php print t('Research') ?></h1>
  <ul>
    <li>
      <a href="#"><?php print t('Publications') ?></a>
    </li>
    <li>
      <a href="/investigacion/empresas-y-clientes"><span>Empresas</span> y clientes</a>
    </li>
    <li>
      <a href="/investigacion/proyectos"><?php print t('Projects') ?></a>
    </li>
    <li>
      <a href="/investigacion/contacto">Contacto</a>
    </li>
  </ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-3">
  <a class="back"><?php print t('Go Back') ?></a>
  <h1>Nuestra <span>oferta</span><br>Académica</h1>
  <ul>
		<li>
			<a href="/carreras/ingenieria-industrial"><span>Ingeniería</span> Industrial</a>
		</li>
		<li>
			<a href="/carreras/ingenieria-de-la-energia"><span>Ingeniería</span> De la Energía</a>
		</li>
		<li>
			<a href="/carreras/ingenieria-quimica-industrial"><span>Ingeniería</span> Química Industrial</a>
		</li>
		<li>
			<a href="/carreras/ingenieria-mecanica"><span>Ingeniería</span> Mecánica</a>
		</li>
		<li>
			<a href="/carreras/ingenieria-electronica"><span>Ingeniería</span> Electrónica</a>
		</li>
		<!--<li>
			<a href="/carreras/menciones">Menciones</a>
		</li>
		<li>
			<a href="/carreras/escuela-de-desarrollo"><span>Escuela de</span>Desarollo</a>
		</li>-->
		<li>
			<a href="/admision/modalidades" class="btn btn-primary btn-custom bold">Postula</a>
		</li>
  </ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-4">
  <a class="back"><?php print t('Go Back') ?></a>
  <h1>Talento<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h1>
  <ul>
		<li>
			<a href="/admision/modalidades"><span>Modalidades</span> de admisión</a>
		</li>
		<li>
			<a href="/admision/charlas-informativas"><span>Charlas</span> informativas</a>
		</li>
		<li>
			<a href="/admision/informacion-economica"><span>Información</span> económica</a>
		</li>
    <li>
      <a href="/admision/pre-inscripcion"><?php print t('Registration') ?></a>
    </li>
    <li>
      <a href="/admision/calendario-admision"><span>Calendario</span> de admisión</a>
    </li>
    <li>
      <a href="/admision/visita-utec"><span>Visita</span> UTEC</a>
    </li>
    <li>
      <a href="/admision/orientacion-vocacional"><span>Orientación</span> Vocacional</a>
    </li>
    <li>
      <a href="/admision/preguntas-frecuentes"><span>Preguntas</span> Frecuentes</a>
    </li>
		<li>
			<a href="/admision/modalidades" class="btn btn-primary btn-custom bold">Postula</a>
		</li>
  </ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-5">
  <a class="back"><?php print t('Go Back') ?></a>
  <h1>Lorem <span>ipsum</span><br>dolor sit amet</h1>
  <ul>
		<!--<li>
			<a href="#"><span>Proceso de</span>ampliación</a>
		</li>-->
		<li>
			<a href="/convenios/ven-a-la-utec"><span>Ven a</span> la utec</a>
		</li>
		<li>
			<a href="/convenios/convenios-de-intercambio"><span>Convenios de</span> Intercambio</a>
		</li>
  </ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-6">
  <a class="back"><?php print t('Go Back') ?></a>
  <h1>Escuela de<br><span>desarollo</span><br>profesional</h1>
  <ul>
		<!--<li><a href="/edp/cursos/diplomados">Diplomados</a></li>
		<li>
			<a href="/edp/cursos/cursos-online"><span>Cursos</span>online</a>
		</li>-->
		<li>
			<a href="/edp/la-escuela"><?php print t('The School') ?></a>
		</li>
		<li>
			<a href="/edp/cursos/cursos-cortos"><span>Cursos</span> Cortos</a>
		</li>
		<!--<li>
			<a href="/edp/cursos/cursos-adhoc"><span>Cursos</span>Adhoc</a>
		</li>-->
		<li><a href="/edp/calendario"><?php print t('Calendar') ?></a></li>
		<li>
			<a href="/edp/inscripcion" class="btn btn-primary btn-custom bold"><?php print t('Registration') ?></a>
		</li>
  </ul>
</div>