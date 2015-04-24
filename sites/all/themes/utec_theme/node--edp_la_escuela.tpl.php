<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/edp-la-escuela/'); ?>

<?php $titulo = $node->title; ?>   
<?php $body = $node->body['und']['0']['value']; ?>
<?php $field_fotos = $node->field_image['und']['0']['uri']; ?>


<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php if ($field_fotos!='') { ?>
		<img src="<?php print file_create_url($field_fotos); ?>" class="img-responsive mb-35" alt="<?php print $title ?>">
	<?php } ?>
	<?php print $body ?>		
</div>

