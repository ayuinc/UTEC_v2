<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;	
	$sub_titulo = $node->field_subtitulo['und']['0']['value'];		 		
	$cuerpo = $node->body['und']['0']['value'];	
	$imagen = $node->field_image['und']['0']['filename'];	
	$texto_imagen = $node->field_texto_imagen['und']['0']['value'];
	$fecha = $node->field_fecha['und']['0']['value'];		 		
	$hora = $node->field_hora['und']['0']['value'];		 		
	$lugar = $node->field_lugar['und']['0']['value'];		 		
  $obejtivos = $node->field_objetivos['und']['0']['value'];	
  $dirigido = $node->field_dirigido_a['und']['0']['value'];	
  $profesores = $node->field_profesor['und']['0']['value'];
  $field_requisito = $node->field_requisito['und']['0']['value'];
  $field_temario = $node->field_temario['und']['0']['value'];
  $field_inscribete = $node->field_inscribete['und']['0']['value'];
  $field_contactanos = $node->field_contactanos['und']['0']['value'];
  $field_brochure = $node->field_brochure['und']['0']['value'];

  print_r($node);
?>



<div class="container-sm"> 
	<h1 class="light"><?php print $titulo ?></h1>
	<div class="separator-gray separator-sm"></div>						
	<h3><?php print $sub_titulo ?></h3>
	<div class="pv-ch-42 lead-ch p-ch-gray">
		<p><?php print $cuerpo ?></p>
		<?php if ($imagen!='') { ?>
			<img src="<?php print('/'.$pathfile.$imagen); ?>" alt="#" class="img-responsive">
		<?php } ?>
		<p><?php print $texto_imagen ?></p>
	</div>
	<div class="pv-ch-42">
		<div class="list-custom-left normalize-text lead-ch mb-ch-21">
			<ul>
				<li class="bg-primary text-white uppercase text-center p-21">
					Fecha
				</li>
				<li class="pl-21">
					<p><?php print $fecha ?></p>
				</li>
			</ul>
			<ul>
				<li class="bg-gray text-white uppercase text-center p-21">
					Hora
				</li>
				<li class="pl-21">
					<p><?php print $hora ?></p>
				</li>
			</ul>
			<ul>
				<li class="bg-gray text-white uppercase text-center p-21">
					Lugar
				</li>
				<li class="pl-21">
					<p><?php print $lugar ?></p>
				</li>
			</ul>
		</div>
		<div>
			<h3>Objetivos:</h3>
			<div class="list-custom">
				<?php print $obejtivos ?>
			</div>
		</div>
		<div>
			<h3>Dirigido a:</h3>
			<div class="list-custom">
				<?php print $dirigido ?>
			</div>
		</div>
		<div>
			<h3>Profesores:</h3>
			<div class="list-custom-left">
				<ul>
					<li class="text-center">
						<div class="grid-list-pic"><img src="assets/img/user.jpg" alt="" width="98px" height="auto" class="img-circle"></div>
						<div>
							<a href="#" class="thin">Rosa María Llosa Demartini</a>
							<span>Miembro del consejo directivo</span>
						</div>
					</li>
					<li class="lead pl-21 text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, quae totam tempora? Quo ex neque odio vero porro delectus doloremque repudiandae similique, sequi architecto illo quos, provident aspernatur, aut sapiente.</li>
				</ul>
			</div>
		</div>
		<div>
			<ul class="grid-list grid-list-5 grid-list-hover size xs">
				<li data-href="<?php print $field_requisito ?>">
					<div>
						<div class="size sm">
							<i class="icon-admisiones-primeros-puestos"></i>
						</div>
						<small class="thin">Requisitos</small>
					</div>
				</li>
				<li data-href="<?php print $field_temario ?>">
					<div>
						<div class="size sm">
							<i class="icon-admisiones-alto-rendimiento"></i>
						</div>
						<small class="thin">Temario</small>
					</div>
				</li>
				<li data-href="<?php print $field_inscribete ?>">
					<div>
						<div class="size sm">
							<i class="icon-admisiones-traslado"></i>
						</div>
						<small class="thin">Inscríbete</small>
					</div>
				</li>
				<!--<li data-href="<?php print $field_contactanos ?>">
					<div>
						<div class="size sm">
							<i class="icon-admisiones-centro-pre"></i>
						</div>
						<small class="thin">Contáctanos</small>
					</div>
				</li>-->
				<li data-href="<?php print $field_brochure ?>">
					<div>
						<div class="size sm">
							<i class="icon-admisiones-bachillerato"></i>
						</div>
						<small class="thin">Brochure</small>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
