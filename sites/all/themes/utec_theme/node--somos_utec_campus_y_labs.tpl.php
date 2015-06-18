<?php

	$title = $node->title;  
	$field_introduccion_campus = $node->field_introduccion_campus['und']['0']['value'];
	$field_foto_campus = $node->field_image['und']['0']['uri'];
	$field_contenido_campus = $node->field_contenido_campus['und']['0']['value'];
	$field_introduccion_labs = $node->field_introduccion_labs['und']['0']['value'];
	$field_foto_labs = $node->field_image_2['und']['0']['uri'];
	$field_contenido_labs = $node->field_contenido_labs['und']['0']['value']; 

?>

<div class="container-sm">
	<h1 class="light"><?php print $title; ?></h1>
	<div class="separator-gray separator-sm"></div>
	<div class="pb-49">
		<!--<h3 class="text-gray-darker"><?php print t('Campus') ?></h3>-->
		<p><?php print $field_introduccion_campus ?></p>
		<?php if ($field_foto_campus!='') { ?>
			<img src="<?php print image_style_url($image_style, $field_foto_campus); ?>" class="img-responsive pv-14" alt="<?php print t('Campus and Labs') ?>">
		<?php } ?>
		<p><?php print $field_contenido_campus ?></p>
		<h3 class="text-gray-darker"><?php print t('Labs') ?></h3>
		<p><?php print $field_introduccion_labs ?></p>
		<?php if ($field_foto_labs!='') { ?>
			<img src="<?php print image_style_url($image_style, $field_foto_labs); ?>" class="img-responsive pv-14" alt="<?php print t('Campus and Labs') ?>">
		<?php } ?>
		<p><?php print $field_contenido_labs ?></p>
	</div>
</div>

