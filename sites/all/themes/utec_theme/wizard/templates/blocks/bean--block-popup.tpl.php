<div class="overlay-background"></div>
<div class="overlay-popup utec-overlay">
  <div class="overlay-popup-content">
    <div class="overlay-close">Cerrar <span>x</span></div>
    <h2><?php print $title; ?><strong class="color-heavenly"><?php print render($content['field_bt_subtitle']); ?></strong></h2>
    <?php if ($content['field_bt_description']): ?>
    <h4><?php print render($content['field_bt_description']); ?></h4>
    <?php endif; ?>
    <div class="utec-overlay-content">
      <div class="utec-overlay-items clearfix">
        <ul>
          <li class="item item-primary">
            <?php print render($content['field_bt_popup_item_primary']); ?>
          </li>
          <li class="item item-secundary">
            <?php print render($content['field_bt_popup_item_secundary']); ?>
          </li>
        </ul>
      </div><!-- /. utec-overlay-items -->
      <div class="utec-overlay-footer">
        <?php if ($content['field_bt_description']): ?>
        <p><?php print render($content['field_bt_popup_footer']); ?></p>
        <?php endif; ?>
      </div>
    </div><!-- /.utec-overlay-content -->
  </div><!-- ./overlay-popup-content -->
</div>