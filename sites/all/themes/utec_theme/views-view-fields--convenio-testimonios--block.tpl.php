<?php

	$image = $fields['field_image']->content;
	$title = $fields['title']->content;
	$cargo = $fields['field_texo']->content;
	$curso = $fields['field_nombre']->content;
	$body = $fields['body']->content;
	// kpr($view->display['block']->display_options['header']['area']['content']);
?>

<div class="p-21">
	<img src="<?php print $image ?>" class="img-circle">
</div>
<div>
	<p><?php print $title ?></p>
	<p><?php print $cargo ?></p>				
	<p><?php print $curso ?></p>				
	<p><?php print $body ?></p>				
</div>
