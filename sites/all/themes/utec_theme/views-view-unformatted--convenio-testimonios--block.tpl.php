<div class="pv-21">
	<div class="container-sm section-scroll-content hidden-xs" id="testimonies">
		<h2 class="light"><?php print $view->get_title(); ?></h2>
		<div class="separator-gray separator-sm"></div>
		<div id="carousel-example-generic" class="carousel-custom slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner text-center" role="listbox">
		    <?php $count = 0; ?>
		    <?php foreach ($rows as $id => $row): ?>
					<?php if (fmod($count, 3) == 0) : ?>
					<div class="row item <?php ($count == 0) ? print 'active' : '' ; ?>">
					<?php endif; ?>  
						<div class="col-sm-4">
					    <?php print $row;?>
						</div>
			    <?php if (fmod($count, 3) == 2) : ?> 
					</div>
					<?php endif; ?> 
					<?php $count++; ?>
		    <?php endforeach; ?>
		  </div>
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="icon-prev hidden-xs" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="icon-next hidden-xs" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<div class="text-center mt-42"><a href="page/27/testimonies" class="h4 text-primary"><?php print t('View more testimonies'); ?></a></div>
		<a class="scroll-down scroll-down-sq size lg" href="#apply" rel="nofollow"><i class="icon-arrows-down"></i></a>
	</div>

	<div class="container-sm section-scroll-content hidden-lg" id="testimonies">
		<h2 class="light"><?php print $view->get_title(); ?></h2>
		<div class="separator-gray separator-sm"></div>
		<div id="carousel-example-generic" class="carousel-custom slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner text-center" role="listbox">
		    <?php $count = 0; ?>
		    <?php foreach ($rows as $id => $row): ?>
					<div class="row item <?php ($count == 0) ? print 'active' : '' ; ?>">
						<div class="col-sm-12">
					    <?php print $row;?>
						</div>
					</div>
					<?php $count++; ?>
		    <?php endforeach; ?>
		  </div>
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="icon-prev hidden-xs" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="icon-next hidden-xs" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<div class="text-center mt-42"><a href="page/27/testimonies" class="h4 text-primary"><?php print t('View more testimonies'); ?></a></div>
		<a class="scroll-down scroll-down-sq size lg" href="#apply" rel="nofollow"><i class="icon-arrows-down"></i></a>
	</div>
</div>


































