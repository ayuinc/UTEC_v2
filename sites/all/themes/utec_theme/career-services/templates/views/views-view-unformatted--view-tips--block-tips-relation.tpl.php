<?php $i = 0; ?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="row pb-28-lg">
<?php foreach ($rows as $id => $row): ?>
  <?php if ($i == 2): ?>
    </div>
    <div class="row pb-28-lg">
    <?php $i = 0; ?>
  <?php endif; ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' col-sm-6 pv-21-xs"';  } ?>>
    <?php print $row; ?>
  </div>
  <?php $i++; ?>
<?php endforeach; ?>
</div>
