<?php 

	$titulo = $node->title;
	$cuerpo = $node->body['und']['0']['value'];
	$imagen = $node->field_image['und']['0']['uri'];

?>
<div class="container-sm">
	<h1 class="light"><?php print t('Graduate Profile') ?></h1>
	<div class="separator-gray separator-lg"></div>
	<div class="pv-42 lead-ch">
		<h3><?php print $cuerpo ?></h3>
	</div>
	<div class="mb-63">
		<img src="<?php print image_style_url($image_style, $imagen); ?>" class="img-responsive" alt="<?php print t('Graduate Profile') ?>">
	</div>
</div>

