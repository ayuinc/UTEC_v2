<?php 
 global $language;
 global $base_url;
 global $theme_path;
 $path = $base_url.'/'.$theme_path;
 $pathfile= variable_get('file_public_path', conf_path() . '/files/');

 $title = $node->title;  
 $field_frase_autor = $node->field_frase_autor['und']['0']['value'];
 $field_nombre_autor = $node->field_nombre_autor['und']['0']['value'];
 $field_titulo_del_autor = $node->field_titulo_del_autor['und']['0']['value'];
 $field_quote = $node->field_quote['und']['0']['value'];
 $field_introduccion_autor = $node->field_introduccion_autor['und']['0']['value'];
 $field_foto_causa = $node->field_image['und']['0']['uri'];
 $field_titulo_causa = $node->field_titulo_causa['und']['0']['value'];
 $field_descripcion_causa = $node->field_descripcion_causa['und']['0']['value'];
 $field_link_causa = $node->field_link_causa['und']['0']['value'];
 $field_frase_causa = $node->field_frase_causa['und']['0']['value'];
 $field_foto_tres_acciones = $node->field_image_2['und']['0']['uri'];
 $field_titulo_tres_acciones = $node->field_titulo_tres_acciones['und']['0']['value'];
 $field_subitulo_tres_acciones = $node->field_subitulo_tres_acciones['und']['0']['value'];
 $field_link_tres_acciones = $node->field_link_tres_acciones['und']['0']['value'];
 $field_titulo_proyecto = $node->field_titulo_proyecto['und']['0']['value'];
 $field_subtitulo_proyecto = $node->field_subtitulo_proyecto['und']['0']['value'];
 $field_descripcion_proyecto = $node->field_descripcion_proyecto['und']['0']['value'];
 $field_link_proyecto = $node->field_link_proyecto['und']['0']['value'];
 $field_foto_redes_sociales = $node->field_image_3['und']['0']['uri']; 
 $descubre_titulo_1 = $node->field_descubre_mas_titulo_1['und']['0']['value'];
 $descubre_titulo_2 = $node->field_descubre_mas_titulo_2['und']['0']['value'];
 $descubre_titulo_3 = $node->field_descubre_mas_titulo_3['und']['0']['value'];
 $social_links = $node->field_link_red_social['und'];
 $clase_botones = $node->field_clase_boton['und'];
 $clase_iconos = $node->field_clase_icono['und'];
?>

<?php if ($language->prefix == 'en'): ?>
  <div data-section-scroll="Overview" id="que-es" class="scroll-down-info section-scroll-content bg-img-block bg-img-block-lg hero-unit size lg" style="background-image: url(<?php print('/'.$pathfile.$field_carrera_imagen)?>);">
<?php elseif ($language->prefix != 'en'): ?>
  <div data-section-scroll="Acerca de" id="que-es" class="scroll-down-info section-scroll-content bg-img-block bg-img-block-lg hero-unit size lg" style="background-image: url(<?php print('/'.$pathfile.$field_carrera_imagen)?>);">
<?php endif ?>
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
	<?php if ($language->prefix == 'en'): ?>
<div data-section-scroll="A special billboard" class="section-scroll-content scroll-down-white bg-img-block bg-img-block-lg bg-img-block-right" style="background-image: url(<?php print image_style_url($image_style, $field_foto_causa); ?>);">
	<?php elseif ($language->prefix != 'en'): ?>
