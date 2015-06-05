<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>

</div>

<?php drupal_add_js(drupal_get_path('theme', 'utec_theme') .'/js/app/vendor/TweenMax.min.js'); ?>
<?php drupal_add_js(drupal_get_path('theme', 'utec_theme') .'/js/app/vendor/ScrollToPlugin.min.js'); ?>
<?php drupal_add_js(drupal_get_path('theme', 'utec_theme') .'/js/app/vendor/jquery.scrollmagic.min.js'); ?>
<?php drupal_add_js(drupal_get_path('theme', 'utec_theme') .'/js/app/lib/scroll-control.js'); ?>