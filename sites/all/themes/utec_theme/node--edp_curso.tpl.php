<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;	
	$sub_titulo = $node->field_subtitulo['und']['0']['value'];		 		
	$cuerpo = $node->body['und']['0']['value'];	
	$imagen = $node->field_image['und']['0']['filename'];	
	$texto_imagen = $node->field_texto_imagen['und']['0']['value'];
	$fecha = $node->field_fecha['und']['0']['value'];		 		
	$hora = $node->field_hora['und']['0']['value'];		 		
	$lugar = $node->field_lugar['und']['0']['value'];		 		
  $obejticos = $node->field_objetivos['und']['0']['value'];	
  $dirigido = $node->field_dirigido_a['und']['0']['value'];	
  $profesores = $node->field_profesor['und']['0']['value'];
?>

<li data-href="//">
	<div>
		<img src="<?php print('/'.$pathfile.$imagen)?>" alt="#" class="img-responsive">
	</div>
	<div>
		<h3 class="bold"><?php print $titulo ?></h3>
		<h3><?php print $sub_titulo ?></h3>
	</div>
</li>

