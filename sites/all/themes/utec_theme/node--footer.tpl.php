<?php global $language ?>
<!-- FOOTER -->
	<div class="subscribe pv-7 bg-gray-darker hidden-xs">
		<div class="container">
			<ul class="grid-list grid-list-centered normalize-text">
				<li>
					<h3 class="thin text-white pt-7"><i class="icon-subscribe mr-7"></i><?php print t('Subscribe to UTEC') ?></h3>
				</li>
				<li>
					<div class="form-subscribe">
						<form action="" class="form-inline mb-ch-0">
							<div class="form-group">
								<label for="subscribe_name" class="sr-only"><?php print t('Name') ?></label>
                <?php if ($language->prefix == 'en'): ?>
								  <input type="text" class="form-control" width="210" height="auto" placeholder="Name">
                <?php elseif ($language->prefix == 'es'): ?>
                  <input type="text" class="form-control" width="210" height="auto" placeholder="Nombre">
                <?php endif ?>
							</div>
							<div class="form-group">
								<label for="subscribe_email" class="sr-only"><?php print t('Email') ?></label>
								<input type="text" class="form-control" width="210" height="auto" placeholder="E-mail">
								<button class="btn btn-outline btn-white"><i class="icon-arrows-right"></i></button>
							</div>
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="site-map pv-14 bg-gray-dark hidden-xs">
		<div class="container">
			<ul class="grid-list grid-list-6 grid-list-2-xs">
        <li>
          <ul>
            <li class="title text-gray-lighter"><?php print t('We are UTEC') ?></li>
            <li><a href="/<?php print $language->prefix ?>/somos-utec/respaldo" class="atm-menu-inferior"><small><?php print t('A Solid Foundation') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/somos-utec/autoridades" class="atm-menu-inferior"><small><?php print t('Authorities') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/somos-utec/profesores" class="atm-menu-inferior"><small><?php print t('Faculty') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/somos-utec/ingenio-en-accion" class="atm-menu-inferior"><small><?php print t('Ingenuity in Action') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/somos-utec/metodologia-educativa" class="atm-menu-inferior"><small><?php print t('Educational Methodology') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/somos-utec/noticias" class="atm-menu-inferior"><small></small><small><?php print t('News') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/somos-utec/eventos-utec" class="atm-menu-inferior"><small><?php print t('Events') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/somos-utec/vida-estudiantil" class="atm-menu-inferior"><small><?php print t('Life at UTEC') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/somos-utec/campus-y-laboratorios" class="atm-menu-inferior"><small><?php print t('Campus and Labs') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/somos-utec/trabaja-en-utec" class="atm-menu-inferior"><small><?php print t('Work at UTEC') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/somos-utec/utec-garage" class="atm-menu-inferior"><small><?php print t('UTEC Garage') ?></small></a></li>
            <li><a href="http://utecventures.com/" target="_blank" class="atm-menu-inferior"><small><?php print t('UTEC Ventures') ?></small></a></li>
            <!--<li><a href="#" class="atm-menu-inferior"><small>Calendario Académico</small></a></li>-->
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
            <li class="title text-gray-lighter"><?php print t('Research') ?></li>
            <li><a href="/<?php print $language->prefix ?>/investigacion/proyectos" class="atm-menu-inferior"><small><?php print t('Projects') ?></small></a></li>
            <!--<li><a href="#"><small>Publicaciones</small></a></li>
            <li><a href="#"><small>Consultorías</small></a></li>-->
            <li><a href="/<?php print $language->prefix ?>/investigacion/empresas-y-clientes"><small><?php print t('Companies and Clients') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/investigacion/contacto"><small><?php print t('Contact us') ?></small></a></li>

          </ul>
        </li>
        <li>
          <ul>
            <li class="title text-gray-lighter"><?php print t('Degrees') ?></li>
            <li><a href="/<?php print $language->prefix ?>/carreras/ingenieria-quimica-industrial" class="atm-menu-inferior"><small><?php print t('Industrial and Chemical Engineering') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/carreras/ingenieria-electronica" class="atm-menu-inferior"><small><?php print t('Electronic Engineering') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/carreras/ingenieria-mecanica" class="atm-menu-inferior"><small><?php print t('Mechanical Engineering') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/carreras/ingenieria-de-la-energia" class="atm-menu-inferior"><small><?php print t('Energy Engineering') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/carreras/ingenieria-industrial" class="atm-menu-inferior"><small><?php print t('Industrial Engineering') ?></small></a></li>
            <!--<li><a href="/<?php print $language->prefix ?>/carreras/menciones" class="atm-menu-inferior"><small><?php print t('Mentions') ?></small></a></li>-->
          </ul>
        </li>
        <li>
          <ul>
            <li class="title text-gray-lighter"><?php print t('Admissions') ?></li>
            <li><a href="/<?php print $language->prefix ?>/admision/modalidades" class="atm-menu-inferior"><small><?php print t('Admissions Methods') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/admision/charlas-informativas" class="atm-menu-inferior"><small><?php print t('Informative Talks') ?></small></a></li>
            <!--<li><a href="/<?php print $language->prefix ?>/admision/calendario-academico"><small><?php print t('Admission Calendar') ?></small></a></li>-->
            <li><a href="/<?php print $language->prefix ?>/admision/modalidades" class="atm-menu-inferior"><small><?php print t('Pre-registration') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/admision/informacion-economica" class="atm-menu-inferior"><small><?php print t('Financial Information') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/admision/visita-utec" class="atm-menu-inferior"><small><?php print t('Visit UTEC') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/admision/orientacion-vocacional" class="atm-menu-inferior"><small><?php print t('Vocational Guidance') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/admision/preguntas-frecuentes" class="atm-menu-inferior"><small><?php print t('FAQ') ?></small></a></li>
          </ul>
        </li>
        <li>
          <ul>
            <li class="title text-gray-lighter"><?php print t('Alliances') ?></li>
            <li><a href="/<?php print $language->prefix ?>/convenios/convenios-de-intercambio" class="atm-menu-inferior"><small><?php print t('Alliances') ?></small></a></li>
          </ul>
        </li>  
        <li>
          <ul>
            <li class="title text-gray-lighter"><?php print t('Executive Education') ?></li>
            <!--<li><a href="/edp/cursos/diplomados" class="atm-menu-inferior"><small>Diplomados</small></a></li>
            <li><a href="/edp/cursos/cursos-online" class="atm-menu-inferior"><small>Cursos Online</small></a></li>-->
            <li><a href="/edp/la-escuela" class="atm-menu-inferior"><small><?php print t('The School') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/edp/cursos/cursos-cortos" class="atm-menu-inferior"><small><?php print t('Short Courses') ?></small></a></li>
            <li><a href="/<?php print $language->prefix ?>/edp/calendario" class="atm-menu-inferior"><small><?php print t('Calendar') ?></small></a></li>
            <!--<li><a href="/edp/cursos/cursos-adhoc" class="atm-menu-inferior"><small>Cursos Adoc</small></a></li>
            <li><a href="/convenios" class="atm-menu-inferior"><small>Cursos Adoc</small></a></li>-->
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
				<a href="#" class="btn btn-outline btn-xs btn-gray-dark mt-7-xs"><i class="icon-footer-book"></i></a>
				<a href="https://www.facebook.com/utecuniversidad" target="_blank" class="btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-facebook"></i></a>
				<a href="https://twitter.com/utecedu" target="_blank" class="btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-twitter"></i></a>
        <a href="https://www.linkedin.com/pub/utec-universidad-de-ingenier%C3%ADa-y-tecnolog%C3%ADa/71/a64/690/en" target="_blank"  class="btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-linkedin"></i></a>
        <a href="http://instagram.com/utecedu" target="_blank"  class="btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-instagram"></i></a>
        <a href="https://www.youtube.com/user/universidadutec   " target="_blank"  class="btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-youtube"></i></a>
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