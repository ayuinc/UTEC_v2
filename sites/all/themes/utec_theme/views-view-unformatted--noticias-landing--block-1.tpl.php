<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

  <div>
    <h3 class="text-primary">Últimas noticias</h3>
  </div>
  <ul class="grid-list grid-list-2 grid-list-1-xs isotope-grid">
    <?php foreach ($rows as $id => $row): ?>
      <?php print $row;?>
    <?php endforeach; ?>
  </ul>
  <div class="text-right">
    <a href="#" class="btn btn-lg btn-outline btn-gray see-more uppercase light">Ver todas las noticias</a>
  </div>
</div>  