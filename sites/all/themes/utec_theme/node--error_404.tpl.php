<?php 
global $language;
$path = $base_url.'/'.$theme_path;
$pathfile= variable_get('file_public_path', conf_path() . '/files/'); 

$titulo = $node->title;
$imagen = $node->field_image['und'][0]['uri'];
$body = $node->body['und'][0]['value'];

// $block = block_load('site_map'); 
$block = module_invoke('site_map', 'site_map_block_view', 'syndicate');

var_dump($block);
print 'hola';
print render($block['content']);
?>

<div class="bg-img-block minh-630 flex-middle-center" style="background-image: url(<?php print file_create_url($imagen); ?>)">
	<div class="container-sm text-center lead-ch light">
		<h1 class="text-white lead light uppercase"><?php print $titulo ?></h1>
			<?php print $body ?>
		<div class="pv-35">
			<a href="/" class="btn btn-xl btn-white btn-outline uppercase bold see-more"><?php print t('Get back to the homepage'); ?></a>
		</div>
	</div>
</div>
