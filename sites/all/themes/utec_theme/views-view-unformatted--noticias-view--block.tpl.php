<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="pv-56" id="noticias">
	<h2 class="lead medium mb-0"><span class="text-gray-darker">Noticias: Al día con la</span> <span class="text-gray">UTEC</span></h2>
	<h4 class="lead mb-56 mt-0">Alentamos el emprenidmiento y la innovación.</h4>
		<?php //global $count; ?>
    <?php foreach ($rows as $id => $row): ?>
		    <?php
		    	$count = 0;
			    print $row;
			    $count = 1;
		    ?>
		<?php endforeach; ?>
	<!--<div>
		<button class="btn btn-lg btn-primary see-more uppercase">Ver más noticias</button>
	</div>-->
</div>
