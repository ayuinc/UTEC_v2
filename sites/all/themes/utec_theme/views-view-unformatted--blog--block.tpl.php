<div class="pv-21">
	<div class="container">
		<h3 class="h2 lead medium mb-56"><span class="text-gray-darker"><?php print $view->get_title(); ?></span></h3>			
		<?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?> 
	</div>
</div>