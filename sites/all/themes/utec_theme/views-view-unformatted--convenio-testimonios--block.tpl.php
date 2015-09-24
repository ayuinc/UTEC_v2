<div class="pv-21">
	<div class="container">
		<h3 class="h2 lead medium mb-56"><span class="text-gray-darker"><?php print $view->get_title(); ?></span></h3>			
		<?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?> 
	</div>
</div>

<div id="carousel-custom" class="carousel carousel-custom slide mb-42" data-ride="carousel">
	<!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
		<?php $count = 0; ?>
    <?php foreach ($rows as $id => $row): ?>
			<?php if (fmod($count, 3) == 0) : ?>
			<div class="item">
			<?php endif; ?>  
				<div class="banner banner-label-bottom mb-7 ml-0">
			    <?php print $row;?>
				</div>
	    <?php if (fmod($count, 3) == 3) : ?> 
			</div>
			<?php endif; ?> 
			<?php $count++; ?>
    <?php endforeach; ?>
	</div>
	<!-- Controls -->
  <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
    <span class="icon-prev hidden-xs" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
    <span class="icon-next hidden-xs" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>

	





































