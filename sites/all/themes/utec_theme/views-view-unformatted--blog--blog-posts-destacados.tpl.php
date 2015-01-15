<?php 
	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_imagen']->content;
	$category = $fields['field_categor_a']->content;
	$texto_corto = $fields['field_texto_corto']->content;
	$path = $fields['path']->content;
	$user_id = $fields['uid']->content;

	global $user;
	$user_fields = user_load($user_id);
	// print_r($user_fields);
	$user_name = $user_fields->name;
	$user_image = $user_fields->picture;
?>
<h3 class="light">Útlimos blogs</h3>
<div class="separator-gray separator-sm"></div>
<ul class="grid-list grid-list-2 row p-ch-7 mb-ch-21">
	<?php foreach ($rows as $id => $row): ?>
    <?php print $row;?>
	<?php endforeach; ?>
</ul>
<div>
	<a href="#" class="btn btn-custom btn-primary see-more uppercase">Ver todos</a>
</div>
