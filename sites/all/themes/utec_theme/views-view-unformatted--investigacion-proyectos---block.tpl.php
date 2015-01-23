<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<div class="container-sm mb-35">
	<h1 class="light"><?php print t('Projects') ?></h1>
	<div class="separator-gray separator-lg"></div>
		<?php foreach ($rows as $id => $row): ?>
	    <?php print $row; break?>

		<?php endforeach; ?>
		<ul class="grid-list grid-list-2 grid-list-1-xs mb-ch-21 isotope-grid normalize-text list-hover list-hover-gray-lighter p-ch-gray">
	    <?php foreach ($rows as $id => $row): ?>
		    <?php if($id != 0) : ?>
			    <?php print $row;?>
			  <?php endif ?>  
			<?php endforeach; ?>
		</ul>
</div>