<?php 
	global $language;
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

	//kpr($fields);
?>
<div class="banner banner-titulo" data-href="<?php print $path ?>">
	<div class="banner-pic" style="background-image: url(<?php print $image; ?>);">
	</div>
	<div class="banner-content">
		<div>
			<h3 class="h2"><a href="#"><?php print $title ?></a></h3>
			<em class="text-primary"><?php print $created ?></em>
			<p class="lead"><?php print $texto_corto ?></p>
		</div>
		<div class="flex-space-between pb-21">
			<div class="left">
				<?php if ($language->language != 'en'): ?>
				<a href="<?php print $path ?>" class="btn btn-sm btn-primary btn-outline see-more banner-titulo">Leer más</a>
				<?php elseif ($language->language == 'en'): ?>
				<a href="/en/<?php print $path ?>" class="btn btn-sm btn-primary btn-outline see-more banner-titulo">Read more</a>
				<?php endif ?>	
			</div>
			<div class="right">
				<ul class="social-links">
					<!-- Go to www.addthis.com/dashboard to customize your tools -->
					<div class="addthis_sharing_toolbox"></div>
				</ul>
			</div>
		</div>
	</div>
</div>