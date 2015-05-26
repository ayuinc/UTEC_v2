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
<li class="banner size sm ban-titulo" data-href="<?php print $path ?>">
	<div class="banner-pic" style="background-image: url(<?php print $image ?>);"></div>
	<div class="banner-content">
		<div>
			<h2 class="h2"><a href="<?php print $path ?>" class="banner-titulo"><?php print $title ?></a></h2>
			<em class="block"><?php print $user_name ?></em>
			<small class="text-gray"><?php print $user_charge ?></small>
		</div>
		<div class="flex-space-between mt-14">
			<div class="left">
			<?php if ($language->language != 'en'): ?>
				<a class="btn btn-sm btn-primary btn-outline see-more">Leer más</a>
			<?php elseif ($language->language == 'en'): ?>
				<a class="btn btn-sm btn-primary btn-outline see-more">Read more</a>
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
</li>