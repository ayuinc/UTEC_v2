<div class="container-sm">
  <h1 class="light"><?php print t('Executive Education Faculty') ?></h1>
  <div class="separator-gray separator-lg"></div>
  <p class="lead text-gray"><?php //print $field_introduccion_autoridades ?></p>
  <ul class="grid-list grid-list-3 grid-list-1-xs isotope-grid grid-list-item-height grid-list-anchors pv-21 text-center" style="position: relative; height: 3080px;">
  	<?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
	  <?php endforeach; ?>
	</ul>
</div>	