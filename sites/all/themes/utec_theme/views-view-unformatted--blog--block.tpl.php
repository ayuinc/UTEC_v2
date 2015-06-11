
		<h1 class="h2 lead medium mb-56"><span class="text-gray-darker"><?php print $view->get_title(); ?></span></h1>			
		<div class="separator-gray separator-sm"></div>
		<?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?> 
