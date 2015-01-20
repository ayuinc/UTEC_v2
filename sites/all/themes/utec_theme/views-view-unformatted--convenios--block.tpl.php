<?php 

?>

  <div class="container-sm">
    
		<?php if ($language->prefix == 'es'): ?>
		<h1 class="light">Convenios de Intercambio</h1>
		<?php elseif ($language->prefix == 'en'): ?>
		<h1 class="light">Alliances</h1>
		<?php endif ?>    
    <div class="separator-gray separator-sm"></div>
    <p class="text-justify"><?php print t('Your admission to UTEC means more than an opportunity to attend one of the best engineering schools in Latin America.  We have an established international network of partner universities, companies, and organizations that includes some of the best academic institutions in the world.') ?></p>
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