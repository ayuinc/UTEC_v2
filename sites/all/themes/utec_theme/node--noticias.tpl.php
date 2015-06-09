<?php

  $category = $node->field_cate['und']['0']['taxonomy_term'];
	$titulo = $node->title;	 		
	$cuerpo = $node->body['und']['0']['value'];
	$images = $node->field_image['und'];
	// kpr($node);
	$term = i18n_taxonomy_localize_terms($category);
	kpr($term);
	$name = $term->name;
	$translated_term = i18n_taxonomy_term_get_translation($category, $language->language);
	kpr($translated_term);
?>

<div class="container-sm">
	<h1 class="light"><?php print $titulo ?></h1>
	<div class="separator-gray separator-sm"></div>
	<div class="p-ch-gray-dark">
		<div id="carousel-custom" class="carousel carousel-custom slide mb-42" data-ride="carousel">
			<!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  	<?php $count = 0; ?>
			  <?php foreach ($images as $image): ?>
			  <?php 
			  	$img_uri = $image['uri'];
			  	if ($image_style) {
						$image_url = image_style_url($image_style, $img_uri);  
			  	}
			  	else{
			  		$image_url = file_create_url($img_uri);
			  	}
				?>
			  <div class="item <?php if($count == 0){print 'active';} ?>">
			  	<div class="banner banner-label-bottom mb-7 ml-0">
						<div class="banner-pic" style="background-image: url(<?php print $image_url ?>);">
							<div class="banner-label bg-gray-darker text-white"><span><?php print $category ?></span></div>
						</div>
					</div>
			  </div>
			  <?php $count++; ?>
				<?php endforeach; ?>
			</div>
			<!-- Controls -->
			<?php $images = $node->field_image['und']['1']; ?>
			<?php if($images) : ?>
			  <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
			    <span class="icon-prev hidden-xs" aria-hidden="true"></span>
			    <span class="sr-only"><?php print t('Previous') ?></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
			    <span class="icon-next hidden-xs" aria-hidden="true"></span>
			    <span class="sr-only"><?php print t('Next') ?></span>
			  </a>
			<?php endif; ?>
		</div>
		<div class="pv-ch-7">
			<?php print $cuerpo ?>
		</div>
	</div>
</div>

