<?php 

?>

<div class="container-sm">
  <h1 class="light">Convenios de Intercambio</h1>
  <div class="separator-gray separator-sm"></div>
  <h3><?php //print $cuerpo ?></h3>
  <div class="pv-ch-42">
    <div>
      <ul class="grid-list grid-list-3 grid-list-hover size sm">
				<?php foreach ($rows as $id => $row): ?>
			    <?php print $row;?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>