<div class="container-sm">
	<h1 class="light"><?php print t('Blog posts'); ?></h1>
	<?php kpr($view); ?>
	<div class="separator-gray separator-sm"></div>
	<ul class="grid-list grid-list-2 row p-ch-7 mb-ch-21 isotope-grid">
		<?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?>
	</ul>
</div>
