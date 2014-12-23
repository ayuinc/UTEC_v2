<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php 
	$title = $fields['title']->content;
	$field_descripcion_corta_pregunta = $fields['field_descripcion_corta_pregunta']->content;
?>

<?php print $title ?>
<?php print $field_descripcion_corta_pregunta ?>

