<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/investigacion-proyectos');

	 		
	$texto = $node->field_texto['und']['0']['value'];	
	
	kpr($node);
?>


	<h3><?php print $texto ?></h3>	



