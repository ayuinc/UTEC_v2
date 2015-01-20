<?php 

?>

  <div class="container-sm">
    <h1 class="light"><?php print t('Alliances') ?></h1>
    <div class="separator-gray separator-sm"></div>
    <h3 class="text-justify"><?php print t('Your admission to UTEC means more than an opportunity to attend one of the best engineering schools in Latin America.  We have an established international network of partner universities, companies, and organizations that includes some of the best academic institutions in the world.') ?></h3>
  </div>
  <div class="container pv-ch-42">
    <div>
      <ul class="grid-list grid-list-3 grid-list-1-xs grid-list-hover grid-list-hover-white">
				<?php foreach ($rows as $id => $row): ?>
			    <?php print $row;?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>