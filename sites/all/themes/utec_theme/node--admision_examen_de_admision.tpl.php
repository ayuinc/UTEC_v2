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
		<h1 class="light">Alto rendimiento</h1>
		<div class="separator-gray separator-md"></div>
		<div>
		<p class="lead text-gray"><?php print $field_descripcion_corta_examen ?></p>
		<div class="mb-ch-42">
			<div>
				<h3>¿Cómo postular?</h3>
				<div class="list-custom">
					<?php  print $field_como_postula_examen ?>
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
						<ul><li><?php print $field_costos_examen ?></li></ul>
					</div>
			</div>
			<div>
				<h3>Temario:</h3>
				<div class="list-custom">
					<?php print $field_temario_examen ?>
				</div>
			</div>
			<div class="gbo calendar">
				<h3>Calendario:</h3>
				<div class="table-responsive table-custom pv-42">
					<table class="table">
						<thead>
							<tr>
								<td>Evento</td>
								<td>Fecha</td>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td class="highlight text-center">Inicio de inscripciones</td>
							<td>01/04/2014</td>
						</tr>
						<tr>
							<td class="highlight text-center">Cierre de inscripciones</td>
							<td>01/03/2015</td>
						</tr>
						<tr>
							<td class="highlight text-center">Examen de Admisión</td>
							<td>04/03/2015</td>
						</tr>
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
	</div>