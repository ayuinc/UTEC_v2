<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_imagen']->content;
	$category = $fields['field_categor_a']->content;
	$texto_corto = $fields['field_texto_corto']->content;
	$path = $fields['path']->content;
	$user_id = $fields['uid']->content;
	$created = $fields['created']->content;

	$blogger_id = $fields['field_blogger']->content;
	$blogger = user_load($blogger_id);
	$user_name = $blogger->name;
	$user_image = $blogger->picture->filename;
	$user_charge = $blogger->field_descripci_n['und']['0']['value'];

	kpr($fields);
?>
<li class="banner size sm" data-href="<?php print $path ?>">
	<div class="banner-pic" style="background-image: url(<?php print $image ?>);"></div>
	<div class="banner-content">
		<div>
			<h2><a href="#"><?php print $title ?></a></h2>
			<em class="block"><?php print $user_name ?></em>
			<small class="text-gray"><?php print $user_charge ?></small>
		</div>
		<div class="flex-space-between mt-14">
			<div class="left">
				<a href="<?php print $path ?>" class="btn btn-sm btn-primary btn-outline see-more">Leer más</a>
			</div>
			<div class="right">
				<ul class="social-links">
					<li><a href="#" class="icon-footer-facebook"></a></li>
					<li><a href="#" class="icon-footer-twitter"></a></li>
					<li><a href="#" class="icon-footer-email"></a></li>
					<li><a href="#" class="icon-footer-plus"></a></li>
				</ul>
			</div>
		</div>
	</div>
</li>