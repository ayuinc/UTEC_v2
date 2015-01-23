<?php 
		global $language; 
		$idioma = $language->language;	
		$titulo = "EDP-Cursos";	
?>


<div class="container-sm">
	<h1 class="light"><?php print t('All Courses') ?></h1>
	<div class="separator-gray separator-sm"></div>						
	<div>
		<ul class="grid-list grid-list-2 grid-list-1-xs list-hover list-hover-gray-lighter list-hover-unstyled isotope-grid">
    <?php foreach ($rows as $id => $row): ?>
	    <?php print $row;?>
		<?php endforeach; ?>
		</ul>
	</div>
</div>