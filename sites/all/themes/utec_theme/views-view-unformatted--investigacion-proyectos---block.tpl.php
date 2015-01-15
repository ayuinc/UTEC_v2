<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<h1 class="light">Proyectos</h1>
<div class="separator-gray separator-sm"></div>						
<div>
	<ul class="grid-list grid-list-2 list-hover list-hover-gray-light list-hover-unstyled">
		<?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?>
	</ul>
</div>