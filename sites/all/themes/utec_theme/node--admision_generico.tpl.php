<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/admision-generico/'); ?>

<?php $titulo = $node->title; ?>   
<?php $field_descripcion_corta_generica = $node->field_descripcion_corta_generica['und']['0']['value']; ?>
<?php $field_contenido_generica = $node->field_contenido_generica['und']['0']['value']; ?>
<?php $field_foto_generica_admision = $node->field_foto_generica_admision['und']['0']['filename']; ?>

<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php if ($field_descripcion_corta_generica!='') { ?>
		<p class="lead"><?php print $field_descripcion_corta_generica ?></p>
	<?php } ?>
	<?php if ($field_foto_generica_admision!='') { ?>
		<img src="<?php print('/'.$pathfile.$field_foto_generica_admision)?>" class="img-responsive mb-35">
	<?php } ?>	
	<?php if ($field_contenido_generica!='') { ?>
		<p class="lead text-gray mb-42"><?php print $field_contenido_generica ?></p>
	<?php } ?>	
</div>

