<div class="container-sm">
  <h1 class="light"><?php print t('Board of Directors') ?></h1>
  <div class="separator-gray separator-lg"></div>
  <ul class="grid-list grid-list-4 grid-list-1-xs grid-list-item-height grid-list-anchors pv-21 text-center">
		<?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
	  <?php endforeach; ?>
  </ul>	
</div>  