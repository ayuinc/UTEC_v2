<?php 
	global $base_url;
  global $theme_path;
  global $language;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$name = $fields['title']->content;
	$eventos = explode(" ", $fields['field_texo']->content);
	$fechas = explode(" ", $fields['field_fecha']->content);
  // kpr($fields['field_texo']);

?>

<tr>
	<td class="highlight"><?php print $name; ?></td>
	<?php foreach ($eventos as $key => $evento) : ?>
		<td><?php print $evento; ?></td>
		<td><?php print $fechas[$key]; ?></td>
	<?php endforeach; ?>
</tr>
















