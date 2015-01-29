<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/centro-pre-interna/');

	$titulo = $node->title;
	$cuerpo = $node->body['und']['0']['value'];

?>

<div class="container-sm">
  <h1 class="light"><?php print t('Events'); ?></h1>
  <div class="separator-gray separator-sm"></div>
  <div><?php print $cuerpo ?></div>
</div>