<div data-section-scroll="Un panel" class="section-scroll-content scroll-down-white bg-img-block bg-img-block-lg bg-img-block-right" style="background-image: url(<?php print image_style_url($image_style, $field_foto_causa); ?>);">
	<?php endif ?>
	<!-- <div class="container-sm text-center">
		<h1 class="mb-7"><?php print $field_frase_autor ?></h1>
		<p class="mb-0 pb-0"><?php print $field_nombre_autor ?></p>
		<small class="gray-light light"><em><?php print $field_titulo_del_autor ?></em></small>
		<div class="pv-35">
			<p><?php print $field_quote ?></p>
			<?php print $field_introduccion_autor ?>
		</div>
	</div> -->
	<div class="overlay flex-middle bg-gray-op">
		<div class="container hero-text" 
			<?php if ($language->prefix == 'en'): ?>
				data-href="/en/<?php print $field_link_causa ?>"
			<?php elseif ($language->prefix != 'en'): ?>
				data-href="<?php print $field_link_causa ?>"
			<?php endif ?>			
		>
			<div class="row">
				<div class="col-sm-6 text-white normalize-text">
					<?php if ($language->prefix == 'en'): ?>
						<a href="/en/<?php print $field_link_causa ?>">
							<h2 class="thin h1 text-hover-primary"><?php print $field_titulo_causa ?></h2>
						</a>
					<?php elseif ($language->prefix != 'en'): ?>
						<a href="<?php print $field_link_causa ?>">
							<h2 class="thin h1 text-hover-primary"><?php print $field_titulo_causa ?></h2>
						</a>
					<?php endif ?>
					<hr class="hr-white">
					<h4 class="lead thin"><?php print $field_descripcion_causa ?></h4>
					<?php if ($field_link_causa!='') { ?>
						<?php if ($language->prefix == 'en'): ?>
							<span class="btn mt-21 btn-white btn-outline btn-sm see-more"><?php print t('Read more') ?></span>
						<?php elseif ($language->prefix != 'en'): ?>
							<span class="btn mt-21 btn-white btn-outline btn-sm see-more"><?php print t('Read more') ?></span>
						<?php endif ?>	
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- <a class="scroll-down scroll-down-sq size lg" href="#tresacciones" rel="nofollow">
		<i class="icon-arrows-down bg-info-op text-white"></i>
	</a> -->
</div>
<div class="pvp-7">
	<div class="container-sm text-center">
		<h3 class="lead"><?php print $field_frase_causa ?></h3>
	</div>
</div>
	<?php if ($language->prefix == 'en'): ?>
<div data-section-scroll="Three actions" class="section-scroll-content scroll-down-white bg-img-block bg-img-block-lg" style="background-image: url(<?php print image_style_url($image_style, $field_foto_tres_acciones); ?>);">
	<?php elseif ($language->prefix != 'en'): ?>
<div data-section-scroll="Tres acciones" class="section-scroll-content scroll-down-white bg-img-block bg-img-block-lg" style="background-image: url(<?php print image_style_url($image_style, $field_foto_tres_acciones); ?>);">
	<?php endif ?>
	<div class="overlay flex-middle">
		<div class="container hero-text" 
			<?php if ($language->prefix == 'en'): ?>
				data-href="/en/<?php print $field_link_tres_acciones ?>"
			<?php elseif ($language->prefix != 'en'): ?>
				data-href="<?php print $field_link_tres_acciones ?>"
			<?php endif ?>						
		>
			<div class="row">
				<div class="col-sm-6 text-white normalize-text">
					<?php if ($language->prefix == 'en'): ?>
						<a href="/en/<?php print $field_link_tres_acciones ?>">
							<h2 class="thin h1 text-hover-primary"><?php print $field_titulo_tres_acciones ?></h2>
						</a>
					<?php elseif ($language->prefix != 'en'): ?>
						<a href="<?php print $field_link_tres_acciones ?>">
							<h2 class="thin h1 text-hover-primary"><?php print $field_titulo_tres_acciones ?></h2>
						</a>
					<?php endif ?>
					<hr class="hr-white">
					<h4 class="lead thin mb-14"><?php print $field_subitulo_tres_acciones ?></h4>
					<?php if ($field_link_tres_acciones!='')  { ?>
						<?php if ($language->prefix == 'en'): ?>
							<span class="btn btn-white btn-outline btn-sm see-more"><?php print t('Read more') ?></span>
						<?php elseif ($language->prefix != 'en'): ?>
							<span class="btn btn-white btn-outline btn-sm see-more"><?php print t('Read more') ?></span>
						<?php endif ?>					
					<?php } ?>
					<div class="row">
						<div class="col-sm-9">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <a class="scroll-down scroll-down-sq size lg" href="#purificandoelagua" rel="nofollow">
		<i class="icon-arrows-down bg-info-op text-white"></i>
	</a> -->
</div>
	<?php if ($language->prefix != 'en'): ?>
<div data-section-scroll="Purificando el agua" class="section-scroll-content scroll-down-info minh-560 flex-middle-center">
	<?php elseif ($language->prefix == 'en'): ?>
<div data-section-scroll="Purifying water" class="section-scroll-content scroll-down-info minh-560 flex-middle-center">
	<?php endif ?>
	<div class="container-sm text-center normalize-text" 
		<?php if ($language->prefix == 'en'): ?>
			data-href="/en/<?php print $field_link_proyecto ?>"
		<?php elseif ($language->prefix != 'en'): ?>
			data-href="<?php print $field_link_proyecto ?>"
		<?php endif ?>		
	>
		<?php if ($language->prefix == 'en'): ?>
			<a href="/en/<?php print $field_link_proyecto ?>">
				<h2 class="lead thin text-hover-primary"><?php print $field_titulo_proyecto ?></h2>
			</a>
		<?php elseif ($language->prefix != 'en'): ?>
			<a href="<?php print $field_link_proyecto ?>">
				<h2 class="lead thin text-hover-primary"><?php print $field_titulo_proyecto ?></h2>
			</a>
		<?php endif ?>
		<hr class="hr-gray">
		<p class="lead gray"><?php print $field_subtitulo_proyecto ?></p>
		<p class="gray mb-42 lead"><?php print $field_descripcion_proyecto ?></p>
		<div class="text-right">
			<?php if ($field_link_proyecto!='') { ?>
				<?php if ($language->prefix == 'en'): ?>
					<span class="btn btn-outline btn-primary see-more btn-sm"><?php print t('Read more') ?></span>
				<?php elseif ($language->prefix != 'en'): ?>
					<span class="btn btn-outline btn-primary see-more btn-sm"><?php print t('Read more') ?></span>
				<?php endif ?>				
			<?php } ?>
		</div>
	</div>
	<!-- <a class="scroll-down scroll-down-sq size lg" href="#descubremas" rel="nofollow">
		<i class="icon-arrows-down bg-info-op text-white"></i>
	</a> -->
</div>
	<?php if ($language->prefix != 'en'): ?>
<div data-section-scroll="Descubre más" class="section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print image_style_url($image_style, $field_foto_redes_sociales); ?>);">
	<?php elseif ($language->prefix == 'en'): ?>
<div data-section-scroll="Find more" class="section-scroll-content bg-img-block bg-img-block-lg" style="background-image: url(<?php print image_style_url($image_style, $field_foto_redes_sociales); ?>);">
	<?php endif ?>
	<div class="overlay flex-middle">
		<div class="container-xs text-white text-center hero-text relative on-top">
			<h2 class="h3 mb-0"><?php print $descubre_titulo_1; ?></h2> <h1 class="thin mt-0"><?php print $descubre_titulo_2; ?></h1>
			<p class="thin font-carreras"><?php print $descubre_titulo_3; ?></p>
			<ul class="grid-list grid-list-centered">
				<?php foreach ($social_links as $key => $social_link) : ?>
				<li class="pl-7">
					<a href="<?php print $social_link['value']; ?>" class="btn <?php print $clase_botones[$key]['value']; ?> btn-circle"><i class="<?php print $clase_iconos[$key]['value']; ?>"></i></a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<div id="section-scroll" class="hidden-xs hidden-sm">
	<ul></ul>
	<div class="text-right pv-21 btn-apply animated">
		<?php if ($language->prefix == 'en'): ?>
			<a href="/en/methods-of-admission/admissions-exam/application-form" class="btn btn-primary uppercase atm-scroll-item"><?php print t('Apply') ?></a>
		<?php elseif ($language->prefix != 'en'): ?>
			<a href="/modalidades-de-admision/examen-de-admision/formulario-de-inscripcion" class="btn btn-primary uppercase atm-scroll-item"><?php print t('Apply') ?></a>
		<?php endif ?>			
	</div>
</div>