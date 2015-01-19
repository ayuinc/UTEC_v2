<?php 
	global $base_url;
  global $theme_path;
  global $language;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$name = $fields['name']->content;
	$mail = $fields['mail']->content;
	$picture = $fields['picture']->content;
	$descripcion = $fields['field_descripci_n']->content;
	$resenia = $fields['field_rese_a']->content;
	$descripcion_ingles = $fields['field_descripci_n_ingles']->content;
	$resenia_ingles = $fields['field_rese_a_ingles']->content;
	$twitter = $fields['field_twitter']->content;

?>

<div>
	<?php print $picture ?>
</div>
<h3 class="thin"><?php print $name ?></h3>
<a href="#" rel="nofollow" class="block"><em><?php if($twitter){print $twitter;} else print $mail;  ?></em></a>
<?php if ($language->prefix == 'en') : ?>
<p><?php print $descripcion_ingles ?></p>
<p><?php print $resenia_ingles ?></p>
<?php elseif ($language->prefix == 'es') : ?>
	<p><?php print $descripcion ?></p>
<p><?php print $resenia ?></p>
<?php endif; ?>