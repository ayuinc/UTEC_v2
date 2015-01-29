<div class="container-sm">
  <h1 class="light"><?php print t('Other Events'); ?></h1>
  <div class="separator-gray separator-sm"></div>
  <div class="pv-ch-42 lead-ch p-ch-gray">
    <ul class="grid-list grid-list-2 grid-list-hover grid-list-hover-calendar grid-list-hover-left mb-ch-21">
      <?php foreach ($rows as $id => $row): ?>
        <?php print $row;?>
      <?php endforeach; ?>
    </ul>
  </div>
</div>