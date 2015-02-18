<?php 
global $language;
$path = $base_url.'/'.$theme_path;
$pathfile= variable_get('file_public_path', conf_path() . '/files/'); 

$titulo = $node->title;
$imagen = $node->field_image['und'][0]['uri'];
$body = $node->body['und'][0]['value'];

$additional = module_invoke_all('site_map');
print_r($additional);
foreach ($additional as $themed_site_map_code) {
  // $variables['additional'] .= $themed_site_map_code;
}

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
