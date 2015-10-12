<?php if (!empty($tabs)): ?>
  <?php print render($tabs); ?>
<?php endif; ?>

<?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
<?php endif; ?>

<?php if (!empty($messages)): ?>
  <?php //print $messages; ?>
  <div>Gracias por escribir!</div>
<?php endif; ?>

<?php if (!empty($help)): ?>
  <?php print $help; ?>
<?php endif; ?>
