<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
	<h3 class="thin lead">Malla curricular</h3>
	<div class="separator-gray separator-lg"></div>
	<h3 class="lead thin">Ciclo 2015 - I</h3>
	<div class="mb-ch-70">
		<ul class="grid-list grid-list-5 malla-curricular malla-curricular-primary">
    <?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?>
		</ul>	
	</div>

<div class="bg-img-block bg-img-block-lg flex-middle" style="background-image: url(assets/img/bg-header-3.jpg);">
	<div class="container-sm text-center text-white">
		<?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?>
	</div>
	<a class="scroll-down scroll-down-sq size lg" href="#sec-1" rel="nofollow">
		<i class="icon-arrows-down bg-white-op text-gray"></i>
	</a>
</div>