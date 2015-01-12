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
kpr($fields);
<li class="banner banner-label-bottom mb-14 ml-0" data-href="<?php print $path ?>">
	<div class="banner-pic" style="background-image: url(<?php print $image?>);">
		<div class="banner-label bg-primary text-white"><span><?php print $category ?></span></div>
	</div>
	<div class="banner-content">
		<div>
			<h2><a href="#"><?php print $title ?></a></h2>
			<em class="text-primary">27 octubre 2014</em>
			<p class="lead"><?php print $texto_corto ?></p>
		</div>
	</div>
</li>