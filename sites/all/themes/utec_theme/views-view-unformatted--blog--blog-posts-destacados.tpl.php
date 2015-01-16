<?php 

?>
<h3 class="light">Blogs destacados</h3>
<div class="separator-gray separator-sm"></div>
<ul class="grid-list grid-list-2 row p-ch-7 mb-ch-21 isotope-grid">
	<?php foreach ($rows as $id => $row): ?>
    <?php print $row;?>
	<?php endforeach; ?>
</ul>
<div>
	<a href="#" class="btn btn-custom btn-primary see-more uppercase">Ver todos</a>
</div>
