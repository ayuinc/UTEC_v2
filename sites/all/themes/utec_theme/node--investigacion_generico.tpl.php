<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/investigacion-generico/'); ?>

<?php $title = $node->title; ?>  
<?php $field_introduccion_inv_generico = $node->field_introduccion_inv_generico['und']['0']['value']; ?>
<?php $field_contenido_inv_generico = $node->field_contenido_inv_generico['und']['0']['value']; ?>
<?php $field_foto_inv_generico = $node->field_foto_inv_generico['und']['0']['filename']; ?>

<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php $end = end((explode('/', $url))); ?>

<div class="container-sm mb-35">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead text-gray"><?php print $field_introduccion_inv_generico ?></p>
	<?php if ($field_foto_inv_generico!='') { ?>
		<img src="<?php print('/'.$pathfile.$field_foto_inv_generico)?>" class="img-responsive mb-35">
	<?php } ?>
	<?php print $field_contenido_inv_generico ?>
	
	<!--SOLO PARA RESPALDO-->
	<?php if ($end == 'respaldo') { ?>

	<?php } ?>
</div>