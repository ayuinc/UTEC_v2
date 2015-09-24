<div class="pv-21">
	<div class="container-sm">
		<h3 class="h2 lead medium mb-56"><span class="text-gray-darker"><?php print $view->get_title(); ?></span></h3>			


<!-- ----------------------------------------------------- -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $count = 0; ?>
    <?php foreach ($rows as $id => $row): ?>
			<?php if (fmod($count, 3) == 0) : ?>
			<div class="item grid-list grid-list-3 grid-list-1-xs grid-list-item-height grid-list-anchors pv-21 text-center next left">
			<?php endif; ?>  
				<div class="mb-ch-14">
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
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	


	</div>
</div>


































