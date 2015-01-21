<?php 
// $video_name = $node->field_video['und']['0']['filename'];

$titulo = $node->title;   
$field_descripcion_corta_examen = $node->field_descripcion_corta_examen['und']['0']['value'];
$field_como_postula_examen = $node->field_como_postula_examen['und']['0']['value'];
$field_costos_examen = $node->field_costos_examen['und']['0']['value'];
$field_temario_examen = $node->field_temario_examen['und']['0']['value'];

?>
	<div class="container-sm">
	<div>
		<h1 class="light"><?php print $titulo ?></h1>
		<div class="separator-gray separator-md"></div>
		<div>
		<p class="lead text-gray"><?php print $field_descripcion_corta_examen ?></p>
		<div class="mb-ch-42">
			<div>
				<h3><?php //print t('How to apply?') ?></h3>
				<div class="list-custom">
					<?php  print $field_como_postula_examen ?>
				</div>
			</div>
			<div>
				<h3><?php print t('Costs:') ?></h3>
					<div class="list-custom">
						<ul><li><?php print $field_costos_examen ?></li></ul>
					</div>
			</div>
			<div>
				<h3><?php print t('Agenda:') ?></h3>
				<div class="list-custom">
					<?php print $field_temario_examen ?>
				</div>
			</div>
			<div class="gbo calendar">
				<h3><?php print t('Calendar:') ?></h3>
				<div class="table-responsive table-custom pv-42">
					<table class="table">
						<thead>
							<tr>
								<td><?php print t('Event') ?></td>
								<td><?php print t('Date') ?></td>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td class="highlight text-center"><?php print t('Registration starts') ?></td>
							<td>01/04/2014</td>
						</tr>
						<tr>
							<td class="highlight text-center"><?php print t('Registration ends') ?></td>
							<td>01/03/2015</td>
						</tr>
						<tr>
							<td class="highlight text-center"><?php print t('Admissions Exam') ?></td>
							<td>04/03/2015</td>
						</tr>
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
	</div>