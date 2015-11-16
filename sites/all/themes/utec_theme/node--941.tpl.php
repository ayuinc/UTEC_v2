<?php

	$titulo = $node->title;
	$titulo_usuario = $node->field_titulo_usuario['und']['0']['value'];
	$cuerpo = $node->body['und']['0']['value'];
	$mencion = $node->field_mencion['und']['0']['value'];
	$electivo = $node->field_electivo['und'];
?> 

<div class="container-sm mb-35">
	<h1 class="light"><?php print $titulo_usuario; ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead"></p>
</div>
<div class="container-sm form-custom">
<?php 
  // Renderizar bloque
  $blockObject = block_load('netsuite_form_builder', 'pre_enrollment_center');
  $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
  print drupal_render($block);
?>
</div>