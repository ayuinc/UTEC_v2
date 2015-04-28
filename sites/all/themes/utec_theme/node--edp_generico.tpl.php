<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/edp-generico/'); ?>

<?php $titulo = $node->title; ?>   
<?php $body = $node->body['und']['0']['value']; ?>
<?php $field_fotos_edp_generico = $node->field_image['und']['0']['uri']; ?>

<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php $end = end((explode('/', $url))); ?>

<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php if ($field_fotos_edp_generico!='') { ?>
		<img src="<?php print image_style_url($image_style, $field_fotos_edp_generico); ?>" class="img-responsive mb-35" alt="<?php print $title ?>">
	<?php } ?>	
	<?php print $body ?>	
</div>