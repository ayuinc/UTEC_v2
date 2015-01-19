<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="container-sm">
	<h1 class="light"><?php print t('News') ?></h1>
	<div class="separator-gray separator-sm"></div>	
	<div id="carousel-custom" class="carousel carousel-custom slide mb-42" data-ride="carousel">
		<!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	  	<?php $count = 0; ?>
		  <?php foreach ($rows as $id => $row): ?>
		  <div class="item <?php if($count == 0){print 'active';} ?>">
		    <?php print $row;?>
		  </div>
		  <?php $count++; ?>
			<?php endforeach; ?>
		</div>
		<!-- Controls -->
	  <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
	    <span class="icon-prev hidden-xs" aria-hidden="true"></span>
	    <span class="sr-only"><?php print t('Previews') ?></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
	    <span class="icon-next hidden-xs" aria-hidden="true"></span>
	    <span class="sr-only"><?php print t('Next') ?></span>
	  </a>	
	</div>