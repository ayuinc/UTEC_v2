<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="container-sm">
	<h1 class="light"><?php print $view->get_title(); ?></h1>
	<div class="separator-gray separator-lg"></div>
	<h3></h3>
	<div class="pv-35">
		<div class="table-responsive table-custom">
			<table class="table">
				<thead>
					<tr>
						<td><?php print $view->get_title(); ?></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php print t('Semester') ?></td>
						<td><?php print t('Courses') ?></td>
						<td><?php print t('Credits') ?></td>
						<td><?php print t('Prerequisites') ?></td>
						<td><?php print t('Objectives') ?></td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($rows as $id => $row): ?>
				    <?php print $row;?>
					<?php endforeach; ?> 																																																						
				</tbody>
			</table>			
		</div>
	</div>
</div>