<?php 
	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_imagen']->content;
	$category = $fields['field_categor_a']->content;
	$texto_corto = $fields['field_texto_corto']->content;
	$path = $fields['path']->content;
	$user_id = $fields['uid']->content;

?>

	<img src="<?php print $image ?>" alt="..." height="479" width="720">
	<h3 class="light"><a href="<?php print $path; ?>"><em><?php print $title ?></em></a></h3>
	<p class="text-gray"><?php print $texto_corto ?></p>