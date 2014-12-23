<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="container-sm">
	<h1 class="light">Preguntas frecuentes</h1>
	<div class="separator-gray separator-lg"></div>
	<div class="list-custom pv-42 lead-ch p-ch-gray">
		<ul>
			<?php //global $count; ?>
	    <?php foreach ($rows as $id => $row): ?>
			    <?php
				    print $row;
			    ?>
			<?php endforeach; ?>
		</ul>
	</div>
</div>