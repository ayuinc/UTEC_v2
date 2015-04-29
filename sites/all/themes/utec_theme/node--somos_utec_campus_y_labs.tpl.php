<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/campus-labs/'); ?>
<?php $title = $node->title; ?>  
<?php $field_introduccion_campus = $node->field_introduccion_campus['und']['0']['value']; ?>
<?php $field_foto_campus = $node->field_image['und']['0']['uri']; ?>
<?php $field_contenido_campus = $node->field_contenido_campus['und']['0']['value']; ?>
<?php $field_introduccion_labs = $node->field_introduccion_labs['und']['0']['value']; ?>
<?php $field_foto_labs = $node->field_image['und']['0']['uri']; ?>
<?php $field_contenido_labs = $node->field_contenido_labs['und']['0']['value']; ?>

<div class="container-sm">
	<h1 class="light"><?php print t('Campus and Labs') ?></h1>
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

