<?php 
// $video_name = $node->field_video['und']['0']['filename'];

$titulo = $node->title;   
$field_fecha_calendario = $node->field_fecha_calendario['und']['0']['value'];


?>

<?php $count=0; ?>

<?php if ($count==0) { ?>
<div class="gbo calendar">
	<h3>Calendario:</h3>
	<div class="row">
<?php } ?>		
		<div class="col-sm-3" data-href="admision_evento-detalle.html">
			<div class="title">
				<span><?php print $titulo ?></span>
			</div>
			<div class="date">
				<span><?php print $field_fecha_calendario ?></span>
			</div>
		</div>
<?php if ($count==0) { ?>		
	</div>
</div>
<?php } ?>
<?php $count=1; ?>

