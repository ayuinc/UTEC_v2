<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <li<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' grid-list-item"';  } ?>>
    <?php print $row; ?>
  </li>
<?php endforeach; ?>
