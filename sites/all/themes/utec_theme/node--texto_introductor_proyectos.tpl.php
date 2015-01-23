<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/investigacion-proyectos');

	 		
	$texto = $node->field_texo['und']['0']['value'];	
	
	//print_r($node->field_tags);
?>


	<h3><?php print $texto ?></h3>	



