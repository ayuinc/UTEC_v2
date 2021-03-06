<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="container">
	<h1 class="thin lead"><?php print t('Curricular Structure') ?></h1>
	<div class="separator-gray separator-lg"></div>
	<h3 class="lead thin"><?php print t('Semester') ?> 2016 - I</h3>
	<div>
		<ul class="grid-list grid-list-1-xs malla-curricular-ref p-ch-0 mr-ch-28">
		<?php if ($language->language == 'es'): ?>
			<li class="math">Matemáticas y ciencias</li>
			<li class="management">Administración, humanidades, artes y lenguaje</li>
			<li class="engineering">Ingeniería</li>
		<?php elseif ($language->language == 'en'): ?>
			<li class="math">Mathematics and Science</li>
			<li class="management">Administration, humanities, arts and language</li>
			<li class="engineering">Engineering</li>
		<?php endif ?>
		</ul>
	</div>
	<div class="mb-ch-70">
		<ul class="grid-list grid-list-5 grid-list-1-xs malla-curricular malla-curricular-primary">
    <?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?> 
		</ul>	
	</div>
</div>