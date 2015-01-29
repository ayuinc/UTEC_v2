<?php global $language; ?>
<?php if ($language->language != 'en'): ?>
	<h3 class="light">Blogs destacados</h3>
<?php elseif ($language->language == 'en'): ?>
	<h3 class="light">Highlights</h3>
<?php endif ?>
<div class="separator-gray separator-sm"></div>
<ul class="grid-list grid-list-2 row p-ch-7 mb-ch-21 isotope-grid">
	<?php foreach ($rows as $id => $row): ?>
    <?php print $row;?>
	<?php endforeach; ?>
</ul>
<div>
<?php if ($language->language != 'en'): ?>
	<a href="/blog/todos-los-posts" class="btn btn-custom btn-primary see-more uppercase">Ver todos</a>
<?php elseif ($language->language == 'en'): ?>
	<a href="/en/blog/all-posts" class="btn btn-custom btn-primary see-more uppercase">Read all</a>
<?php endif ?>	
	
</div>
