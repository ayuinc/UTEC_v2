<?php 

 $titulo = $node->title;    
 $field_descripcion_corta_generica = $node->field_descripcion_corta_generica['und']['0']['value']; 
 $field_contenido_generica = $node->field_contenido_generica['und']['0']['value']; 
 $field_foto_generica_admision = $node->field_image['und']['0']['uri']; 
 $field_tiene_formulario = $node->field_tiene_formulario['und']['0']['value']; 
 $field_calednario = $node->field_calednario['und']['0']['value']; 
 $link_formulario = $node->field_link_a_formulario['und']['0']['value']; 
 $iconos = $node->field_texo['und']; 
 $texto_cuadros = $node->field_cuerpo['und']; 
 $anotaciones_cuadros = $node->field_nombre['und']; 
 $costos_temarios = $node->field_contenido['und'][0]['value']; 
 $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
 $titulo = strtr( $titulo, $unwanted_array );

?>

<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php $end = end((explode('/', $url))); ?>


<div class="container-sm mb-14">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php if ($field_foto_generica_admision!='') { ?>
		<img src="<?php print image_style_url($image_style, $field_foto_generica_admision); ?>" class="img-responsive mb-35" alt="<?php print $title ?>">
	<?php } ?>	
	<?php if ($field_descripcion_corta_generica!='') { ?>
		<p class="lead"><?php print $field_descripcion_corta_generica ?></p>
	<?php } ?>	
	<?php if ($field_contenido_generica!='') { ?>
		<?php print $field_contenido_generica ?>
		<div>
			<ul class="grid-list grid-list-3 grid-list-1-xs grid-list-hover size sm text-center pv-42 mb-ch-21 isotope-grid">
				<?php foreach ($texto_cuadros as $key => $texto_cuadro) : ?>
				<li><div><div class="mb-7 size lg text-primary <?php print $iconos[$key]['value']; ?>"></div><span><?php print $texto_cuadro['value']; ?></span></div></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php foreach ($anotaciones_cuadros as $key => $anotaciones_cuadro) : ?>
		<p><?php print $anotaciones_cuadro['value']; ?></p>
		<?php endforeach; ?>
	<?php } ?>
	<?php print $costos_temarios; ?>
</div>

<div class="container-sm mb-35">	
	<?php print $field_calednario ?>
</div>

<?php if ($field_tiene_formulario == "Si-carreras") { ?>
<div class="container-sm form-custom mt-35"> 
	<h3><?php print t("For more information:") ?></h3>
	<?php if (in_array($node->nid, array(40, 429))): ?>
	<?php 
	  // Renderizar bloque
	  $blockObject = block_load('netsuite_form_builder', 'talks_utec_pre_grado');
	  $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
	  print drupal_render($block);
	?>
	<?php elseif (in_array($node->nid, array(344, 440))): ?>
	<?php 
	  // Renderizar bloque
	  $blockObject = block_load('netsuite_form_builder', 'information_request_rank');
	  $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
	  print drupal_render($block);
	?>
	<?php elseif (in_array($node->nid, array(512, 761))): ?>
	<?php 
	  // Renderizar bloque
	  $blockObject = block_load('netsuite_form_builder', 'school_information_request');
	  $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
	  print drupal_render($block);
	?>
	<?php elseif (in_array($node->nid, array(345, 432))): ?>
	<?php 
	  // Renderizar bloque
	  $blockObject = block_load('netsuite_form_builder', 'external_information_request_tra');
	  $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
	  print drupal_render($block);
	?>
	<?php endif; ?>
</div>	
<?php } ?>

<?php if ($field_tiene_formulario == "Si") { ?>
<div class="container-sm form-custom">
	<h3><?php print t("For more information:") ?></h3>
	<?php 
	  // Renderizar bloque
	  $blockObject = block_load('netsuite_form_builder', '');
	  $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
	  print drupal_render($block);
	?>
</div>
<?php } ?>

<?php if ($field_tiene_formulario == "si alto rendimiento") { ?>
<div class="container-sm form-custom">
	<h3><?php print t("For more information:"); ?></h3>
	<?php if (in_array($node->nid, array(1220, 1211))): ?>
	<?php 
	  // Renderizar bloque
	  $blockObject = block_load('netsuite_form_builder', 'information_request_high_perform');
	  $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
	  print drupal_render($block);
	?>
	<?php endif; ?>
</div>
<?php } ?>

<?php if ($field_tiene_formulario == "si examen de admision") { ?>
<div class="container-sm form-custom">
	<h3><?php print t("For more information:") ?></h3>
	<?php if (in_array($node->nid, array(1212, 1213))): ?>
	<?php 
	  // Renderizar bloque
	  $blockObject = block_load('netsuite_form_builder', 'information_request_review');
	  $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
	  print drupal_render($block);
	?>
	<?php elseif (in_array($node->nid, array(1335))): ?>
	<?php 
	  // Renderizar bloque
	  $blockObject = block_load('netsuite_form_builder', 'university_enrollment_aptitude');
	  $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
	  print drupal_render($block);
	?>
	<?php endif; ?>
</div>
<?php } ?>

<div id="section-scroll" class="hidden-sm hidden-xs">
  <div class="text-right pv-21 btn-apply animated">
    <a class="btn btn-primary uppercase atm-scroll-item" href="<?php print $link_formulario; ?>"><?php print t('Apply') ?></a> 
  </div>
</div>