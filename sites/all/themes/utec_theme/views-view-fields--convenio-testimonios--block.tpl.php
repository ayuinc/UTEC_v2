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
	<h4 class="medium mb-0"><?php print $title ?></h4>
	<h5 class="text-gray mv-7"><?php print $cargo ?></h5>				
	<p class="text-primary mt-7"><?php print $curso ?></p>				
	<p><?php print $body ?></p>				
</div>
