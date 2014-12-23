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
		<h1 class="light"><?php print $titulo ?></h1>
		<div class="separator-gray separator-md"></div>
		<div>
		<p class="lead text-gray"><?php print $field_descripcion_corta_alto ?></p>
		<div class="mb-ch-42">
			<div>
				<h3>¿Cómo postular?</h3>
				<p class="lead">Procedimiento</p>
				<div class="list-custom">
					<ul>
						<li>Completar el <a href="#">formulario de datos personales</a></li>
						<li>Efectuar el depósito bancario por el Derecho de Inscripción a la Evaluación de Alto Rendimiento</li>
						<li>Presentar el voucher del depósito o enviar el voucher electrónico al e-mail <a href="#">inscripciones@utec.edu.pe</a></li>
						<li>Presentar los siguientes documentos en la oficina de admisión:</li>
					</ul>
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
					<ul><li>El costo por Derecho de Inscripción es de S/.450</li></ul>
				</div>
			</div>
			<div>
				<h3>Temario:</h3>
				<div class="list-custom">
					<ul>
						<li>
							Prueba de conocimientos (Razonamiento Matemático y Ciencias):
							<ul class="mt-21">
								<li>
									Física: Análisis vectorial
								</li>
								<li>
									Química: Matería y composición, lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos itaque aut eum vel deleniti quod laudantium fugit illum at officia modi, cupiditate inventore nam, repellendus obcaecati tempora animi deserunt minus!
								</li>
							</ul>
						</li>
						<li>Lectura crítica y Redacción</li>
						<li>Inglés</li>
						<li>Prueba Práctica</li>
						<li>Entrevista personal</li>
					</ul>
				</div>
			</div>
			<div class="gbo calendar">
				<h3>Calendario:</h3>
				<div class="row">
					<div class="col-sm-3" data-href="admision_evento-detalle.html">
						<div class="title">
							<span>Inicio de inscripciones</span>
						</div>
						<div class="date">
							<span>01/04/2014</span>
						</div>
					</div>
					<div class="col-sm-3" data-href="#">
						<div class="title">
							<span>Inicio de inscripciones</span>
						</div>
						<div class="date">
							<span>01/04/2014</span>
						</div>
					</div>
					<div class="col-sm-3" data-href="#">
						<div class="title">
							<span>Inicio de inscripciones</span>
						</div>
						<div class="date">
							<span>01/04/2014</span>
						</div>
					</div>
					<div class="col-sm-3" data-href="#">
						<div class="title">
							<span>Inicio de inscripciones</span>
						</div>
						<div class="date">
							<span>01/04/2014</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3" data-href="#">
						<div class="title">
							<span>Inicio de inscripciones</span>
						</div>
						<div class="date">
							<span>01/04/2014</span>
						</div>
					</div>
					<div class="col-sm-3" data-href="#">
						<div class="title">
							<span>Inicio de inscripciones</span>
						</div>
						<div class="date">
							<span>01/04/2014</span>
						</div>
					</div>
					<div class="col-sm-3" data-href="#">
						<div class="title">
							<span>Inicio de inscripciones</span>
						</div>
						<div class="date">
							<span>01/04/2014</span>
						</div>
					</div>
					<div class="col-sm-3" data-href="#">
						<div class="title">
							<span>Inicio de inscripciones</span>
						</div>
						<div class="date">
							<span>01/04/2014</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3" data-href="#">
						<div class="title">
							<span>Inicio de inscripciones</span>
						</div>
						<div class="date">
							<span>01/04/2014</span>
						</div>
					</div>
					<div class="col-sm-3" data-href="#">
						<div class="title">
							<span>Inicio de inscripciones</span>
						</div>
						<div class="date">
							<span>01/04/2014</span>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

