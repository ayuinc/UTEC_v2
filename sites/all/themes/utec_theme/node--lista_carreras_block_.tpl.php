<?php 
	global $language 
  $title = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
  $carrera = $node->field_nombre['und']['0']['value'];
  $link = $node->field_carrera_link['und']['0']['value'];
  $iconos = $node->field_texo['und']['0']['value'];

  $titles = explode(' ', $title)
  $titles1 = explode(' ', $title, 2)
  print_r($titles1);
?>
<div class="pv-42" id="home-sec-1">
	<div class="container">
		<h3 class="h2 lead medium mb-7"><span class="text-gray-darker"><?php print $titles[0].'/'.$titles[1]; ?></span> <span class="text-gray"><?php foreach ($titles as $key => $title){if($title[2]){print $title;}} ?></span></h3>
		<h4 class="lead mb-35"><?php print $cuerpo; ?></h4>
		<ul class="grid-list grid-list-5 grid-list-1-xs grid-list-1-landscape pt-21 list-carreras text-center text-left-xs mb-ch-21-xs">
			<li>
				<div>
					<div><a href="/<?php print $language->language.'/'.$link; ?>" class="atm-item-carrera"><i class="<?php print $iconos; ?>"></i></a></div>
					<h2>
						<a href="/<?php print $language->language.'/'.$link; ?>" class="atm-item-carrera">
							<?php foreach ($carrera as $key => $part) : ?>
							<span><?php print $part; ?></span>
							<?php endforeach; ?>
						</a>
					</h2>
				</div>
			</li>
		</ul>
	</div>
</div>
