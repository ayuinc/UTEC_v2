<?php 
	$titulo = $node->title;   
 	$body = $node->body['und']['0']['value'];
 	$field_iframe = $node->field_iframe['und']['0']['value']; 
?>

<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php print $body ?>	
</div>
<div class="container-sm form-custom">
	<!--h3><?php //print t("Contact") ?></h3-->
	<?php 
	  // Renderizar bloque Bean
	  $blockObject = block_load('netsuite_form_builder', 'contact_utec_pre_grado');
	  $block = _block_get_renderable_array(_block_render_blocks(array($blockObject)));
	  print drupal_render($block);
	?>
</div>