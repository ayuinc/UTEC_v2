<?php 
// $video_name = $node->field_video['und']['0']['filename'];

$titulo = $node->title;   
$field_pago_inscripcion = $node->field_pago_inscripcion['und']['0']['value'];
$field_forma_de_pago_inscripcion = $node->field_forma_de_pago_inscripcion['und']['0']['value'];
$field_detalles_inscripcion = $node->field_detalles_inscripcion['und']['0']['value'];
$field_condiciones_inscripcion = $node->field_condiciones_inscripcion['und']['0']['value'];



?>
<div class="container-sm">
	<h1 class="light">Inscripción</h1>
	<div class="separator-gray separator-lg"></div>
	<div class="list-custom-left normalize-text lead-ch mb-ch-21">
		<ul>
			<li class="bg-primary text-white uppercase text-center p-21">
				Pago
			</li>
			<li class="pl-21">									
				<?php print $field_pago_inscripcion ?>
			</li>
		</ul>
		<ul>
			<li class="bg-gray text-white uppercase text-center p-21">
				Forma de pago
			</li>
			<li class="pl-21">									
				<?php print $field_forma_de_pago_inscripcion ?>
			</li>
		</ul>
	</div>
	<div class="list-custom pv-42">
		<?php print $field_detalles_inscripcion ?>
		<a href="#" class="btn btn-primary see-more btn-lg uppercase">Completar el formulario</a>
	</div>
	<div class="lead-ch p-ch-gray li-ch-gray">
		<h3 class="thin">Condiciones para el ingreso</h3>
		<?php print $field_condiciones_inscripcion ?>
	</div>
</div>

