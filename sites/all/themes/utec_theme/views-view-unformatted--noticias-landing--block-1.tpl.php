<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

  <ul class="grid-list grid-list-2 grid-list-1-xs isotope-grid list-hover list-hover-unstyled">
    <?php foreach ($rows as $id => $row): ?>
      <?php print $row;?>
    <?php endforeach; ?>
  </ul>
</div>  