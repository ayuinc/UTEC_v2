<?php global $language ?>
<!-- FOOTER -->
	<!-- <div class="subscribe pv-7 bg-gray-darker hidden-xs">
		<div class="container">
			<ul class="grid-list grid-list-centered normalize-text">
				<li>
					<h3 class="thin text-white pt-7"><i class="icon-subscribe mr-7"></i><?php //print t('Subscribe to UTEC') ?></h3>
				</li>
				<li>
					<div class="form-subscribe">
						<form action="" class="form-inline mb-ch-0">
							<div class="form-group">
								<label for="subscribe_name" class="sr-only"><?php //print t('Name') ?></label>
                <?php //if ($language->language == 'en'): ?>
								  <input type="text" class="form-control" width="210" height="auto" placeholder="Name">
                <?php //elseif ($language->language != 'en'): ?>
                  <input type="text" class="form-control" width="210" height="auto" placeholder="Nombre">
                <?php //endif ?>
							</div>
							<div class="form-group">
								<label for="subscribe_email" class="sr-only"><?php //print t('Email') ?></label>
								<input type="text" class="form-control" width="210" height="auto" placeholder="E-mail">
								<button class="btn btn-outline btn-white"><i class="icon-arrows-right"></i></button>
							</div>
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div> -->
  <?php $node = node_load(919); ?>
  <?php //print_r($node); ?>
	<div class="site-map pv-14 bg-gray-dark hidden-xs">
		<div class="container">
			<ul class="grid-list grid-list-6 grid-list-2-xs">
        <li>
          <ul>
            <?php if ($language->language == 'en'): ?>
              <li class="title text-gray-lighter"><?php print t('We are UTEC') ?></li>
              <li><a href="/<?php print $language->language ?>/a-solid-foundation" class="atm-menu-inferior"><small><?php print t('A Solid Foundation') ?></small></a></li>
              <li><a href="/<?php print $language->language ?>/authorities" class="atm-menu-inferior"><small><?php print t('Authorities') ?></small></a></li>
              <li><a href="/<?php print $language->language ?>/faculty" class="atm-menu-inferior"><small><?php print t('Faculty') ?></small></a></li>
              <li><a href="/<?php print $language->language ?>/ingenuity-in-action" class="atm-menu-inferior"><small><?php print t('Ingenuity in Action') ?></small></a></li>
              <li><a href="/<?php print $language->language ?>/teaching-methodology" class="atm-menu-inferior"><small><?php print t('Teaching Methodology') ?></small></a></li>
              <li><a href="/<?php print $language->language ?>/news" class="atm-menu-inferior"><small></small><small><?php print t('News') ?></small></a></li>
              <li><a href="/<?php print $language->language ?>/utec-events" class="atm-menu-inferior"><small>UTEC Events</small></a></li>
              <li><a href="/<?php print $language->language ?>/student-life" class="atm-menu-inferior"><small><?php print t('UTEC Life') ?></small></a></li>
              <li><a href="/<?php print $language->language ?>/campus-and-labs" class="atm-menu-inferior"><small><?php print t('Campus and Labs') ?></small></a></li>
              <li><a href="/<?php print $language->language ?>/work-at-utec" class="atm-menu-inferior"><small><?php print t('Work at UTEC') ?></small></a></li>
              <li><a href="/<?php print $language->language ?>/utec-garage" class="atm-menu-inferior"><small><?php print t('UTEC Garage') ?></small></a></li>
              <li><a href="http://utecventures.com/" target="_blank" class="atm-menu-inferior"><small><?php print t('UTEC Ventures') ?></small></a></li>
            <?php elseif ($language->language != 'en'): ?>
              <li class="title text-gray-lighter"><?php print t('We are UTEC') ?></li>
              <li><a href="/respaldo" class="atm-menu-inferior"><small><?php print t('A Solid Foundation') ?></small></a></li>
              <li><a href="/autoridades" class="atm-menu-inferior"><small><?php print t('Authorities') ?></small></a></li>
              <li><a href="/profesores" class="atm-menu-inferior"><small><?php print t('Faculty') ?></small></a></li>
              <li><a href="/ingenio-en-accion" class="atm-menu-inferior"><small><?php print t('Ingenuity in Action') ?></small></a></li>
              <li><a href="/metodologia-educativa" class="atm-menu-inferior"><small>Metodología Educativa</small></a></li>
              <li><a href="/noticias" class="atm-menu-inferior"><small></small><small><?php print t('News') ?></small></a></li>
              <li><a href="/eventos-utec" class="atm-menu-inferior"><small>Eventos UTEC</small></a></li>
              <li><a href="/vida-estudiantil" class="atm-menu-inferior"><small><?php print t('UTEC Life') ?></small></a></li>
              <li><a href="/campus-y-laboratorios" class="atm-menu-inferior"><small><?php print t('Campus and Labs') ?></small></a></li>
              <li><a href="/trabaja-en-utec" class="atm-menu-inferior"><small><?php print t('Work at UTEC') ?></small></a></li>
              <li><a href="/utec-garage" class="atm-menu-inferior"><small><?php print t('UTEC Garage') ?></small></a></li>
              <li><a href="http://utecventures.com/" target="_blank" class="atm-menu-inferior"><small><?php print t('UTEC Ventures') ?></small></a></li>
            <?php endif ?>
          </ul>
        </li>
        <!--<li>
          <ul>
            <li class="title">Vive Utec</li>
            <li><a href="#" class="atm-menu-inferior"><small>Vida</small><small>Estudiantil</small></a></li>
            <li><a href="#" class="atm-menu-inferior"><small>Campus &amp;</small><small>Laboratorios</small></a></li>
            <li><a href="#" class="atm-menu-inferior"><small>Ingenio en</small><small>Acción</small></a></li>
            <li><a href="#" class="atm-menu-inferior"><small>UTEC</small><small>Ventures</small></a></li>
            <li><a href="#" class="atm-menu-inferior"><small>Blog &amp;</small><small>YouTube</small></a></li>
            <li><a href="#" class="atm-menu-inferior"><small>Calendario</small><small>Académico</small></a></li>
          </ul>
        </li>-->
        <li>
          <ul>
	          <?php if ($language->language != 'en'): ?>
            <li class="title text-gray-lighter"><?php print t('Research') ?></li>
            <li><a href="/proyectos" class="atm-menu-inferior"><small><?php print t('Projects') ?></small></a></li>
            <li><a href="/publicaciones" class="atm-menu-inferior"><small><?php print t('Publications') ?></small></a></li>
            <!--<li><a href="#"><small>Publicaciones</small></a></li>
            <li><a href="#"><small>Consultorías</small></a></li>-->
            <li><a href="/empresas-y-clientes" class="atm-menu-inferior"><small><?php print t('Companies and Clients') ?></small></a></li>
            <li><a href="/investigacion/contacto" class="atm-menu-inferior"><small><?php print t('Contact us') ?></small></a></li>
						<?php elseif ($language->language == 'en'): ?>
            <li class="title text-gray-lighter"><?php print t('Research') ?></li>
            <li><a href="/<?php print $language->language ?>/projects" class="atm-menu-inferior"><small><?php print t('Projects') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/publications" class="atm-menu-inferior"><small><?php print t('Publications') ?></small></a></li>
            <!--<li><a href="#"><small>Publicaciones</small></a></li>
            <li><a href="#"><small>Consultorías</small></a></li>-->
            <li><a href="/<?php print $language->language ?>/companies" class="atm-menu-inferior"><small><?php print t('Companies and Clients') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/contact" class="atm-menu-inferior"><small><?php print t('Contact us') ?></small></a></li>
						<?php endif ?>
          </ul>
        </li>
        <li>
          <ul>
            <li class="title text-gray-lighter"><?php print t('Programs') ?></li>
            <?php if ($language->language == 'en'): ?>
            <li><a href="/<?php print $language->language ?>/industrial-chemical-engineering" class="atm-menu-inferior"><small><?php print t('Industrial and Chemical Engineering') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/electronic-engineering" class="atm-menu-inferior"><small><?php print t('Electronic Engineering') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/mechanical-engineering" class="atm-menu-inferior"><small><?php print t('Mechanical Engineering') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/energy-engineering" class="atm-menu-inferior"><small><?php print t('Energy Engineering') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/industrial-engineering" class="atm-menu-inferior"><small><?php print t('Industrial Engineering') ?></small></a></li>
            <!--<li><a href="/<?php print $language->language ?>/carreras/menciones" class="atm-menu-inferior"><small><?php print t('Mentions') ?></small></a></li>-->
            <?php elseif ($language->language != 'en'): ?>
            <li><a href="/ingenieria-quimica-industrial" class="atm-menu-inferior"><small><?php print t('Industrial and Chemical Engineering') ?></small></a></li>
            <li><a href="/ingenieria-electronica" class="atm-menu-inferior"><small><?php print t('Electronic Engineering') ?></small></a></li>
            <li><a href="/ingenieria-mecanica" class="atm-menu-inferior"><small><?php print t('Mechanical Engineering') ?></small></a></li>
            <li><a href="/ingenieria-de-la-energia" class="atm-menu-inferior"><small><?php print t('Energy Engineering') ?></small></a></li>
            <li><a href="/ingenieria-industrial" class="atm-menu-inferior"><small><?php print t('Industrial Engineering') ?></small></a></li>
            <!--<li><a href="/<?php print $language->language ?>/carreras/menciones" class="atm-menu-inferior"><small><?php print t('Mentions') ?></small></a></li>-->  
            <?php endif ?>
          </ul>
        </li>
        <li>
          <ul>
              <?php if ($language->language == 'en'): ?>
            <li class="title text-gray-lighter">Admissions</li>
            <li><a href="/<?php print $language->language ?>/methods-of-admission" class="atm-menu-inferior"><small>Admissions</small></a></li>
            <li><a href="/<?php print $language->language ?>/informative-talks" class="atm-menu-inferior"><small><?php print t('Informative Talks') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/admissions-calendar" class="atm-menu-inferior"><small><?php print t('Admissions Calendar') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/visit-utec" class="atm-menu-inferior"><small><?php print t('Visit UTEC') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/financial-information" class="atm-menu-inferior"><small><?php print t('Financial Information') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/career-guidance-and-orientation" class="atm-menu-inferior"><small><?php print t('Guidance') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/frequently-asked-questions" class="atm-menu-inferior"><small><?php print t('FAQ') ?></small></a></li>
              <?php elseif ($language->language != 'en'): ?>
            <li class="title text-gray-lighter">Admisión</li>
            <li><a href="/modalidades-de-admision" class="atm-menu-inferior"><small>Modalidades de Admisión</small></a></li>
            <li><a href="/charlas-informativas" class="atm-menu-inferior"><small><?php print t('Informative Talks') ?></small></a></li>
            <li><a href="/calendario-de-admision" class="atm-menu-inferior"><small><?php print t('Admissions Calendar') ?></small></a></li>
            <li><a href="/visita-utec" class="atm-menu-inferior"><small><?php print t('Visit UTEC') ?></small></a></li>
            <li><a href="/informacion-economica" class="atm-menu-inferior"><small><?php print t('Financial Information') ?></small></a></li>
            <li><a href="/orientacion-vocacional" class="atm-menu-inferior"><small><?php print t('Guidance') ?></small></a></li>
            <li><a href="/preguntas-frecuentes" class="atm-menu-inferior"><small><?php print t('FAQ') ?></small></a></li>
              <?php endif ?>
          </ul>
        </li>
        <li>
          <ul>
            <li class="title text-gray-lighter"><?php print t('Alliances') ?></li>
            <?php if ($language->language == 'en'): ?>
            <li><a href="/<?php print $language->language ?>/alliances" class="atm-menu-inferior"><small><?php print t('Alliances') ?></small></a></li>
            <?php elseif ($language->language != 'en'): ?>
            <li><a href="/convenios-de-intercambio" class="atm-menu-inferior"><small><?php print t('Alliances') ?></small></a></li>
            <?php endif ?>
          </ul>
        </li>  
        <li>
          <ul>
            <li class="title text-gray-lighter"><?php print t('SPD') ?></li>
            <?php if ($language->language == 'en'): ?>
            <!--<li><a href="/edp/cursos/cursos-online" class="atm-menu-inferior"><small>Cursos Online</small></a></li>-->
            <li><a href="/<?php print $language->language ?>/spd" class="atm-menu-inferior"><small><?php print t('SPD') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/spd/short-courses" class="atm-menu-inferior"><small><?php print t('Short Courses') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/spd/calendar" class="atm-menu-inferior"><small><?php print t('Calendar') ?></small></a></li>
            <li><a href="/<?php print $language->language ?>/spd/inhouse-cursos" class="atm-menu-inferior"><small>Inhouse Courses</small></a></li>
            <li><a href="/<?php print $language->language ?>/spd/certificates" class="atm-menu-inferior"><small>Certificates</small></a></li>
            <!--<li><a href="/convenios" class="atm-menu-inferior"><small>Cursos Adoc</small></a></li>-->
            <?php elseif ($language->language != 'en'): ?>
            
            <!--<li><a href="/edp/cursos/cursos-online" class="atm-menu-inferior"><small>Cursos Online</small></a></li>-->
            <li><a href="/edp" class="atm-menu-inferior"><small><?php print t('SPD') ?></small></a></li>
            <li><a href="/edp/cursos-cortos" class="atm-menu-inferior"><small><?php print t('Short Courses') ?></small></a></li>
            <li><a href="/edp/calendario" class="atm-menu-inferior"><small><?php print t('Calendar') ?></small></a></li>
            <li><a href="/edp/cursos/courses-inhouse" class="atm-menu-inferior"><small>Cursos Inhouse</a></li>
            <li><a href="/edp/diplomados" class="atm-menu-inferior"><small>Diplomados</small></a></li>
            <!--<li><a href="/convenios" class="atm-menu-inferior"><small>Cursos Adoc</small></a></li>-->  
            <?php endif ?>
          </ul>
        </li>                
      </ul> 
		</div>
	</div>
	<div class="address pv-14 bg-gray-lighter">
		<div class="container">
			<nav class="text-center ml-ch-14 text-gray">
				<span><?php print t('Av. Cascanueces 2221, Santa Anita, Lima') ?></span>
				<span><strong><?php print t('P.') ?></strong>51 1 354-0070</span>
				<span><strong><?php print t('W.') ?></strong>www.utec.edu.pe</span>
				<span><strong><?php print t('C.') ?></strong><a href="mailto:informes@utec.edu.pe" class="text-gray-dark">informes@utec.edu.pe</a></span>
				<a rel="nofollow" href="<?php if ($language->language != 'en'): ?>/libro-de-reclamaciones <?php else : ?>/en/complaints-book <?php endif; ?>" class="btn btn-outline btn-xs btn-gray-dark mt-7-xs"><i class="icon-footer-book"></i></a>
				<a rel="nofollow" href="https://www.facebook.com/utecuniversidad" target="_blank" class="atm-sociales btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-facebook"></i></a>
				<a rel="nofollow" href="https://twitter.com/utecedu" target="_blank" class="atm-sociales btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-twitter"></i></a>
        <a rel="nofollow" href="https://www.linkedin.com/pub/utec-universidad-de-ingenier%C3%ADa-y-tecnolog%C3%ADa/71/a64/690/en" target="_blank"  class="atm-sociales btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-linkedin"></i></a>
        <a rel="nofollow" href="http://instagram.com/utecedu" target="_blank"  class="atm-sociales btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-instagram"></i></a>
        <a rel="nofollow" href="https://www.youtube.com/user/universidadutec   " target="_blank"  class="atm-sociales btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-youtube"></i></a>
			</nav>
		</div>
	</div>
	<div class="copyright pv-14 bg-gray-lighter text-center text-gray">
		<small><?php print t('Copyright &copy; 2014 UTEC. All rights reserved.') ?></small>
	</div>
