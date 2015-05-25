<?php

	$titulo = $node->title;
	$cuerpo = $node->body['und']['0']['value'];
	$imagen = $node->field_image['und']['0']['filename'];
	$infografia = $node->field_image_2['und']['0']['uri'];

?>
<div class="container-sm">
	<h1 class="light"><?php print $titulo ?></h1>
	<div class="separator-gray separator-lg"></div>
	<div class="pv-42">
		<?php print $cuerpo ?>
	</div>
	<?php if ($infografia != '') { ?>
	<div class="mb-63">
		<img src="<?php print image_style_url($image_style_2, $infografia); ?>" class="img-responsive" alt="<?php print $titulo ?>">
	</div>
	<?php } ?>
</div>

