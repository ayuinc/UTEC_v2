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
		<h1 class="light">Alto rendimiento</h1>
		<div class="separator-gray separator-md"></div>
		<div>
		<p class="lead text-gray"><?php print $field_descripcion_corta_alto ?></p>
		<div class="mb-ch-42">
			<div>
				<h3>¿Cómo postular?</h3>
				<p class="lead">Procedimiento</p>
				<div class="list-custom">
					<?php  print $field_como_postular_alto ?>
				</div>
			</div>
			<!--<div>
				<ul class="grid-list grid-list-3 text-center pv-42 mb-ch-21">
					<li>
						<div>
							<div class="size lg text-primary">
								<i class="icon-inscripcion-certificado"></i>
							</div>
							<h4>Certificados originales de estudios de los 5 años de Educación Secundaria</h4>
						</div>
					</li>
					<li>
						<div>
							<div class="size lg text-primary">
								<i class="icon-inscripcion-dni"></i>
							</div>
							<h4>Certificados originales de estudios de los 5 años de Educación Secundaria</h4>
						</div>
					</li>
					<li>
						<div>
							<div class="size lg text-primary">
								<i class="icon-inscripcion-promedio"></i>
							</div>
							<h4>Certificados originales de estudios de los 5 años de Educación Secundaria</h4>
						</div>
					</li>
					<li>
						<div>
							<div class="size lg text-primary">
								<i class="icon-inscripcion-fotografia"></i>
							</div>
							<h4>Certificados originales de estudios de los 5 años de Educación Secundaria</h4>
						</div>
					</li>
					<li>
						<div>
							<div class="size lg text-primary">
								<i class="icon-inscripcion-resolucion"></i>
							</div>
							<h4>Certificados originales de estudios de los 5 años de Educación Secundaria</h4>
						</div>
					</li>
					<li>
						<div>
							<div class="size lg text-primary">
								<i class="icon-inscripcion-descargar-documento"></i>
							</div>
							<h4>Certificados originales de estudios de los 5 años de Educación Secundaria</h4>
						</div>
					</li>
				</ul>
			</div>-->
			<div>
				<h3>Costos:</h3>
					<div class="list-custom">
						<ul><li><?php print $field_costa_alto ?></li></ul>
					</div>
			</div>
			<div>
				<h3>Temario:</h3>
				<div class="list-custom">
					<?php print $field_temario_alto ?>
				</div>
			</div>
			<div class="gbo calendar">
				<h3>Calendario:</h3>
					<div class="row">
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span>Inicio de inscripciones</span>
							</div>
							<div class="date">
								<span>4/1/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span>Evaluación</span>
							</div>
							<div class="date">
								<span>4/30/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span>Evaluación</span>
							</div>
							<div class="date">
								<span>5/26/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span>Evaluación</span>
							</div>
							<div class="date">
								<span>6/26/2014, 12:00:00 AM</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span>Evaluación</span>
							</div>
							<div class="date">
								<span>8/28/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span>Evaluación</span>
							</div>
							<div class="date">
								<span>9/25/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span>Evaluación</span>
							</div>
							<div class="date">
								<span>10/30/2014, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span>Evaluación</span>
							</div>
							<div class="date">
								<span>11/27/2014, 12:00:00 AM</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span>Evaluación</span>
							</div>
							<div class="date">
								<span>1/29/2015, 12:00:00 AM</span>
							</div>
						</div>
						<div class="col-sm-3" data-href="#">
							<div class="title">
								<span>Evaluación</span>
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



