<?php

	$image = $fields['field_image']->content;
	$title = $fields['title']->content;
	$cargo = $fields['field_texo']->content;
	$curso = $fields['field_nombre']->content;
	$body = $fields['body']->content;
	// kpr($view->display['block']->display_options['header']['area']['content']);
?>
 			 
<li class="mb-ch-14">
	<div class="grid-list-pic"><img src="<?php print $image ?>" class="img-circle"></div>
	<div>
		<a><?php print $title ?></a>
	</div>
	<p><?php print $cargo ?></p>				
	<p><?php print $curso ?></p>				
	<p><?php print $body ?></p>
</li>			       						