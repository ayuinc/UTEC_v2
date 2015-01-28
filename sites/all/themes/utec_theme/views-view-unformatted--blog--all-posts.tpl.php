<?php if ($language->language != 'en'): ?>
	<h3 class="light">Todos los posts</h3>
<?php elseif ($language->language == 'en'): ?>
	<h3 class="light">All posts</h3>
<?php endif ?>	
<ul class="grid-list grid-list-2 row p-ch-7 mb-ch-21 isotope-grid">
	<?php foreach ($rows as $id => $row): ?>
    <?php print $row;?>
	<?php endforeach; ?>
</ul>
