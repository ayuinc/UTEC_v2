<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="container-sm">
	<h1 class="light"><?php print $view->result['0']->field_field_carrera_referencia['0']['rendered']['#markup']; ?></h1>
	<div class="separator-gray separator-lg"></div>
	<h3></h3>
	<div class="pv-35 table-all-course">
		<div class="table-custom">
			<table class="table">
				<thead>
					<tr class="text-center">
						<td class="titulo-tabla"><?php print t('Courses') ?></td>
						<td class="titulo-tabla"><?php print t('Credits') ?></td>
						<td class="titulo-tabla"><?php print t('Prerequisites') ?></td>
						<td class="titulo-tabla"><?php print t('Objectives') ?></td>
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
			      <td class="hidden-xs bg-gray-dark text-white"><?php print t('Total credits') ?></td>
			      <td data-title="Total credits"><?php print $total; ?></td>
			      <td></td>
			      <td></td>
			    </tr>
				</tfoot>
			</table>			
		</div>
	</div>
</div>