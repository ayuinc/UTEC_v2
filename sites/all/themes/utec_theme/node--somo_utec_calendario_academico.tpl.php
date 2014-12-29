<?php $title = $node->title; ?>  
<?php $field_titulo_del_evento = $node->field_titulo_del_evento['und']['0']['value']; ?>
<?php $field_introduccion = $node->field_introduccion['und']['0']['value']; ?>
<?php $field_foto = $node->field_foto['und']['0']['value']; ?>
<?php $field_contenido = $node->field_contenido['und']['0']['value']; ?>

<div class="container-sm">
	<h1 class="light">Calendario Académico</h1>
	<div class="separator-gray separator-lg"></div>
	<div class="pv-42 lead-ch">
		<h3><?php print $field_titulo_del_evento ?></h3>
	</div>
	<div>
		<img src="<?php print $field_foto ?>" class="img-responsive">
	</div>
	<div class="pv-ch-21 lead-ch p-ch-gray">
		<h3><?php print $field_introduccion ?></h3>
		<?php print $field_contenido ?>
	</div>
	<!--<div class="pv-42 lead-ch">
		<h3>Links de interés</h3>
		<ul class="list-unstyled">
			<li class="pt-21">
				<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
			</li>
			<li>
				<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
			</li>
			<li>
				<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
			</li>
			<li>
				<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
			</li>
		</ul>
	</div>-->
</div>

