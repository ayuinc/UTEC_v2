<div class="container-sm">
	<?php 
		$term = taxonomy_term_load($view->args[0]);
		$translated_term = i18n_taxonomy_localize_terms($term); 
	?>
	<h1 class="light"><?php print $translated_term->name; ?></h1>
	<div class="separator-gray separator-sm"></div>
	<ul class="grid-list grid-list-2 row p-ch-7 mb-ch-21 isotope-grid">
		<?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?>
	</ul>
</div>
