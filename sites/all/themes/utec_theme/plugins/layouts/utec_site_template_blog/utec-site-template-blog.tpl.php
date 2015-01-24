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
    <div class="hero-unit pt-63-xs video-bg breadcrumbs-light">
      <?php print $content['header-bottom']; ?>
    </div>
  <?php endif; ?>
    <div class="body minhp-100 pv-63 breadcrumbs-dark" id="sec-1">
      <div class="container">
        <h1 class="light"><?php print t('Blog UTEC') ?></h1>
        <div class="separator-gray separator-sm"></div>
        <div class="row">
          <div class="col-sm-8">
            <?php print $content['left-side']; ?>
          </div>
          <div class="col-sm-4 mb-ch-42">
            <?php print $content['right-side']; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="footer"><?php print $content['footer']; ?></div>
    
  </div>
</div>

