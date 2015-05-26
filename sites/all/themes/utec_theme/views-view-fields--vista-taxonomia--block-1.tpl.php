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
<?php $path_i18 = drupal_get_path_alias($path, $language->language); ?>
<?php if ($language->language != 'en'): ?>
<li class="banner size sm" data-href="<?php print $path_i18; ?>">
<?php elseif ($language->language == 'en'): ?>
<li class="banner size sm" data-href="<?php print '/'.$language->language.'/'.$path_i18; ?>">
<?php endif ?>
	<div class="banner-pic" style="background-image: url(<?php print $image ?>);"></div>
	<div class="banner-content">
		<div>
			<?php if ($language->language != 'en'): ?>
				<h2><a href="<?php print $path_i18; ?>"><?php print $title ?></a></h2>
			<?php elseif ($language->language == 'en'): ?>
				<h2><a href="<?php print '/'.$language->language.'/'.$path_i18; ?>"><?php print $title ?></a></h2>
			<?php endif ?>
			<em class="block"><?php print $user_name ?></em>
			<small class="text-gray"><?php print $user_charge ?></small>
		</div>
		<div class="flex-space-between mt-14">
			<div class="left">
				<a href="<?php print $path ?>" class="btn btn-sm btn-primary btn-outline see-more">Leer más</a>
			</div>
		</div>
	</div>
</li>