<!-- END:Footer -->

<script>
  (function(d) {
    var config = {
      kitId: 'fct8sgn',
      scriptTimeout: 3000
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<script>
function newsletter() {
	var dataLayer = dataLayer || [];
	dataLayer.push({
	    'event': 'formSubmit',
	    'form': 'Suscríbete a la UTEC',
	    'estado': 'Success'
	});
}

function contacto_general() {
	var dataLayer = dataLayer || [];
	dataLayer.push({
	    'event': 'formSubmit',
	    'form': 'Contacto General',
	    'estado': 'Success'
	});
}

function formulario_de_aplicacion() {
	var dataLayer = dataLayer || [];
	dataLayer.push({
	    'event': 'formSubmit',
	    'form': 'Formulario de Aplicación',
	    'estado': 'Success'
	});
}	

function centro_pre() {
	var dataLayer = dataLayer || [];
	dataLayer.push({
	    'event': 'formSubmit',
	    'form': 'Inscripción Centro Pre',
	    'estado': 'Success'
	});
}

function alto_rendimiento() {
	var dataLayer = dataLayer || [];
	dataLayer.push({
	    'event': 'formSubmit',
	    'form': 'Formulario Alto Redimiento',
	    'estado': 'Success'
	});
}

function examen_admision() {
	var dataLayer = dataLayer || [];
	dataLayer.push({
	    'event': 'formSubmit',
	    'form': 'Formulario Exámen de Admisión',
	    'estado': 'Success'
	});	
}

function bachillerato() {
	var dataLayer = dataLayer || [];
	dataLayer.push({
	    'event': 'formSubmit',
	    'form': 'Formulario Bachillerato',
	    'estado': 'Success'
	});	
}

function traslado() {
	var dataLayer = dataLayer || [];
	dataLayer.push({
	    'event': 'formSubmit',
	    'form': 'Formulario Traslado',
	    'estado': 'Success'
	});	
}

function primeros_puestos() {
	var dataLayer = dataLayer || [];
	dataLayer.push({
	    'event': 'formSubmit',
	    'form': 'Formulario Primeros Puestos',
	    'estado': 'Success'
	});	
}

</script>

