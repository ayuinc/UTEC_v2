<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;	 		
	$cuerpo = $node->body['und']['0']['value'];
	$pdf = $node->field_archivo['und']['0']['filename'];

	//kpr($node);
?>
<div class="container-sm">
	<h1 class="light"><?php print $titulo ?></h1>
	<div class="separator-gray separator-sm"></div>
	<div class="pv-ch-42 lead-ch p-ch-gray">
		<p><?php print $cuerpo ?></p>
	</div>
	<div class="pv-ch-42 lead-ch p-ch-gray">
		<p>Ver el PDF:</p>
		<p><a href="<?php '/'.$pathfile.$pdf ?>"><?php print $pdf ?></a></p>
	</div>
</div>
