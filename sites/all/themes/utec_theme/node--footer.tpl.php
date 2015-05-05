<?php 
  global $language;
  $tree = menu_tree_all_data('menu-footer-menu'); 
  $menus = menu_tree_output(i18n_menu_localize_tree($tree));
?>
<!-- FOOTER -->
  <?php $node = node_load(919); ?>
  <?php //print_r($node); ?>
	<div class="site-map pv-14 bg-gray-dark hidden-xs">
		<div class="container">
			<ul class="grid-list grid-list-6 grid-list-2-xs">
        <?php $counter = 1; ?>
        <?php foreach ($menus as $index => $menu) :?>
        <?php $classes = $menu['#localized_options']['attributes']['class']; ?>
        <?php if ($menu['#title']) : ?>
        <?php print render($menu); ?>
        <?php $counter++; ?>
        <?php endif; ?>
        <?php endforeach; ?>                       
      </ul> 
		</div>
	</div>
	<div class="address pv-14 bg-gray-lighter">
		<div class="container">
			<nav class="text-center ml-ch-14 text-gray">
				<span><?php print t('Calle Medrano Silva S/N con Av. Grau y Malecón Armendáriz S/N.') ?></span>
				<span><strong><?php print t('P.') ?></strong>(511) 230-5020 - (511) 373 1000 - (511) 354-0070</span>
				<span><strong><?php print t('W.') ?></strong>www.utec.edu.pe</span>
				<span><strong><?php print t('C.') ?></strong><a href="mailto:informes@utec.edu.pe" class="text-gray-dark">informes@utec.edu.pe</a></span>
        <div class="inline-block mt-14">
  				<!-- <a rel="nofollow" href="<?php //if ($language->language != 'en'): ?>/libro-de-reclamaciones <?php //else : ?>/en/book-of-complaints <?php //endif; ?>" class="btn btn-outline btn-xs btn-gray-dark mt-7-xs"><i class="icon-footer-book"></i></a> -->
  				<a rel="nofollow" href="https://www.facebook.com/utecuniversidad" target="_blank" class="atm-sociales btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-facebook"></i></a>
  				<a rel="nofollow" href="https://twitter.com/utecedu" target="_blank" class="atm-sociales btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-twitter"></i></a>
          <a rel="nofollow" href="https://www.linkedin.com/company/universidad-de-ingenier%C3%ADa-y-tecnolog%C3%ADa" target="_blank"  class="atm-sociales btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-linkedin"></i></a>
          <a rel="nofollow" href="http://instagram.com/utecedu" target="_blank"  class="atm-sociales btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-instagram"></i></a>
          <a rel="nofollow" href="https://www.youtube.com/user/universidadutec   " target="_blank"  class="atm-sociales btn btn-outline btn-xs btn-gray-dark mt-7-xs btn-rrss"><i class="icon-footer-youtube"></i></a>
        </div>
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

