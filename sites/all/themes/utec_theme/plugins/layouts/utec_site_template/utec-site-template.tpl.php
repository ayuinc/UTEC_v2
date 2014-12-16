<?php

/**
 * @file
 * This layout is designed to be the site template layout when using
 * the Panels Everywhere module.
 */
?>
<div class="site-wrapper">
  <div class="site-content">

    <?php print $content['header']; ?>

    <div class="hero-unit video-bg"><?php print $content['header-bottom']; ?></div>

    <div class="body minhp-100 pvp-7" id="sec-1">
      <div class="container">
        <?php print $content['body']; ?>
      </div>
    </div>

    <div class="footer"><?php print $content['footer']; ?></div>
    
  </div>
</div>
