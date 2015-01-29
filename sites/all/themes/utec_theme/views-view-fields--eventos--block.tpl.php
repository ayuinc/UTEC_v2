<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $texto_corto = $fields['field_texto_corto']->content;
  $dia = $fields['field_dia']->content;
  $mes = $fields['field_mes']->content;
	$lugar = $fields['field_lugar']->content;
	$path = $fields['path']->content;
  $url = drupal_get_path_alias($path, $language->language);
  //kpr($fields);
?>

<li data-href="<?php print $url; ?>">
  <div class="date"><div class="num"><?php print $dia ?></div>
  <div class="month"><?php print $mes ?></div></div>
  <div>
    <h5 class="thin"><?php print $texto_corto ?></h5>
  </div>
</li>