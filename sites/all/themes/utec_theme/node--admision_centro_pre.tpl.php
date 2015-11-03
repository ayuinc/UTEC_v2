<?php

	$titulo = $node->title;   
	$field_que_es_descripcion_cp = $node->field_que_es_descripcion_cp['und']['0']['value'];
	$field_que_es_intro_cp = $node->field_que_es_intro_cp['und']['0']['value'];
	$field_calendario_fecha = $node->field_calendario_fecha['und']['0']['value'];
	$field_calendario_hora = $node->field_calendario_hora['und']['0']['value'];
	$field_calendario_pago = $node->field_calendario_pago['und']['0']['value'];
	$field_calendario_lugar = $node->field_calendario_lugar['und']['0']['value'];
	$field_inscripcion_pre_extensive = $node->field_inscripcion_pre_extensive['und']['0']['value'];
	$field_inscripcion_pre_intensiva = $node->field_inscripcion_pre_intensiva['und']['0']['value'];
	$field_fotos_centro_pre = $node->field_image['und']['0']['uri'];
	$modalida_ext_int = $node->field_modalidad_extensiva_intens['und']['0']['value'];

	$titulo_bloque = $node->field_texo['und']['0']['value'];
	$contenido_bloques = $node->field_contenido['und'];
?>

	<div class="hero-unit"> <!-- HERO -->
	  <?php if ($language->language == 'en'): ?>
	  <div data-section-scroll="Overview" id="que-es" class="section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print image_style_url($image_style, $field_fotos_centro_pre); ?>);">
	  <?php elseif ($language->language  != 'en'): ?>
	  <div data-section-scroll="Acerca de" id="que-es" class="section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print image_style_url($image_style, $field_fotos_centro_pre); ?>);">
	  <?php endif ?>
	    <div class="overlay flex-middle">
	    	<?php if ($language->language == 'en'): ?>
	      <div class="container-sm hero-text" data-href="/<?php print $language->language; ?>/methods-of-admission/pre-university-center/about">
	      <?php elseif ($language->language  != 'en'): ?>
	      <div class="container-sm hero-text" data-href="/modalidades-de-admision/centro-pre/acerca-del-centro-pre">
	      <?php endif ?>
	      	<?php if ($language->language == 'en'): ?>
		      	<a href="/<?php print $language->language; ?>/methods-of-admission/pre-university-center/about">
		      		<h1 class="thin text-white mt-0 text-hover-primary"><?php print $titulo ?></h1>
		      	</a>
		      <?php elseif ($language->language  != 'en'): ?>
		      	<a href="/modalidades-de-admision/centro-pre/acerca-del-centro-pre">
		      		<h1 class="thin text-white mt-0 text-hover-primary"><?php print $titulo ?></h1>
		      	</a>
		      <?php endif ?>
	        <hr class="hr-white">
	        <div class="row">
	          <div class="col-sm-3 hidden-xs">
	            <div class="size xl">
	              <i class="icon-carreras-que-es text-white"></i>
	              <?php if ($language->language == 'en'): ?>
	              <span class="bold uppercase btn btn-white btn-outline see-more mt-7"><?php print t('See more') ?></span>
	              <?php elseif ($language->language  != 'en'): ?>
	              <span class="bold uppercase btn btn-white btn-outline see-more mt-7"><?php print t('See more') ?></span>
	              <?php endif ?>
	            </div>
	          </div>
	          <div class="col-sm-9">
	            <h2 class="lead thin text-white h5 mt-0"><?php print $field_que_es_descripcion_cp ?></h2>
	            <?php if ($language->language == 'en'): ?>
              <span class="bold uppercase btn btn-white btn-outline see-more mt-7 visible-xs-inline-block mt-14"><?php print t('See more') ?></span>
              <?php elseif ($language->language  != 'en'): ?>
              <span class="bold uppercase btn btn-white btn-outline see-more mt-7 visible-xs-inline-block mt-14"><?php print t('See more') ?></span>
              <?php endif ?>
	          </div>
	        </div>
	      </div>
	      <a class="scroll-down scroll-down-sq size lg" href="#malla-curricular" rel="nofollow">
	        <i class="icon-arrows-down bg-white-op text-gray"></i>
	      </a>
	    </div>
	  </div>
	</div> <!-- END:Hero -->
	<div data-section-scroll="<?php print t('Courses') ?>" class="section-scroll-content pb-0">
		<div class="container-sm">
			<h3 class="lead thin text-center"><?php print $field_que_es_intro_cp ?></h3>
		</div>
		<div class="pt-42">
			<div class="container">
				<h2 class="thin lead"><?php print $titulo_bloque; ?></h2>
				<ul class="grid-list grid-list-4 grid-list-1-xs size sm isotope-grid list-hover list-hover-gray-light">
					<?php foreach ($contenido_bloques as $key => $contenido_bloque) : ?>
					<li>
						<div>
							<?php print $contenido_bloque['value']; ?>
						</div>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
	<div data-section-scroll="<?php print t('Calendar') ?>" class="section-scroll-content pt-0">
		<div class="container-sm">
			<h2 class="thin lead"><?php print t('Calendar') ?></h2>
			<h4 class="text-gray"><?php print $modalida_ext_int ?></h4>
			<div class="list-custom-left normalize-text lead-ch mb-ch-21">
				<ul>
					<li class="bg-primary text-white uppercase text-center p-21">
						<?php print t('Date') ?>
					</li>
					<li class="pl-21">
						<p><?php print $field_calendario_fecha ?></p>
					</li>
				</ul>
				<ul>
					<li class="bg-gray text-white uppercase text-center p-21">
						<?php print t('Time') ?>
					</li>
					<li class="pl-21">
						<p><?php print $field_calendario_hora ?></p>
					</li>
				</ul>
				<ul>
					<li class="bg-gray text-white uppercase text-center p-21">
						<?php print t('Payment') ?>
					</li>
					<li class="pl-21">
						<p><?php print $field_calendario_pago ?></p>
					</li>
				</ul>
				<ul>
					<li class="bg-gray text-white uppercase text-center p-21">
						<?php print t('Place') ?>
					</li>
					<li class="pl-21">
						<p><?php print $field_calendario_lugar ?></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--<div data-section-scroll="Inscripcion" class="container-sm section-scroll-content">
		<h3 class="thin lead ml-70 mr-70">Inscripción</h3>
		<div class="list-custom lead-ch">
			<ul>
				<li>
					<p><strong>Pre extensiva:</strong> ser estudiante lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia deserunt cum voluptates laudantium consequuntur nobis magni, assumenda officia dolorem non, laboriosam ratione in, repellat qui dicta, maxime cupiditate eligendi aliquam!</p>
				</li>
				<li>
					<p><strong>Pre intensiva:</strong> ser estudiante lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia deserunt cum voluptates laudantium consequuntur nobis magni, assumenda officia dolorem non, laboriosam ratione in, repellat qui dicta, maxime cupiditate eligendi aliquam!</p>
				</li>
			</ul>
		</div>
		<a href="#" class="btn btn-lg btn-primary see-more uppercase ml-70 mr-70">Ver Requisitos</a>
	</div>-->
	<div data-section-scroll="<?php print t('Request info') ?>" class="container-sm section-scroll-content pt-0">
		<div class="container-sm">
			<h3><?php print t("For more information:") ?></h3>
			<?php 
			  // Renderizar bloque
			  $blockObject = block_load('netsuite_form_builder', 'information_request_pre_centre');
			  $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
			  print drupal_render($block);
			?>
		</div>
	</div>

<div id="section-scroll" class="hidden-sm hidden-xs">
  <ul></ul>
  <div class="text-right pv-21 btn-apply animated">
		<?php if ($language->language  != 'en'): ?>
			<a href="/modalidades-de-admision/centro-pre/formulario-de-inscripcion" class="btn btn-primary uppercase">Postula</a>								
		<?php elseif ($language->language == 'en'): ?>
			<a href="/<?php print $language->language ?>/methods-of-admission/pre-university-center/application-form" class="btn btn-primary uppercase"><?php print t('Apply') ?></a>		
		<?php endif ?>	  
  </div>
</div>


