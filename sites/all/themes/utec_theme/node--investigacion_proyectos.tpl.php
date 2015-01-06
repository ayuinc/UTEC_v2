<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;
	$investigador = $node->field_investigador['und']['0']['value'];		 		
	$tipo = $node->field_tipo_['und']['0']['value'];		 		
	$departamento = $node->field_departamento['und']['0']['value'];		 		
	$publicado = $node->field_publicado_en['und']['0']['value'];		 		
	$anio = $node->field_a_o['und']['0']['value'];
	$link = $node->field_link['und']['0']['value'];
	
	// print_r($node);
?>

<h3><a href="<?php print $link ?>" target="_blank"><?php print $titulo ?></a></h3>
<div><span>Investigador: <?php print $investigador ?></span><span>Año: <?php print $anio ?></span></div>
<div><span>Tipo: <?php print $tipo ?></span><span>Departamento: <?php print $departamento ?></span></div>
<div><span>Publicado en: <?php print $publicado ?></span></div>








