<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
	<div>
    <h3 class="text-primary"><?php print $view->get_title(); ?></h3>
  </div>
  <ul class="grid-list grid-list-2 grid-list-1-xs isotope-grid list-hover list-hover-unstyled">
    <?php foreach ($rows as $id => $row): ?>
      <?php print $row;?>
    <?php endforeach; ?>
  </ul>
</div>  