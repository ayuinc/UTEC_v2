<?php 
  global $base_url;
  global $theme_path;
  global $language;
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
  $duracion = $node->field_duracion['und']['0']['value'];
  $dirigido = $node->field_dirigido_a['und']['0']['value'];	
  $profesores = $node->field_profesor['und'];
  $field_requisito = $node->field_requisito['und']['0']['value'];
  $field_temario = $node->field_temario['und']['0']['value'];
  $field_inscribete = $node->field_inscribete['und']['0']['value'];
  $field_contactanos = $node->field_contactanos['und']['0']['value'];
  $field_brochure = $node->field_brochure['und']['0']['value'];
  $nodo_id = $node->field_menu_edp_detalles['und']['0']['entity']->nid;
	$detalles = $node->field_menu_edp_detalles['und'];
?>



<div class="container-sm"> 
	<h1 class="light"><?php print $titulo ?></h1>
	<div class="separator-gray separator-sm"></div>						
	<h3><?php print $sub_titulo ?></h3>
	<div class="pv-ch-7 pv-ch-14-xs p-ch-gray">
		<?php print $cuerpo ?>
		<?php if ($imagen!='') { ?>
			<img src="<?php print('/'.$pathfile.$imagen); ?>" alt="<?php print $titulo ?>" class="img-responsive">
			<span><?php print $texto_imagen ?></span>
		<?php } ?>
	</div>
	<div class="pv-ch-21">
		<div class="list-custom-left normalize-text lead-ch mb-ch-21">
		  <?php if ($fecha != '') { ?>				
			<ul>
				<li class="bg-gray text-white uppercase text-center p-21">
					<?php print t('Date') ?>
				</li>
				<li class="pl-21">
					<p><?php print $fecha ?></p>
				</li>
			</ul>
			<?php } ?>
		  <?php if ($hora != '') { ?>			
			<ul>
				<li class="bg-gray text-white uppercase text-center p-21">
					<?php print t('Time') ?>
				</li>
				<li class="pl-21">
					<p><?php print $hora ?></p>
				</li>
			</ul>
			<?php } ?>
		  <?php if ($lugar != '') { ?>
			<ul>
				<li class="bg-gray text-white uppercase text-center p-21">
					<?php print t('Place') ?>
				</li>
				<li class="pl-21">
					<p><?php print $lugar ?></p>
				</li>
			</ul>
			<?php } ?>
		  <?php if ($duracion != '') { ?>
			<ul>
				<li class="bg-gray text-white uppercase text-center p-21">
					<?php print t('Length') ?>
				</li>
				<li class="pl-21">
					<p><?php print $duracion ?></p>
				</li>
			</ul>
			<?php } ?>			
		</div>
		<?php if ($obejtivos != '') { ?>
		<div>
			<h3><?php print t('Goals:') ?></h3>
			<div class="list-custom">
				<?php print $obejtivos ?>
			</div>
		</div>
		<?php } ?>
		<?php if ($dirigido != '') { ?>
		<div>
			<h3><?php print t('Address to:') ?></h3>
			<div class="list-custom">
				<?php print $dirigido ?>
			</div>
		</div>
		<?php } ?>
			<div><h3><?php print t('Faculty:') ?></h3></div>
			<?php foreach ($profesores as $key => $profesor) : ?>
			<?php 
				  $profesor_name = $profesor['entity']->name;
				  $profesor_id = $profesor['entity']->uid;
				  $profesor_cargo = $profesor['entity']->field_descripci_n['und']['0']['value'];
				  $profesor_cargo_ingles = $profesor['entity']->field_descripci_n_ingles['und']['0']['value'];
				  $profesor_resenia = $profesor['entity']->field_rese_a['und']['0']['value'];
				  $profesor_resenia_ingles = $profesor['entity']->field_rese_a_ingles['und']['0']['value'];
				  $profesor_pic = $profesor['entity']->picture->filename;
			?>
			<div>
				<?php if($profesor_name) : ?>
				<div class="list-custom-left">
					<ul>
						<?php if ($profesor_pic) : ?>
						<li class="text-center" class="pic">
							<div class="grid-list-pic"><img src="<?php print '/'.$pathfile.'pictures/'.$profesor_pic; ?>" alt="<?php print $profesor_name ?>" width="98px" height="auto" class="img-circle"></div>
						</li>
						<?php endif  ?>
						<?php 
				      if ($language->language == 'en') {
				        $profesor_url = "/" . $language->prefix . "/" . drupal_get_path_alias('page/30/profesores/'.$profesor_id, $language->language); 
				      }else
				        $profesor_url = "/" . drupal_get_path_alias('page/30/profesores/'.$profesor_id, $language->language); 
				    ?> 
						<li class="pl-21 text-gray">
							<div class="mb-7">
								<a href="/user/<?php print $profesor_id ?>" class="thin h3 text-hover-primary"><?php print $profesor_name ?></a>
								<?php if ($language->language != 'en'): ?>
								<span><?php print $profesor_cargo ?></span>
								<?php elseif ($language->language == 'en'): ?>
								<span><?php print $profesor_cargo_ingles ?></span>
								<?php endif ?>								
							</div>
							<?php if ($language->language != 'en'): ?>
							<?php print $profesor_resenia ?>
							<?php elseif ($language->language == 'en'): ?>
							<?php print $profesor_resenia_ingles ?>
							<?php endif ?>	
						</li>
					</ul>
				</div>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		<div>
			<ul class="grid-list grid-list-5 grid-list-1-xs grid-list-hover grid-list-hover-gray-lighter grid-list-centered size xs">
				<?php foreach ($detalles as $key => $detalle) : ?>
					<?php 
						$tid = $detalle['entity']->field_tipo_de_detalle['und']['0']['tid'];
					?>
					<?php if ($tid == '88') :?>
						<?php $nid = $detalle['entity']->nid;?>
						<?php $path = drupal_get_path_alias('node/'.$nid, $language->language); ?>
						<?php if ($language->language != 'en'): ?>
						<li data-href="/<?php print $path; ?>">
						<?php elseif ($language->language == 'en'): ?>
						<li data-href="<?php print '/'.$language->language.'/'.$path; ?>">
						<?php endif ?>
							<div>
								<div class="size sm">
									<i class="text-primary icon-admisiones-primeros-puestos"></i>
								</div>
								<small class="thin text-primary"><?php print t('Requirements') ?></small>
							</div>
						</li>
					<?php endif; ?>
					<?php if ($tid == '90') :?>
						<?php $nid = $detalle['entity']->nid;?>
						<?php $path = drupal_get_path_alias('node/'.$nid, $language->language); ?>
						<?php if ($language->language != 'en'): ?>
						<li data-href="/<?php print $path; ?>">
						<?php elseif ($language->language == 'en'): ?>
						<li data-href="<?php print '/'.$language->language.'/'.$path; ?>">
						<?php endif ?>
							<div>
								<div class="size sm">
									<i class="text-primary icon-admisiones-alto-rendimiento"></i>
								</div>
								<small class="thin text-primary"><?php print t('Agenda') ?></small>
							</div>
						</li>
					<?php endif; ?>
					<?php if ($tid == '92') :?>
						<?php $nid = $detalle['entity']->nid;?>
						<?php $path = drupal_get_path_alias('node/'.$nid, $language->language); ?>
						<?php if ($language->language != 'en'): ?>
						<li data-href="/<?php print $path; ?>">
						<?php elseif ($language->language == 'en'): ?>
						<li data-href="<?php print '/'.$language->language.'/'.$path; ?>">
						<?php endif ?>
							<div>
								<div class="size sm">
									<i class="text-primary icon-admisiones-traslado"></i>
								</div>
								<small class="thin text-primary"><?php print t('Sign up') ?></small>
							</div>
						</li>
					<?php endif; ?>
					<?php //if ($tid == '91') :?>
						<?php //$nid = $detalle['entity']->nid;?>
						<?php //$path = drupal_get_path_alias('node/'.$nid, $language->language); ?>
						<?php //if ($language->language != 'en'): ?>
						<!--li data-href="/<?php //print $path; ?>"-->
						<?php //elseif ($language->language == 'en'): ?>
						<!--li data-href="<?php //print '/'.$language->language.'/'.$path; ?>"-->
						<?php //endif ?>
							<!--div>
								<div class="size sm">
									<i class="text-primary icon-admisiones-centro-pre"></i>
								</div>
								<small class="thin text-primary"><?php //print t('Contact us') ?></small>
							</div>
						</li-->
					<?php //endif; ?>
					<?php if ($tid == '89') :?>
						<?php $nid = $detalle['entity']->nid;?>
						<?php $path = drupal_get_path_alias('node/'.$nid, $language->language); ?>
						<?php if ($language->language != 'en'): ?>
						<li data-href="/<?php print $path; ?>">
						<?php elseif ($language->language == 'en'): ?>
						<li data-href="<?php print '/'.$language->language.'/'.$path; ?>">
						<?php endif ?>
							<div>
								<div class="size sm">
									<i class="text-primary icon-admisiones-bachillerato"></i>
								</div>
								<small class="thin text-primary"><?php print t('Brochure') ?></small>
							</div>
						</li>
					<?php endif; ?>
				<?php endforeach; ?>
				
				  <?php if (!$node->field_inscripciones_cerradas['und'][0]['value']): ?>
					<?php
							//capturamos la ruta de inscripción de formulario
							$url = drupal_get_path_alias('node/'.$nid, $language->language);
							$path_url = split('/brochure', $url);
							$path = $path_url[0];
					?>
					<li data-href="<?php print base_path() . $path . '/formulario-de-inscripcion'; ?>">
						<div>
							<div class="size sm">
								<i class="text-primary icon-admisiones-centro-pre"></i>
							</div>
							<small class="thin text-primary"><?php print t('Inscription') ?></small>
						</div>
					</li>
				<?php endif; ?>
				
			</ul>
		</div>
	</div>
	<div id="section-scroll" class="hidden-sm hidden-xs">
	  <div class="text-right pv-21 btn-apply animated">
	    <?php if ($language->language != 'en'): ?>
	      <a class="btn btn-primary uppercase atm-scroll-item" href="/modalidades-de-admision"><?php print t('Sign') ?></a>
	    <?php elseif ($language->language == 'en'): ?>
	      <a class="btn btn-primary uppercase atm-scroll-item" href="/<?php print $language->language ?>/methods-of-admission"><?php print t('Sign') ?></a>
	    <?php endif ?>  
	  </div>
	</div>
</div>
