<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/ingenio-en-accion/'); ?>

<?php $title = $node->title; ?>  
<?php $field_frase_autor = $node->field_frase_autor['und']['0']['value']; ?>
<?php $field_nombre_autor = $node->field_nombre_autor['und']['0']['value']; ?>
<?php $field_titulo_del_autor = $node->field_titulo_del_autor['und']['0']['value']; ?>
<?php $field_quote = $node->field_quote['und']['0']['value']; ?>
<?php $field_introduccion_autor = $node->field_introduccion_autor['und']['0']['value']; ?>
<?php $field_foto_causa = $node->field_foto_causa['und']['0']['filename']; ?>
<?php $field_titulo_causa = $node->field_titulo_causa['und']['0']['value']; ?>
<?php $field_descripcion_causa = $node->field_descripcion_causa['und']['0']['value']; ?>
<?php $field_link_causa = $node->field_link_causa['und']['0']['value']; ?>
<?php $field_frase_causa = $node->field_frase_causa['und']['0']['value']; ?>
<?php $field_foto_tres_acciones = $node->field_foto_tres_acciones['und']['0']['filename']; ?>
<?php $field_titulo_tres_acciones = $node->field_titulo_tres_acciones['und']['0']['value']; ?>
<?php $field_subitulo_tres_acciones = $node->field_subitulo_tres_acciones['und']['0']['value']; ?>
<?php $field_link_tres_acciones = $node->field_link_tres_acciones['und']['0']['value']; ?>
<?php $field_titulo_proyecto = $node->field_titulo_proyecto['und']['0']['value']; ?>
<?php $field_subtitulo_proyecto = $node->field_subtitulo_proyecto['und']['0']['value']; ?>
<?php $field_descripcion_proyecto = $node->field_descripcion_proyecto['und']['0']['value']; ?>
<?php $field_link_proyecto = $node->field_link_proyecto['und']['0']['value']; ?>
<?php $field_foto_redes_sociales = $node->field_foto_redes_sociales['und']['0']['filename']; ?>

<div class="hero-unit">
	<div data-section-scroll="Que es" class="section-scroll-content flex-middle-center">
		<div class="container-sm text-center">
			<h1 class="mb-7"><?php print $field_frase_autor ?></h1>
			<p class="mb-0 pb-0"><?php print $field_nombre_autor ?></p>
			<small class="gray-light light"><em><?php print $field_titulo_del_autor ?></em></small>
			<div class="pv-35">
				<p><?php print $field_quote ?></p>
				<?php print $field_introduccion_autor ?>
			</div>
		</div>
		<!--<a class="scroll-down scroll-down-sq size lg" href="#sec-1" rel="nofollow">
			<i class="icon-arrows-down bg-info-op text-white"></i>
		</a>-->
	</div>
</div> <!-- END:Hero -->
<div data-section-scroll="Un panel" class="section-scroll-content bg-img-block bg-img-block-lg flex-middle hero-unit" style="background-image: url(<?php print('/'.$pathfile.$field_foto_causa)?>);">
	<div class="container hero-text">
		<div class="row">
			<div class="col-sm-6 text-white normalize-text">
				<h2 class="thin"><?php print $field_titulo_causa ?></h2>
				<hr class="hr-white">
				<div class="row">
					<div class="col-sm-9">
						<h3 class="lead thin"><?php print $field_descripcion_causa ?></h3>
						<?php if ($field_link_causa!='') { ?>
							<a href="<?php print $field_link_causa ?>" class="btn btn-white btn-outline btn-sm see-more">Ver más</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="overlay"></div>
</div>
<div class="pvp-7">
	<div class="container-sm text-center">
		<p class="lead"><?php print $field_frase_causa ?></p>
	</div>
</div>
<div data-section-scroll="Tres acciones" class="section-scroll-content bg-img-block bg-img-block-lg flex-middle hero-unit" style="background-image: url(<?php print('/'.$pathfile.$field_foto_tres_acciones)?>);">
	<div class="container hero-text">
		<div class="row">
			<div class="col-sm-6 text-white normalize-text">
				<h2 class="thin"><?php print $field_titulo_tres_acciones ?></h2>
				<hr class="hr-white">
				<div class="row">
					<div class="col-sm-9">
						<h2 class="lead thin"><?php print $field_subitulo_tres_acciones ?></h2>
						<?php if ($field_link_tres_acciones!='')  { ?>
							<a href="<?php print $field_link_tres_acciones ?>" class="btn btn-white btn-outline btn-sm see-more">Ver más</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="overlay"></div>
</div>
<div data-section-scroll="Purificando el agua" class="section-scroll-content minh-560 flex-middle-center hero-unit">
	<div class="container-sm text-center normalize-text">
		<h2 class="lead thin"><?php print $field_titulo_proyecto ?></h2>
		<hr class="hr-gray">
		<p class="lead gray"><?php print $field_subtitulo_proyecto ?></p>
		<p class="gray mb-42 lead"><?php print $field_descripcion_proyecto ?></p>
		<?php if ($field_link_proyecto!='') { ?>
			<a href="<?php print $field_link_proyecto ?>" class="btn btn-outline btn-primary see-more btn-sm">Ver más</a>
		<?php } ?>
	</div>
	<a class="scroll-down scroll-down-sq size lg" rel="nofollow">
		<i class="icon-arrows-down bg-info text-white"></i>
	</a>
</div>
<div data-section-scroll="Descubre más" class="section-scroll-content bg-img-block bg-img-block-lg flex-middle" style="background-image: url(<?php print('/'.$pathfile.$field_foto_redes_sociales)?>);">
	<div class="container-xs text-white text-center hero-text relative on-top">
		<h2 class="h3 mb-0">A todo esto le llamamos </h2> <h1 class="thin mt-0">Ingenio en Acción</h1>
		<p class="thin font-carreras">Descubre más de #ingenioenaccion en:</p>
		<ul class="grid-list grid-list-centered">
			<li class="p-0">
				<a href="https://www.facebook.com/ingenioenaccion" class="btn btn-facebook btn-circle"><i class="icon-footer-facebook"></i></a>
			</li>
			<li class="pl-7">
				<a href="https://twitter.com/UTECedu" class="btn btn-twitter btn-circle"><i class="icon-footer-twitter"></i></a>
			</li>
		</ul>
	</div>
	<div class="overlay"></div>
</div>

