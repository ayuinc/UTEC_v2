<?php 

	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_image']->content;
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

?>
<div class="banner ban-titulo" data-href="<?php print drupal_get_path_alias($path, $language->language) ?>">
	<div class="banner-pic" style="background-image: url(<?php print $image; ?>);">
	</div>
	<div class="banner-content">
		<div>
			<h2 class="h2"><a href="<?php print drupal_get_path_alias($path, $language->language) ?>" class="banner-titulo"><?php print $title ?></a></h2>
			<em class="text-primary"><?php print $created ?></em>
			<p class="lead"><?php print $texto_corto ?></p>
		</div>
		<div class="flex-space-between pb-21">
			<div class="left">
				<?php if ($language->language != 'en'): ?>
				<a href="<?php print $path ?>" class="btn btn-sm btn-primary btn-outline see-more">Leer más</a>
				<?php elseif ($language->language == 'en'): ?>
				<a href="<?php print $path ?>" class="btn btn-sm btn-primary btn-outline see-more">Read more</a>
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