<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;
	$cuerpo = $node->body['und']['0']['value'];
	$imagen = $node->field_image['und']['0']['filename'];
	$infografia = $node->field_infografia['und']['0']['filename'];
?>
<div class="container-sm">
	<h1 class="light"><?php print $titulo ?></h1>
	<div class="separator-gray separator-lg"></div>
	<div class="pv-42 lead-ch">
		<h3><?php print $cuerpo ?></h3>
	</div>
	<p><?php print $node->field_carrera_referencia["und"]["0"]["taxonomy_term"]["name"] ?></p>
	<!-- <div class="mb-63">
		<img src="<?php //print('/'.$pathfile.$imagen)?>" class="img-responsive">
	</div> -->
	<div class="mb-63">
		<img src="<?php print('/'.$pathfile.$infografia)?>" class="img-responsive">
	</div>
</div>
