<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/'); ?>
<?php $title = $node->title; ?>  
<?php $field_introduccion_campus = $node->field_introduccion_campus['und']['0']['value']; ?>
<?php $field_foto_campus = $node->field_foto_campus['und']['0']['value']; ?>
<?php $field_contenido_campus = $node->field_contenido_campus['und']['0']['value']; ?>
<?php $field_introduccion_labs = $node->field_introduccion_labs['und']['0']['value']; ?>
<?php $field_foto_labs = $node->field_foto_labs['und']['0']['value']; ?>
<?php $field_contenido_labs = $node->field_contenido_labs['und']['0']['value']; ?>

<div class="container-sm">
	<h1 class="light">Campus y laboratorios</h1>
	<div class="separator-gray separator-sm"></div>
	<div class="pv-ch-42 lead-ch p-ch-gray">
		<h3 class="text-gray-darker">Campus</h3>
		<h4><?php print $field_introduccion_campus ?></h4>
		<?php if ($field_foto_campus!='') { ?>
			<img src="<?php print('/'.$pathfile.$field_foto_campus)?>" class="img-responsive">
		<?php } ?>
		<p class="lead text-gray mb-35"><?php print $field_contenido_campus ?>
		<h3 class="text-gray-darker">Laboratorios</h3>
		<h4><?php print $field_introduccion_labs ?></h4>
		<?php if ($field_foto_labs!='') { ?>
			<img src="<?php print('/'.$pathfile.$field_foto_labs)?>" class="img-responsive">
		<?php } ?>
		<p class="lead text-gray mb-35"><?php print $field_contenido_labs ?>
	</div>
</div>
