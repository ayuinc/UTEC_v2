<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$curso = $node->title;
	$area = $node->field_area['und']['0']['value'];
	$creditos = $node->field_n_mero_creditos['und']['0']['value'];

?>
<ul>
  <li style="background-color: <?php if ?>"></li>
  <li><?php print $curso; ?></li>
</ul>

