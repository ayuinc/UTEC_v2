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

<?php $count=0; ?>

<?php if ($count==0) { ?>
<div class="gbo calendar">
	<h3>Calendario:</h3>
	<div class="row">
<?php } ?>		
		<div class="col-sm-3" data-href="admision_evento-detalle.html">
			<div class="title">
				<span>Inicio de inscripciones</span>
			</div>
			<div class="date">
				<span>01/04/2014</span>
			</div>
		</div>
<?php if ($count==0) { ?>		
	</div>
</div>
<?php } ?>
<?php $count=1; ?>

