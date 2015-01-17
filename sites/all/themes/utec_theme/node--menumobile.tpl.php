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
			<a href="/<?php print $language->prefix ?>/somos-utec/utec-garage"><span>UTEC</span> Garage</a>
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
      <a href="/<?php print $language->prefix ?>/investigacion/publicaciones"><?php print t('Publications') ?></a>
    </li>
    <li>
      <a href="/<?php print $language->prefix ?>/investigacion/empresas-y-clientes"><span>Empresas</span> y clientes</a>
    </li>
    <li>
      <a href="/<?php print $language->prefix ?>/investigacion/proyectos"><?php print t('Projects') ?></a>
    </li>
    <li>
      <a href="/<?php print $language->prefix ?>/investigacion/contacto">Contacto</a>
    </li>
  </ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-3">
  <a class="back"><?php print t('Go Back') ?></a>
  <h1>Nuestra <span>oferta</span><br>Académica</h1>
  <ul>
    <li>
      <?php if ($language->prefix == 'en'): ?>
        <a href="/<?php print $language->prefix ?>/carreras/ingenieria-industrial"><span>Ingeniería</span> Industrial</a>
      <?php elseif ($language->prefix == 'es'): ?>
		    <a href="/<?php print $language->prefix ?>/carreras/ingenieria-industrial"><span>Industrial</span> Engineering</a>
      <?php endif ?>
		</li>
		<li>
     <?php if ($language->prefix == 'en'): ?>
      <a href="/<?php print $language->prefix ?>/carreras/ingenieria-de-la-energia"><span>Energy</span> Engineering</a>
     <?php elseif ($language->prefix == 'es'): ?>
			<a href="/<?php print $language->prefix ?>/carreras/ingenieria-de-la-energia"><span>Ingeniería</span> De la Energía</a>
     <?php endif ?>
		</li>
		<li>
      <?php if ($language->prefix == 'en'): ?>
        <a href="/<?php print $language->prefix ?>/carreras/ingenieria-quimica-industrial"><span>Industrial Chemical</span> Engineering</a>
      <?php elseif ($language->prefix == 'es'): ?>
			 <a href="/<?php print $language->prefix ?>/carreras/ingenieria-quimica-industrial"><span>Ingeniería</span> Química Industrial</a>
      <?php endif ?>
		</li>
		<li>
     <?php if ($language->prefix == 'en'): ?>
      <a href="/<?php print $language->prefix ?>/carreras/ingenieria-mecanica"><span>Mechanical</span> Engineering</a>
     <?php elseif ($language->prefix == 'es'): ?>
			<a href="/<?php print $language->prefix ?>/carreras/ingenieria-mecanica"><span>Ingeniería</span> Mecánica</a>
     <?php endif ?>
		</li>
		<li>
     <?php if ($language->prefix == 'en'): ?>
			<a href="/<?php print $language->prefix ?>/carreras/ingenieria-electronica"><span>Electronic</span> Engineering</a>
     <?php elseif ($language->prefix == 'es'): ?>
      <a href="/<?php print $language->prefix ?>/carreras/ingenieria-electronica"><span>Ingeniería</span> Electrónica</a>
     <?php endif ?>
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
<div class="mobile-nav-display" id="mobile-nav-display-4">
  <a class="back"><?php print t('Go Back') ?></a>
  <?php if ($language->prefix == 'es'): ?>
    <h1>Ingenio<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h1>
  <?php elseif ($language->prefix == 'en'): ?>
    <h1>Ingenuity,<br><span>dedication,</span> and<br><span>the pursuit</span><br>of excellence</h1>
  <?php endif ?>
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
      <a href="/<?php print $language->prefix ?>/admision/pre-inscripcion"><?php print t('Pre-registration') ?></a>
    </li>
    <li>
      <a href="/<?php print $language->prefix ?>/admision/calendario-admision">
      <?php if ($language->prefix == 'es'): ?>
        <span>Calendario de</span>Admisión</a>
      <?php elseif ($language->prefix == 'en'): ?>
        <span>Admissions</span>Calendar</a>
      <?php endif ?>
      </a>
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
		<li>
			<a href="/<?php print $language->prefix ?>/admision/modalidades" class="btn btn-primary btn-custom bold"><?php print t('Apply') ?></a>
		</li>
  </ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-5">
  <a class="back"><?php print t('Go Back') ?></a>
  <h1>Lorem <span>ipsum</span><br>dolor sit amet</h1>
  <ul>
		<li>
			<a href="/<?php print $language->prefix ?>/convenios/convenios-de-intercambio">
      <?php if ($language->prefix == 'es'): ?>
        <span>Convenios de</span>Intercambio</a>
      <?php elseif ($language->prefix == 'en'): ?>
        <span>Alliances</span></a>
      <?php endif ?>
      </a>
		</li>
  </ul>
</div>
<div class="mobile-nav-display" id="mobile-nav-display-6">
  <a class="back"><?php print t('Go Back') ?></a>
  <?php if ($language->prefix == 'es'): ?>
    <h1>Escuela de<br><span>desarollo</span><br>profesional</h1>
  <?php elseif ($language->prefix == 'en'): ?>
    <h1>School of<br><span>profesional</span><br>development</h1>
  <?php endif ?>
  <ul>
		<!--<li><a href="/edp/cursos/diplomados">Diplomados</a></li>
		<li>
			<a href="/edp/cursos/cursos-online"><span>Cursos</span>online</a>
		</li>-->
		<li>
			<a href="/<?php print $language->prefix ?>/edp/la-escuela"><?php print t('The School') ?></a>
		</li>
		<li>
      <a href="/<?php print $language->prefix ?>/edp/cursos/cursos-cortos">
      <?php if ($language->prefix == 'en'): ?>
        <span>Short</span>Courses</a>
      <?php elseif ($language->prefix == 'es'): ?>
        <span>Cursos</span>Cortos</a>
      <?php endif ?>
      </a>
		</li>
		<!--<li>
			<a href="/<?php print $language->prefix ?>/edp/cursos/cursos-adhoc"><span>Cursos</span>Adhoc</a>
		</li>-->
		<li><a href="/<?php print $language->prefix ?>/edp/calendario"><?php print t('Calendar') ?></a></li>
		<li><a href="http://escuela-edp.utec.edu.pe/"><?php print t('Contact us') ?></a></li>
  </ul>
</div>