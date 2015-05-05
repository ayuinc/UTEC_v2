<?php 
  global $language;
  $tree = menu_tree_all_data('menu-footer-menu'); 
  $menus = menu_tree_output(i18n_menu_localize_tree($tree));
  $sub_footer = $node->body['und']['0']['value'];
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
        <li>
          <ul>
            <li class="title text-gray-lighter"><?php print $menu['#title']; ?></li>
            <?php foreach ($menu['#below'] as $child) : ?>
            <?php if ($child['#href']) : ?>
              <?php print render($child); ?>
            <?php endif; ?>  
            <?php endforeach; ?>
          </ul>
        </li>
        <?php $counter++; ?>
        <?php endif; ?>
        <?php endforeach; ?>                       
      </ul> 
		</div>
	</div>
  <?php print $sub_footer; ?>
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

