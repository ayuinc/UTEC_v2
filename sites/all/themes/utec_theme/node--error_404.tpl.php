<?php 

$titulo = $node->title;
$imagen = $node->field_image['und'][0]['uri'];
$body = $node->body['und'][0]['value'];

?>

<div class="bg-img-block minh-630 flex-middle-center" style="background-image: url(<?php print image_style_url($image_style, $imagen); ?>)">
	<div class="container-sm light text-gray ptp-7 pl-42">
		<h1 class="lead light uppercase text-gray-dark h4"><?php print $titulo ?></h1>
			<?php print $body ?>
		<div class="pv-35">
			<a href="/" class="btn btn-xl btn-white btn-outline uppercase bold see-more"><?php print t('Get back to the homepage'); ?></a>
		</div>
		<div class="sitemap text-left pv-35" style="display:inline-block">
			<h4><?php print t('Also you can go to:'); ?></h4>
			<?php echo theme('site_map'); ?>
		</div>
	</div>
</div>