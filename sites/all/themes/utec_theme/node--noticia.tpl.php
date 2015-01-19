<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

  $category = $node->field_categor_a['und']['0']['value'];
	$titulo = $node->title;	 		
	$cuerpo = $node->body['und']['0']['value'];	
	$imagen = $node->field_imagen['und']['0']['filename'];
	kpr($node);
?>

<div class="container-sm">
	<h1 class="light"><?php print $titulo ?></h1>
	<div class="separator-gray separator-sm"></div>
	<div class="lead-ch p-ch-gray">
		<div id="carousel-custom" class="carousel carousel-custom slide mb-42" data-ride="carousel">
			<!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  	<?php $images = $node->field_imagen['und']; $count=0; ?>
			  <?php foreach ($images as $image): ?>
			  <div class="item <?php if($count == 0){print 'active';} ?>">
			  	<div class="banner banner-label-custom mb-14 ml-0">
						<div class="banner-pic" style="background-image: url(<?php print '/'.$pathfile.'noticias/'.$image['filename'] ?>);">
							<div class="banner-label bg-gray-darker text-white"><span><?php print $category ?></span></div>
						</div>
					</div>
			    <!-- <img src="<?php print '/'.$pathfile.'noticias/'.$image['filename'] ?>" alt="..." height="479" width="720"> -->
			  </div>
			  <?php $count++; ?>
				<?php endforeach; ?>
			</div>
			<!-- Controls -->
			<?php $images = $node->field_imagen['und']['1']; ?>
			<?php if($images) : ?>
			  <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
			    <span class="icon-prev hidden-xs" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
			    <span class="icon-next hidden-xs" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			<?php endif; ?>
		</div>
		<div class="pv-ch-28">
			<p><?php print $cuerpo ?></p>
		</div>
	</div>
</div>

