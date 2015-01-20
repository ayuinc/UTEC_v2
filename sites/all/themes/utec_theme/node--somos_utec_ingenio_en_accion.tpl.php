<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/'); ?>

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

<div class="hero-unit size lg">
	<div data-section-scroll="Acerca de" class="section-scroll-content flex-middle-center">
		<div class="container-sm text-center">
			<h1 class="mb-7"><?php print $field_frase_autor ?></h1>
			<p class="mb-0 pb-0"><?php print $field_nombre_autor ?></p>
			<small class="gray-light light"><em><?php print $field_titulo_del_autor ?></em></small>
			<div class="pv-35">
				<p><?php print $field_quote ?></p>
				<?php print $field_introduccion_autor ?>
			</div>
		</div>
	</div>
	<a class="scroll-down scroll-down-sq size lg" href="#unpanel" rel="nofollow">
		<i class="icon-arrows-down bg-info-op text-white"></i>
	</a>
</div> <!-- END:Hero -->
<div data-section-scroll="Un panel" class="section-scroll-content bg-img-block bg-img-block-lg flex-middle" style="background-image: url(<?php print('/'.$pathfile.$field_foto_causa)?>);">
	<div class="overlay flex-middle">
		<div class="container hero-text" data-href="<?php print $field_link_causa ?>">
			<div class="row">
				<div class="col-sm-6 text-white normalize-text">
					<h2 class="thin h1"><?php print $field_titulo_causa ?></h2>
					<hr class="hr-white">
					<h4 class="lead thin"><?php print $field_descripcion_causa ?></h4>
					<?php if ($field_link_causa!='') { ?>
					<a href="<?php print $field_link_causa ?>" class="btn mt-21 btn-white btn-outline btn-sm see-more"><?php print t('Read more') ?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<a class="scroll-down scroll-down-sq size lg" href="#tresacciones" rel="nofollow">
		<i class="icon-arrows-down bg-info-op text-white"></i>
	</a>
</div>
<div class="pvp-7">
	<div class="container-sm text-center">
		<h3 class="lead"><?php print $field_frase_causa ?></h3>
	</div>
</div>
<div data-section-scroll="Tres acciones" class="section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print('/'.$pathfile.$field_foto_tres_acciones)?>);">
	<div class="overlay flex-middle">
		<div class="container hero-text" data-href="<?php print $field_link_tres_acciones ?>">
			<div class="row">
				<div class="col-sm-6 text-white normalize-text">
					<h2 class="thin h1"><?php print $field_titulo_tres_acciones ?></h2>
					<hr class="hr-white">
					<h4 class="lead thin"><?php print $field_subitulo_tres_acciones ?></h4>
					<?php if ($field_link_tres_acciones!='')  { ?>
						<a href="<?php print $field_link_tres_acciones ?>" class="btn btn-white btn-outline btn-sm see-more"><?php print t('Read more') ?></a>
					<?php } ?>
					<div class="row">
						<div class="col-sm-9">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a class="scroll-down scroll-down-sq size lg" href="#purificandoelagua" rel="nofollow">
		<i class="icon-arrows-down bg-info-op text-white"></i>
	</a>
</div>
<div data-section-scroll="Purificando el agua" class="section-scroll-content minh-560 flex-middle-center">
	<div class="container-sm text-center normalize-text" data-href="<?php print $field_link_proyecto ?>">
		<h2 class="lead thin"><?php print $field_titulo_proyecto ?></h2>
		<hr class="hr-gray">
		<p class="lead gray"><?php print $field_subtitulo_proyecto ?></p>
		<p class="gray mb-42 lead"><?php print $field_descripcion_proyecto ?></p>
		<div class="text-right">
			<?php if ($field_link_proyecto!='') { ?>
				<a href="<?php print $field_link_proyecto ?>" class="btn btn-outline btn-primary see-more btn-sm"><?php print t('Read more') ?></a>
			<?php } ?>
		</div>
	</div>
	<a class="scroll-down scroll-down-sq size lg" href="#descubremas" rel="nofollow">
		<i class="icon-arrows-down bg-info-op text-white"></i>
	</a>
</div>
<div data-section-scroll="Descubre más" class="section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print('/'.$pathfile.$field_foto_redes_sociales)?>);">
	<div class="overlay flex-middle">
		<div class="container-xs text-white text-center hero-text relative on-top">
			<h2 class="h3 mb-0"><?php print t('We call it:') ?></h2> <h1 class="thin mt-0"><?php print t('Ingenuity in Action') ?></h1>
			<p class="thin font-carreras"><?php print t('Discover more of #IngenuityInAction:') ?></p>
			<ul class="grid-list grid-list-centered">
				<li class="p-0">
					<a href="https://www.facebook.com/ingenioenaccion" class="btn btn-facebook btn-circle"><i class="icon-footer-facebook"></i></a>
				</li>
				<li class="pl-7">
					<a href="https://twitter.com/UTECedu" class="btn btn-twitter btn-circle"><i class="icon-footer-twitter"></i></a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div id="section-scroll" class="hidden-xs hidden-sm">
	<ul></ul>
	<div class="text-right pv-21 btn-apply animated">
		<a href="/node/854" class="btn btn-primary uppercase"><?php print t('Apply') ?></a>
	</div>
</div>