<?php 
	global $base_url;
  global $theme_path;
  global $language;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

  //kpr($fields);
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
	$descripcion_autoridad_ingles = $fields['field_descripci_n_autoridad_ingl']->content;

	$resenia_autoridad = $fields['field_rese_a_autoridad']->content;
	$resenia_autoridad_ingles = $fields['field_rese_a_autoridad_ingles']->content;

	$rol = $fields['rid']->content;
	//kpr($fields);
?>

<div>
	<?php print $picture ?>
</div>
<h1 class="thin h3"><?php print $name ?></h1>
<a href="#" rel="nofollow" class="block"><em><?php print $twitter; ?></em></a>

<?php if (($name!='Juan Incháustegui Vargas') AND ($name!='Eduardo Hochschild Beeck') AND ($name!='Mario Rivera Orams') AND ($name!='Dionisio Romero Paoletti') AND ($name!='Roque Benavides') AND ($name!='Oscar Espinosa Bedoya') AND ($name!='Oscar Espinosa Bedoya') AND ($name!='Kim Vandiver') AND ($name!='José Graña Miró Quesada') AND ($name!='Carlos Rodríguez-Pastor') AND ($name!='Mario Testino') AND ($name!='Oscar González Rocha') AND ($name!='Vito Rodríguez Rodríguez') AND ($name!='Ricardo Rizo Patrón de la Piedra') AND ($name!='Javier Durand Planas') AND ($name!='Yamal Zaidan Saba')) { ?>
<a href="mail:<?php print $mail ?>" rel="nofollow" class="block cc"><em><?php print $mail ?></em></a>
<?php } ?>


<?php if ($language->language  != 'en'): ?>
<p><?php print $descripcion ?></p>
<p><?php print $resenia ?></p>

<p><?php print $descripcion_consejo ?></p>
<p><?php print $resenia_consejo ?></p>

<p><?php print $descripcion_autoridad ?></p>
<p><?php print $resenia_autoridad ?></p>
<?php elseif ($language->language == 'en'): ?>
<p><?php print $descripcion_ingles ?></p>
<p><?php print $resenia_ingles ?></p>

<p><?php print $descripcion_consejo_ingles ?></p>
<p><?php print $resenia_consejo_ingles ?></p>

<p><?php print $descripcion_autoridad_ingles ?></p>
<p><?php print $resenia_autoridad_ingles ?></p>
<?php endif ?>
















