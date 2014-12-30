<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="container-sm">
	<h1 class="light">Menciones</h1>
	<div class="separator-gray separator-sm"></div>
	<h3></h3>
	<div class="pv-ch-42">
		<div class="table-responsive table-custom pv-42">
			<table class="table">
				<thead>
					<tr>
						<td>Mención</td>
						<td>Electivo</td>
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