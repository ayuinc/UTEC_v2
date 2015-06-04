<?php if (in_array($view->current_display, array('block_tips_last', 'block_tips_last_english'))): ?>
<div class="view-more-blue text-center pt-21">
  <?php
    print l(
      $link_text . ' <i class="pl-7 m-0 icon-arrows-right h6 inline-block"></i>', 
      'bolsa-de-trabajo/tips', 
      array(
        'html' => TRUE
      )
    );
  ?>
</div>
<?php elseif (in_array($view->current_display, array('block_tips_relation', 'block_tips_relation_english'))): ?>
<div class="row text-center">
  <div class="view-more-blue btn btn-bg-outline-primary thin lead btn-gray mb-35">
    <?php
      print l(
        $link_text . ' <i class="pl-7 m-0 icon-arrows-right h6 inline-block"></i>', 
        'bolsa-de-trabajo/tips', 
        array(
          'html' => TRUE
        )
      );
    ?>
  </div>
</div>
<?php else: ?>
<div class="more-link">
  <a href="<?php print $more_url ?>">
    <?php print $link_text; ?>
  </a>
</div>
<?php endif; ?>