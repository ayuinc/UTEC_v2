<?php 
	global $language; 
  $title = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
  $carreras = $node->field_nombre['und'];
  $links = $node->field_carrera_link['und'];
  $iconos = $node->field_texo['und'];
  $titles = explode(' ', $title, 3);

?>
<div class="pv-42" id="home-sec-1">
	<div class="container">
		<h3 class="h2 lead medium mb-7"><span class="text-gray-darker"><?php print $titles[0].' '.$titles[1]; ?></span> <span class="text-gray"><?php print $titles[2]; ?></span></h3>
		<h4 class="lead mb-35"><?php print $cuerpo; ?></h4>
		<ul class="grid-list grid-list-5 grid-list-1-xs grid-list-1-landscape pt-21 list-carreras text-center text-left-xs mb-ch-21-xs">
			<?php foreach ($carreras as $key => $carrera) : ?>
			<?php 
				$partes = array();
				$partes = explode(' ', $carrera['value'], 2); 
			?>
			<li>
				<div>
					<div><a href="/<?php if ($language->language=="en") {print $language->language;} print '/'.$links[$key]['value']; ?>" class="atm-item-carrera"><i class="<?php print $iconos[$key]['value']; ?>"></i></a></div>
					<h2>
						<a href="/<?php print $language->language.'/'.$links[$key]['value']; ?>" class="atm-item-carrera">
							<span><?php print $partes[0]; ?></span>
							<span><?php print $partes[1]; ?></span>
							<span></span>
						</a>
					</h2>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
