<?php

/**
 * @file
 * This layout is designed to be the site template layout when using
 * the Panels Everywhere module.
 */
?>
<div class="site-wrapper toggle-nav">

  <?php if (!empty($content['menu'])): ?>
    <div class="site-menu"><?php print $content['menu']; ?></div>
  <?php endif; ?>

  <?php if (!empty($content['menu-content'])): ?>
    <div class="site-menu-content"><?php print $content['menu-content']; ?></div>
  <?php endif; ?>
	<a href="#" class="site-menu-close hidden"></a>
  <?php if (!empty($content['content'])): ?>
    <div class="site-content"><?php print $content['content']; ?></div>
  <?php endif; ?>

  <?php if (!empty($content['footer'])): ?>
    <div class="site-footer"><?php print $content['footer']; ?></div>
  <?php endif; ?>

</div>
