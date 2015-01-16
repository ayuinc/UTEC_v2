<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	// $titulo = $node->title;	 		
	// $cuerpo = $node->body['und']['0']['value'];	
	// $imagen = $node->field_imagen['und']['0']['filename'];
	// $blogger_name = $node->field_blogger['und']['0']['entity']->name;
	// $blogger_cargo = $node->field_blogger['und']['0']['entity']->field_descripci_n['und']['0']['value'];
	// $created = date('d F Y', strtotime($node->created));
	// $addblock = module_invoke('addthis','block_view','addthis_block');

	kpr($node);
?>

