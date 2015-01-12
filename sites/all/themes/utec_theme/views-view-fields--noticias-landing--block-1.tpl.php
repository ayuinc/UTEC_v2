<?php 
global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_imagen']->content;
	$category = $fields['field_categor_a']->content;
	$texto_corto = $fields['field_texto_corto']->content;
	$path = $fields['path']->content;
	$user_id = $fields['uid']->content;

?>

<div class="item">
	<img src="<?php print $image ?>" alt="..." height="509" width="509">
	<h3 class="light"><em><?php print $title ?></em></h3>
	<p class="text-gray"><?php print $texto_corto ?></p>
	<a href="<?php print $path; ?>" class="btn btn-primary btn-outline see-more">Ver más</a>
</div>
