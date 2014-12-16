<?php

/**
 * @file
 * This layout is designed to be the site template layout when using
 * the Panels Everywhere module.
 */
?>
<div class="site-wrapper">
  <div class="site-content">
    <?php if (!empty($content['header'])): ?>
      <div id="header"><?php print $content['header']; ?></div>
    <?php endif; ?>

    <?php if (!empty($content['header-bottom'])): ?>
      <div class="hero-unit"><?php print $content['header-bottom']; ?></div>
    <?php endif; ?>

    <?php if (!empty($content['body'])): ?>
      <div class="body minhp-100 pvp-7" id="sec-1">
        <div class="container">
          <?php print $content['body']; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if (!empty($content['footer'])): ?>
      <div class="footer"><?php print $content['footer']; ?></div>
    <?php endif; ?>
  </div>
</div>
