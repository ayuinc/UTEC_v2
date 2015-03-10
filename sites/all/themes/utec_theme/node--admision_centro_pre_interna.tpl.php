<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/centro-pre-interna/');

	$titulo = $node->title;
	$cuerpo = $node->body['und']['0']['value'];
	$imagen = $node->field_image['und']['0']['filename'];
	$field_foto_centro_pre = $node->field_foto_centro_pre['und']['0']['filename'];
	$link_formulario = $node->field_link_a_formulario['und']['0']['value'];	

?>
<div class="container-sm">
	<h1 class="light"><?php print $titulo ?></h1>
	<div class="separator-gray separator-lg"></div>
	<div class="pv-7">
		<img src="<?php print('/'.$pathfile.'centro-pre-interna/'.$field_foto_centro_pre)?>" class="img-responsive" alt="<?php print $titulo ?>">
	</div>	
	<div class="pv-42">
		<?php print $cuerpo ?>
	</div>
</div>
<div id="section-scroll" class="hidden-sm hidden-xs">
  <div class="text-right pv-21 btn-apply animated">
    <a class="btn btn-primary uppercase atm-scroll-item" href="<?php print $link_formulario; ?>"><?php print t('Contact') ?></a> 
  </div>
</div>
