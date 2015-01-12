<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="container-sm">
	<h1 class="light">Noticias</h1>
	<div class="separator-gray separator-sm"></div>	
	<div id="carousel-custom" class="carousel carousel-custom slide mb-42" data-ride="carousel">
		<!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		  <?php foreach ($rows as $id => $row): ?>
		    <?php print $row;?>
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