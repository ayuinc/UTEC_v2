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
					<tr class="text-center">
						<td><?php print t('Semester') ?></td>
						<td><?php print t('Careers') ?></td>
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
				<tfoot>
					<?php foreach ($rows as $id => $row): ?>
				    <?php $total += $view->result[$id]->field_field_n_mero_creditos['0']['rendered']['#markup'];?>
					<?php endforeach; ?>
					<tr class="text-center">
			      <td><?php print t('Total credits') ?></td>
			      <td></td>
			      <td></td>
			      <td><?php print $total; ?></td>
			      <td></td>
			      <td></td>
			    </tr>
				</tfoot>
			</table>			
		</div>
	</div>
</div>