<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php //die(print_r($fields)); ?>
<?php 
	// kpr($fields); 
	$title = $fields['title']->content;
	$field_descripcion_corta_pregunta = $fields['field_descripcion_corta_pregunta']->content;
	global $count;
?>
<?php //die(var_dump($count)); ?>

		<li>
			<h5><?php print $title ?></h5>
			<p><?php print $field_descripcion_corta_pregunta ?></p>
		</li>
