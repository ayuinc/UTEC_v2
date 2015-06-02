<div id="section-scroll" class="<?php print $classes; ?> block-menu-fixed hidden-sm hidden-xs clearfix"<?php print $attributes; ?>>
  <ul class="p-14 pb-42">
    <?php foreach ($content['field_bt_menufixed_link']['#items'] as $item): ?>
      <li><?php print l($item['title'], $item['url'], array('fragment' => $item['fragment'], 'query' => $item['query'], 'html' => $item['html'])); ?></li>
    <?php endforeach; ?>
  </ul>
  <div class="text-center pv-7"> 
    <button type="button" class="col-xs-12 btn btn-alumnos btn-primary uppercase atm-scroll-item" data-toggle="modal" data-target="#myModal">LOGIN</button>
  </div>
</div>
