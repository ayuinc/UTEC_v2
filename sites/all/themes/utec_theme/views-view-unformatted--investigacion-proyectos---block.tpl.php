<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<div class="container-sm mb-35">
	<ul class="grid-list grid-list-2 grid-list-1-xs mb-ch-21 isotope-grid normalize-text list-hover list-hover-gray-lighter p-ch-gray">
    <?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?> 
		<?php endforeach; ?>
	</ul>
</div>