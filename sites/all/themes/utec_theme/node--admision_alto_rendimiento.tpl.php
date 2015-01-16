<?php 
// $video_name = $node->field_video['und']['0']['filename'];

$titulo = $node->title;   
$field_descripcion_corta_alto = $node->field_descripcion_corta_alto['und']['0']['value'];
$field_como_postular_alto = $node->field_como_postular_alto['und']['0']['value'];
$field_opcion_1_alto = $node->field_opcion_1_alto['und']['0']['value'];
$field_opcion_2_alto = $node->field_opcion_1_alto['und']['0']['value'];
$field_opcion_3_alto = $node->field_opcion_1_alto['und']['0']['value'];
$field_opcion_4_alto = $node->field_opcion_1_alto['und']['0']['value'];
$field_opcion_5_alto = $node->field_opcion_1_alto['und']['0']['value'];
$field_opcion_6_alto = $node->field_opcion_1_alto['und']['0']['value'];
$field_costa_alto = $node->field_costa_alto['und']['0']['value'];
$field_temario_alto = $node->field_temario_alto['und']['0']['value'];

?>
	<div class="container-sm">
	<div>
		<h1 class="light"><?php print t('Top Academic Rankings') ?></h1>
		<div class="separator-gray separator-md"></div>
		<div>
		<p class="lead text-gray"><?php print $field_descripcion_corta_alto ?></p>
		<div class="mb-ch-42">
			<div>
				<h3><?php print t('How to apply?') ?></h3>
				<div class="list-custom">
					<?php  print $field_como_postular_alto ?>
				</div>
			</div>
			<div>
				<h3><?php print t('Costs:') ?></h3>
					<div class="list-custom">
						<ul><li><?php print $field_costa_alto ?></li></ul>
					</div>
			</div>
			<div>
				<h3><?php print t('Agenda:') ?></h3>
				<div class="list-custom">
					<?php print $field_temario_alto ?>
				</div>
			</div>
			<div class="gbo calendar">
				<h3><?php print t('Calendar:') ?></h3>
					<div class="row">
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Registration Start') ?></span>
							</div>
							<div class="date">
								<span>4/1/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>4/30/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>5/26/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>6/26/2014, 12:00:00 AM</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>8/28/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>9/25/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>10/30/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>11/27/2014, 12:00:00 AM</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>1/29/2015, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span><?php print t('Evaluation') ?></span>
							</div>
							<div class="date">
								<span>2/20/2015</span>
							</div>
						</div>
					</div>
			</div>
			</div>
		</div>
	</div>
	</div>



