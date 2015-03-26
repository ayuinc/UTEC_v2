<div class="container-sm">
  <h1 class="light"><?php print t('Executive Education Faculty') ?></h1>
  <div class="separator-gray separator-lg"></div>
  <p class="lead text-gray"><?php //print $field_introduccion_autoridades ?></p>
  <ul class="pv-35 grid-list grid-list-2 grid-list-1-xs">
  	<?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
	  <?php endforeach; ?>
	</ul>
</div>	