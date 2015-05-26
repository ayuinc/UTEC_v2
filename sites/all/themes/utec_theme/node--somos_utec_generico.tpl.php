<?php

	$title = $node->title;  
	$field_introduccion_su_generico = $node->field_introduccion_su_generico['und']['0']['value'];
	$field_contenido_su_generico = $node->field_contenido_su_generico['und']['0']['value'];
	$field_foto_su_generico = $node->field_image['und']['0']['uri'];

?>

<div class="container-sm mb-35">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead text-gray"><?php print $field_introduccion_su_generico ?></p>
	<?php if ($field_foto_su_generico!='') { ?>
		<img src="<?php print image_style_url($image_style, $field_foto_su_generico); ?>" class="img-responsive mb-35" alt="<?php print $title ?>">
	<?php } ?>
	<?php print $field_contenido_su_generico ?>
</div> 