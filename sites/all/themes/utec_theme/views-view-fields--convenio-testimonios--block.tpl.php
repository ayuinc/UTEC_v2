<?php

	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_image']->content;
	$category = $fields['field_categor_a']->content;
	$texto_corto = $fields['field_texto_corto']->content;
	$path = $fields['path']->content;
	$user_id = $fields['uid']->content;
	$blogger_id = $fields['field_blogger']->content;
	$blogger = user_load($blogger_id);
	$user_name = $blogger->name;
	$user_image = $blogger->picture->filename;
	$user_charge = $blogger->field_descripci_n['und']['0']['value'];
	// kpr($view->display['block']->display_options['header']['area']['content']);
?>

<div class="grid-list-pic">
	<img src="/sites/default/files/pictures/picture-26-1419635360.jpg" alt="Eduardo Hochschild Beeck" width="98px" height="auto" class="img-circle">
</div>
<div>
	<a href="/autoridades/eduardo-hochschild-beeck">Eduardo Hochschild Beeck</a>
	<span>Presidente del Consejo Directivo</span>					
</div>
