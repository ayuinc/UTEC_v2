<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="container-sm">
	<h1 class="light"><?php print t('Calendario de Admisión'); ?></h1>
	<div class="separator-gray separator-lg"></div>
	<h3></h3>	
	<?php kpr($view); ?>
	<div class="pv-35">
		<div class="table-responsive table-custom">
			<table class="table">
				<thead>
					<tr>
						<td><?php print t('Mode') ?></td>
						<td><?php print t('Event') ?></td>
						<td><?php print t('Date') ?></td>
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