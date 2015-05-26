<?php 

	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_image']->content;
	$category = $fields['field_categor_a']->content;
	$texto_corto = $fields['field_texto_corto']->content;
	$path = $fields['path']->content;
	$user_id = $fields['uid']->content;

?>

	<img src="<?php print $image ?>" alt="<?php print $title ?>">
	<h2 class="h3 light text-gray"><a href="<?php print $path; ?>" class="banner-titulo"><?php print $title ?></a></h2>
	<p class="text-gray"><?php print $texto_corto ?></p>