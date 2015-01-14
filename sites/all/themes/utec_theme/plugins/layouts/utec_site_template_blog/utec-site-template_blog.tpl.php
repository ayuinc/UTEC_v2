<?php

/**
 * @file
 * This layout is designed to be the site template layout when using
 * the Panels Everywhere module.
 */
?>
<div class="site-wrapper">
  <div class="site-menu">
    <?php print $content['menu-mobile']; ?>
  </div>
  <div class="site-content">


  <?php print $content['header']; ?>

  <?php if ($content['header-bottom']) :?>
    <div class="hero-unit video-bg">
      <?php print $content['header-bottom']; ?>
    </div>
  <?php endif; ?>
    <div class="body minhp-100 pvp-7" id="sec-1">
      <div class="container">
        <h1 class="light"><?php print t('Blog UTEC') ?></h1>
        <div class="separator-gray separator-sm"></div>
        <?php print $content['body']; ?>
        <div class="row">
          <div class="col-sm-8">
            <?php print $content['body']; ?>
          </div>
          <div class="col-sm-4 mb-ch-42">
            <?php print $content['body']; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="footer"><?php print $content['footer']; ?></div>
    
  </div>
</div>

