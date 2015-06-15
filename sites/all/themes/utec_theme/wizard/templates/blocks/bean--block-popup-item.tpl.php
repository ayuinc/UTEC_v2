<?php $action = $content['field_bt_popup_clic_action']['#items'][0]['value']; ?>
<div class="item-container">
<?php if ($action == 'close'): ?>
  <div class="item-square squeare-close clearfix">
    <div class="view-more">Ver más</div>
    <div class="item-image">
      <?php print render($content['field_bt_popup_item_image']); ?>
    </div>
    <div class="item-body">
      <h3><?php print $title; ?><em><?php print render($content['field_bt_subtitle']); ?></em></h3>
      <p><?php print render($content['field_bt_description']); ?></p>
    </div>
  </div>
<?php elseif ($action = 'url'): ?>
<?php
  print l(
    '<div class="view-more">Ver más</div>' . 
    '<div class="item-image">' . render($content['field_bt_popup_item_image']) . '</div>' . 
    '<div class="item-body">' . 
    '<h3>' . $title . '<em>' . render($content['field_bt_subtitle']) . '</em></h3>' . 
    '<p>' . render($content['field_bt_description']) . '</p>' . 
    '</div>', 
    render($content['field_bt_popup_item_url']), 
    array(
      'attributes' => array(
        'class' => array(
          'item-square', 
          'clearfix'
        ), 
        'target' => '_blank'
      ), 
      'html' => TRUE
    )
  );
?>
<?php else: ?>
  <div class="item-square clearfix">
    <div class="view-more">Ver más</div>
    <div class="item-image">
      <?php print render($content['field_bt_popup_item_image']); ?>
    </div>
    <div class="item-body">
      <h3><?php print $title; ?><em><?php print render($content['field_bt_subtitle']); ?></em></h3>
      <p><?php print render($content['field_bt_description']); ?></p>
    </div>
  </div>
<?php endif; ?>
</div>