<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;	 		
	$cuerpo = $node->body['und']['0']['value'];	
	$imagen = $node->field_imagen['und']['0']['filename'];

	print_r($node);
?>

<div class="container-sm">
	<h1 class="light"><?php print $titulo ?></h1>
	<div class="separator-gray separator-sm"></div>
	<div class="pv-ch-42 lead-ch p-ch-gray">
		<div id="carousel-custom" class="carousel carousel-custom slide mb-42" data-ride="carousel">
			<!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  	<?php $images = $node->field_imagen['und']; $count=0; ?>
			  <?php foreach ($images as $image): ?>
			  <div class="item <?php if($count == 0){print 'active';} ?>">
			    <img src="<?php print '/'.$pathfile.'noticias/'.$image['filename'] ?>" alt="..." height="479" width="720">
			  </div>
			  <?php $count++; ?>
				<?php endforeach; ?>
			</div>
			<!-- Controls -->
		  <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
		    <span class="icon-prev" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
		    <span class="icon-next" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>	
		</div>
		<p><?php print $cuerpo ?></p>
	</div>
</div>

<h3 class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
<div>
	<em class="h5">Alberto Iturrade</em><br><span class="text-gray">Ingeniero Mecánico</span>
</div>
<div class="flex-space-between">
	<div class="left">
		<em class="text-gray-light">Publicado: 27 de octubre 2014</em>
	</div>
	<div class="right">
		<ul class="social-links">
			<li><a href="#" class="icon-footer-facebook"></a></li>
			<li><a href="#" class="icon-footer-twitter"></a></li>
			<li><a href="#" class="icon-footer-email"></a></li>
			<li><a href="#" class="icon-footer-plus"></a></li>
		</ul>
	</div>
</div>
<img class="img-responsive" src="assets/img/img.png" alt="#">
<h3 class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua.</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<h3 class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua.</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

