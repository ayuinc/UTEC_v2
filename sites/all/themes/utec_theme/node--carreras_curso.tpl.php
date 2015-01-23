<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$curso = $node->title;
	$area = $node->field_area['und']['0']['taxonomy_term']->tid;
	$creditos = $node->field_n_mero_creditos['und']['0']['value'];
	// print_r($node);

?>
<ul>
  <li class="CRD<?php print $creditos ?>" style="background-color: 
  <?php if ($area == '17'){
  	print '#8dc63f';
  }elseif ($area == '18'){
  	print '#ffdd00';
  }else print '#afdfe4'; ?>"></li>
  <li><?php print $curso; ?><br><?php print $creditos ?> CRD</li>
</ul>
