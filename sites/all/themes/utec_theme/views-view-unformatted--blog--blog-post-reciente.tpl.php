<h1 class="light"><?php print $view->get_title(); ?></h1>
<div class="separator-gray separator-sm"></div>
<?php foreach ($rows as $id => $row): ?>
  <?php print $row;?>
<?php endforeach; ?> 