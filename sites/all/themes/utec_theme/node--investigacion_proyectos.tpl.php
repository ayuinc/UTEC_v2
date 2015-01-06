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
	$estado = $node->field_estado'und']['0']['value'];
	$link = $node->field_link['und']['0']['value'];
	
	// print_r($node);
?>

<tr>
	<td class="highlight"><?php print $investigador ?></td>
	<td class="text-gray"><?php print $tipo ?></td>
	<td class="text-gray"><?php print $departamento ?></td>
	<td class="text-gray"><?php print $publicado ?></td>
	<td class="text-gray"><a href="<?php print $link ?>" target="_blank"><?php print $titulo ?></a></td>
	<td class="text-gray"><?php print $anio ?></td>
	<td class="text-gray"><?php print $estado ?></td>
</tr>








