
  <div class="container-sm">
    <h1 class="light">
    <?php if ($language->language == 'en') { ?>
      Alliances
    <?php } elseif ($language->language  != 'en') { ?>
      Convenios de Intercambio
    <?php } ?>    
    </h1>
    <div class="separator-gray separator-sm"></div>
    <p class="text-justify"><?php print t('Your admission to UTEC means more than an opportunity to attend one of the best engineering schools in Latin America.  We have an established international network of partner universities, companies, and organizations that includes some of the best academic institutions in the world.') ?></p>
    <div>
      <ul class="grid-list grid-list-2 grid-list-1-xs grid-list-hover grid-list-hover-white">
				<?php foreach ($rows as $id => $row): ?>
			    <?php print $row;?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>  
</div>