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
	$created = $fields['created']->content;

?>
<li class="banner banner-label-bottom mb-14 ml-0 banner-titulo" data-href="<?php print $path ?>">
	<div class="banner-pic" style="background-image: url(<?php print $image?>);">
		<div class="banner-label bg-gray-darker text-white"><span><?php print $category ?></span></div>
	</div>
	<div class="banner-content">
		<div>
			<h2 class="h3"><a href="<?php print $path ?>" class="banner-titulo"><?php print $title ?></a></h2>
			<em><?php print $created ?></em>
			<p class="text-gray"><?php print $texto_corto ?></p>
		</div>
	</div>
</li>
