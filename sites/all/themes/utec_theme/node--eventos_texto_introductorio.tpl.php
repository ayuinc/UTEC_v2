<?php 

	$titulo = $node->title;
	$cuerpo = $node->body['und']['0']['value'];

?>

<div class="container-sm">
  <h1 class="light"><?php print t('Events'); ?></h1>
  <div class="separator-gray separator-sm"></div>
  <div class="mb-35"><?php print $cuerpo ?></div>
</div>

