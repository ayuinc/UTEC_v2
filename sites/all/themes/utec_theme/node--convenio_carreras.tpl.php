<?php 

  $title = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
  $carreras = $node->field_nombre['und'];
  $links = $node->field_carrera_link['und'];
  $iconos = $node->field_texo['und'];
?>

	<div class="container-sm section-scroll-content" id="course">
		<h2 class="light"><?php print $title ?></h2>
	  <div class="separator-gray separator-sm"></div>
		<p class="mb-35" style="line-height: 1.3;"><?php print $cuerpo; ?></p>
		<ul class="grid-list grid-list-3 grid-list-1-xs grid-list-1-landscape pt-21 list-carreras text-center text-left-xs mb-ch-21-xs">
			<?php foreach ($carreras as $key => $carrera) : ?>
			<?php 
				$partes = array();
				$partes = explode(' ', $carrera['value'], 2); 
			?>
			<li>
				<div>
					<div><a href="<?php if ($language->language!="es") {print '/'.$language->language;} print '/'.$links[$key]['value']; ?>" class="atm-item-carrera"><i class="<?php print $iconos[$key]['value']; ?>"></i></a></div>
					<h2>
						<a href="<?php if ($language->language!="es") {print '/'.$language->language;} print '/'.$links[$key]['value']; ?>" class="atm-item-carrera">
							<span><?php print $partes[0]; ?></span>
							<span><?php print $partes[1]; ?></span>
							<span></span>
						</a>
					</h2>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
		<a class="scroll-down scroll-down-sq size lg" href="#studentlife" rel="nofollow"><i class="icon-arrows-down"></i></a>
	</div>

