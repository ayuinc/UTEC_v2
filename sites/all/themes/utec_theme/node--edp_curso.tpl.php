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
  $profesor_name = $node->field_profesor['und']['0']['entity']->name;
  $profesor_id = $node->field_profesor['und']['0']['entity']->uid;
  $profesor_cargo = $node->field_profesor['und']['0']['entity']->field_descripci_n['und']['0']['value'];
  $profesor_resenia = $node->field_profesor['und']['0']['entity']->field_rese_a['und']['0']['value'];
  $profesor_pic = $node->field_profesor['und']['0']['entity']->picture->filename;

  $field_requisito = $node->field_requisito['und']['0']['value'];
  $field_temario = $node->field_temario['und']['0']['value'];
  $field_inscribete = $node->field_inscribete['und']['0']['value'];
  $field_contactanos = $node->field_contactanos['und']['0']['value'];
  $field_brochure = $node->field_brochure['und']['0']['value'];

  $nodo_id = $node->field_menu_edp_detalles['und']['0']['entity']->nid;
  $nodo_id = $node->field_menu_edp_detalles['und']['0']['entity']->nid;
  $nodo_id = $node->field_menu_edp_detalles['und']['0']['entity']->nid;
  $nodo_id = $node->field_menu_edp_detalles['und']['0']['entity']->nid;
	
	$detalles = $node->field_menu_edp_detalles['und'];
  //kpr($node);
?>



<div class="container-sm"> 
	<h1 class="light"><?php print $titulo ?></h1>
	<div class="separator-gray separator-sm"></div>						
	<h3><?php print $sub_titulo ?></h3>
	<div class="pv-ch-28 p-ch-gray">
		<?php print $cuerpo ?>
		<?php if ($imagen!='') { ?>
			<img src="<?php print('/'.$pathfile.$imagen); ?>" alt="#" class="img-responsive">
			<span><?php print $texto_imagen ?></span>
		<?php } ?>
	</div>
	<div class="pv-ch-42">
		<div class="list-custom-left normalize-text lead-ch mb-ch-21">
			<ul>
				<li class="bg-gray text-white uppercase text-center p-21">
					<?php print t('Date') ?>
				</li>
				<li class="pl-21">
					<p><?php print $fecha ?></p>
				</li>
			</ul>
			<ul>
				<li class="bg-gray text-white uppercase text-center p-21">
					<?php print t('Time') ?>
				</li>
				<li class="pl-21">
					<p><?php print $hora ?></p>
				</li>
			</ul>
			<ul>
				<li class="bg-gray text-white uppercase text-center p-21">
					<?php print t('Place') ?>
				</li>
				<li class="pl-21">
					<p><?php print $lugar ?></p>
				</li>
			</ul>
		</div>
		<div>
			<h3><?php print t('Goals:') ?></h3>
			<div class="list-custom">
				<?php print $obejtivos ?>
			</div>
		</div>
		<div>
			<h3><?php print t('Address to:') ?></h3>
			<div class="list-custom">
				<?php print $dirigido ?>
			</div>
		</div>
		<div>
			<?php if($profesor_name) : ?>
			<h3><?php print t('Faculty:') ?></h3>
			<div class="list-custom-left">
				<ul>
					<li class="text-center">
						<div class="grid-list-pic"><img src="<?php print '/'.$pathfile.'pictures/'.$profesor_pic; ?>" alt="" width="98px" height="auto" class="img-circle"></div>
						<div>
							<a href="/user/<?php print $profesor_id ?>" class="thin"><?php print $profesor_name ?></a>
							<span><?php print $profesor_cargo ?></span>
						</div>
					</li>
					<li class="pl-21 text-gray"><?php print $profesor_resenia ?></li>
				</ul>
			</div>
			<?php endif; ?>
		</div>
		<div>
			<ul class="grid-list grid-list-5 grid-list-1-xs grid-list-hover grid-list-hover-gray-lighter size xs">
				<?php foreach ($detalles as $key => $detalle) : ?>
					<?php 
						$tid = $detalle['entity']->field_tipo_de_detalle['und']['0']['tid'];
					?>
					<?php if ($tid == '88') :?>
						<?php $nid = $detalle['entity']->nid;?>
					<li data-href="<?php print '/node/'.$nid ?>">
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
					<li data-href="<?php print '/node/'.$nid ?>">
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
					<li data-href="<?php print '/node/'.$nid ?>">
						<div>
							<div class="size sm">
								<i class="text-primary icon-admisiones-traslado"></i>
							</div>
							<small class="thin text-primary"><?php print t('Sign up') ?></small>
						</div>
					</li>
					<?php endif; ?>
					<?php if ($tid == '91') :?>
						<?php $nid = $detalle['entity']->nid;?>
					<li data-href="<?php print '/node/'.$nid ?>">
						<div>
							<div class="size sm">
								<i class="text-primary icon-admisiones-centro-pre"></i>
							</div>
							<small class="thin text-primary"><?php print t('Contact us') ?></small>
						</div>
					</li>
					<?php endif; ?>
					<?php if ($tid == '89') :?>
						<?php $nid = $detalle['entity']->nid;?>
					<li data-href="<?php print '/node/'.$nid ?>">
						<div>
							<div class="size sm">
								<i class="text-primary icon-admisiones-bachillerato"></i>
							</div>
							<small class="thin text-primary"><?php print t('Brochure') ?></small>
						</div>
					</li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
