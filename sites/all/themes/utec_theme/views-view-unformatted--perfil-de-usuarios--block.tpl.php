<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<div class="bg-img-block bg-img-block-lg flex-middle" style="background-image: url(assets/img/bg-header-3.jpg); background-color:#000;">
	<div class="container-sm text-center text-white">
		<?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?>
	</div>
</div>