<?php 
	global $base_url;
  global $theme_path;
  global $language;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$name = $fields['name']->content;
	$mail = $fields['mail']->content;
	$picture = $fields['picture']->content;
	$twitter = $fields['field_twitter']->content;

	$descripcion = $fields['field_descripci_n']->content;
	$descripcion_ingles = $fields['field_descripci_n_ingles']->content;

	$resenia = $fields['field_rese_a']->content;
	$resenia_ingles = $fields['field_rese_a_ingles']->content;

	$descripcion_consejo = $fields['field_descripci_n_consejo_dir']->content;
	$descripcion_consejo_ingles = $fields['field_descripci_n_consejo_dir_in']->content;

	$resenia_consejo = $fields['field_rese_a_consejo']->content;
	$resenia_consejo_ingles = $fields['field_rese_a_consejo_ingles']->content;

	$descripcion_autoridad = $fields['field_descripci_n_autoridad']->content;
	$descripcion_autoridad_ingles = $fields['field_descripci_n_autoridad_ingles']->content;

	$resenia_autoridad = $fields['field_rese_a_autoridad']->content;
	$resenia_autoridad_ingles = $fields['field_rese_a_autoridad_ingles']->content;

	//kpr($fields);
?>

<div>
	<?php print $picture ?>
</div>
<h3 class="thin"><?php print $name ?></h3>
<a href="#" rel="nofollow" class="block"><em><?php if($twitter){print $twitter;} else print $mail;  ?></em></a>
<?php if ($language->language == 'en') : ?>
<p><?php print $descripcion_ingles ?></p>
<p><?php print $resenia_ingles ?></p>

<p><?php print $descripcion_consejo_ingles ?></p>
<p><?php print $resenia_consejo_ingles ?></p>

<p><?php print $descripcion_autoridad_ingles ?></p>
<p><?php print $resenia_autoridad_ingles ?></p>

<?php else : ?>
<p><?php print $descripcion ?></p>
<p><?php print $resenia ?></p>

<p><?php print $descripcion_consejo ?></p>
<p><?php print $resenia_consejo ?></p>

<p><?php print $descripcion_autoridad ?></p>
<p><?php print $resenia_autoridad ?></p>
<?php endif; ?>















