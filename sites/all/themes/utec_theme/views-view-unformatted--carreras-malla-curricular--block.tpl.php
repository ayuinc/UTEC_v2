<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<h3 class="thin lead">Malla curricular</h3>
	<div class="separator-gray separator-lg"></div>
	<h3 class="lead thin">Ciclo 2015 - I</h3>
	<div class="mb-ch-70">
    <?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?>
	</div>
