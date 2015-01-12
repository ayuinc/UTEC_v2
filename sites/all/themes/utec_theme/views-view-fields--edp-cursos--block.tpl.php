<?php
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/'); 
	// $title = $fields['title']->content;
	// $body = $fields['body']->content;
	// $image = $fields['field_imagen']->content;
	// $category = $fields['field_categor_a']->content;
	// $texto_corto = $fields['field_texto_corto']->content;
	// $path = $fields['path']->content;
	// global $count;

	$titulo = $fields['title']->content;
	$sub_titulo = $fields['field_subtitulo']->content;		 		
	// $cuerpo = $node->body['und']['0']['value'];	
	$imagen = $fields['field_image']->content;
<<<<<<< HEAD
	die(print_r($imagen));
=======
	die(print_r($fields['field_image']));
>>>>>>> 4c523a6777b78d3c56e733d7c55813494bbd754b
	$path = $fields['path']->content;	
	// $texto_imagen = $node->field_texto_imagen['und']['0']['value'];
	// $fecha = $node->field_fecha['und']['0']['value'];		 		
	// $hora = $node->field_hora['und']['0']['value'];		 		
	// $lugar = $node->field_lugar['und']['0']['value'];		 		
 //  $obejticos = $node->field_objetivos['und']['0']['value'];	
 //  $dirigido = $node->field_dirigido_a['und']['0']['value'];	
 //  $profesores = $node->field_profesor['und']['0']['value'];

?>
<li data-href="<?php print $path; ?>">
	<div>
		<?php if ($imagen == '') :?>
			<img src="<?php print('/'.$pathfile)?>img.png" alt="#" class="img-responsive">
		<?php else :?>
			<img src="<?php print('/'.$pathfile.$imagen)?>" alt="#" class="img-responsive">
		<?php endif; ?>	
	</div>
	<div>
		<h3 class="bold"><?php print $titulo ?></h3>
		<h3><?php print $sub_titulo ?></h3>
	</div>
</li>








