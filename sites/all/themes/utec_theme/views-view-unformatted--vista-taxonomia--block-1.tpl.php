<?php 

?>
<div class="container-sm">
	<h3 class="light"><?php print t('Blog posts'); ?></h3>
	<div class="separator-gray separator-sm"></div>
	<ul class="grid-list grid-list-2 row p-ch-7 mb-ch-21 isotope-grid">
		<?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?>
	</ul>
</div>
