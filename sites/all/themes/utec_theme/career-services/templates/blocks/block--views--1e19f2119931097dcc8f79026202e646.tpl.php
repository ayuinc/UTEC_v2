<div class="container-md">
  <div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> pv-42 clearfix"<?php print $attributes; ?>>
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <h2 class="lead medium mb-0"><?php print $block->subject ?></h2>
    <?php endif;?>
    <?php print render($title_suffix); ?>
    <?php print $content ?>
  </div>
</div>