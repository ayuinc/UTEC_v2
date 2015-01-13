<?php 
	global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$name = $fields['name']->content;
	$mail = $fields['mail']->content;
	$picture = $fields['picture']->content;
	$descripcion = $fields['field_descripci_n']->content;
	$resenia = $fields['field_rese_']->content;
	$twitter = $fields['field_twitter']->content;

?>

<div>
	<?php print $picture ?>
</div>
<h3 class="thin"><?php print $name ?></h3>
<a href="#" rel="nofollow" class="block"><em><?php if($twitter){print $twitter;} else print $mail;  ?></em></a>
<p>Profesor de <a href="#"><?php print $descripcion ?></a> a Tiempo Completo</p>
<p><?php print $resenia ?></p>