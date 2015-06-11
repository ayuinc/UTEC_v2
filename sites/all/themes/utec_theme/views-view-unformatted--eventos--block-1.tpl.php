<div class="container-sm">
  <h2 class="light"><?php print $view->get_title(); ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="pv-ch-42 lead-ch p-ch-gray">
    <ul class="grid-list grid-list-2 grid-list-hover grid-list-hover-calendar grid-list-hover-left mb-ch-21">
      <?php foreach ($rows as $id => $row): ?>
        <?php print $row;?>
      <?php endforeach; ?>
    </ul>
  </div>
</div>