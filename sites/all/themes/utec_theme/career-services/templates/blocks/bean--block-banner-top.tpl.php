<div class="<?php print $classes; ?> block-banner-top hero-unit video-bg clearfix"<?php print $attributes; ?>> 
  <div class="img-placeholder">
    <?php print render($content['field_bt_bannertop_image']); ?>
  </div>
  <div class="overlay flex-middle-end">
    <div class="container-md text-left pb-28">
      <h1 class="mb-7 thin text-white lead"><?php print $title; ?></h1>
      <p class="text-white light lead mb-28"><?php print render($content['field_bt_description']); ?></p>
      <div class="view-more">
      <?php foreach ($content['field_bt_banner_link']['#items'] as $item): ?>
        <?php print l($item['title'] . ' <i class="icon-arrows-right"></i>', $item['url'], array('fragment' => $item['fragment'], 'query' => $item['query'], 'html' => $item['html'])); ?>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
