<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/investigacion-proyectos');

	 		
	$texto = $node->body['und']['0']['value'];	

?>


	<h3><?php print $texto ?></h3>	



