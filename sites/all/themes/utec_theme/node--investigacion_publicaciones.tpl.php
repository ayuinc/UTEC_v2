<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/investigacion-publicaciones');

	$titulo = $node->title;
	$investigador = $node->field_investigador['und']['0']['value'];		 		
	$tipo = $node->field_tipo_['und']['0']['value'];		 		
	$departamento = $node->field_departamento['und']['0']['value'];		 		
	$publicado = $node->field_publicado_en['und']['0']['value'];		 		
	$anio = $node->field_a_o['und']['0']['value'];
	$link = $node->field_link['und']['0']['value'];
	$field_pdf_publicaciones_= $node->field_pdf_publicaciones_['und']['0']['value']['filename'];
	
	//print_r($node);
?>

<li>
	<h3><a href="<?php print $link ?>" target="_blank"><?php print $titulo ?></a></h3>
	<?php if ($investigador!='') { ?>
		<p><span class="lead bold mt-14">Investigador: </span><span class="lead"><?php print $investigador ?></span></p>
	<?php } ?>
	<?php if ($tipo!='') { ?>
		<p><span class="bold">Tipo: </span><span class="lead"><?php print $tipo ?></span></p>
	<?php } ?>
	<?php if ($departamento!='') { ?>
		<p><span class="bold">Departamento: </span><span class="lead"><?php print $departamento ?></span></p>
	<?php } ?>
	<?php if ($field_pdf_publicaciones_!='') { ?>
		<p><span class="bold">Descarga el PDF: </span><span class="lead"><?php print $field_pdf_publicaciones_ ?></span></p>
	<?php } ?>
	<?php if ($publicado!='') { ?>
		<p><span class="bold">Publicado en: </span><span class="lead"><?php print $publicado ?></span></p>
	<?php } ?>
</li>
<!-- <p><span class="lead bold">Año: </span><span class="lead"><?php print $anio ?></span></p> -->





