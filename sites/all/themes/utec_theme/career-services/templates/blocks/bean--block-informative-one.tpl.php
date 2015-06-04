<div id="te-preparamos" class="container-md">
  <div class="<?php print $classes; ?> pt-28 pb-42 clearfix"<?php print $attributes; ?>>
    <h2 class="lead medium mb-7">
      <span class="text-gray-darker"><?php print $title; ?></span>
      <span class="text-gray"> <?php print render($content['field_bt_subtitle']); ?></span>
    </h2>
    <h4 class="lead mt-0 pt-28 pb-7">
      <?php print render($content['field_bt_description']); ?>
    </h4>
    <div class="anchor-img-grid anchor-img-grid-1">
      <?php foreach($content['field_bt_infoone_linkimage_1']['#items'] as $item): ?>
        <div class="col-md-6">
          <div class="anchor-block-1">
          <?php if ($item['url']): ?>
            <div class="pic">
              <?php
                print theme('image_style', array(
                  'style_name' => '456x456', 
                  'path' => $item['uri'], 
                  'alt' => $item['alt']
                ));
              ?>
            </div>
            <?php
              print l(
                '<div class="overlay"><h2 class="light">' . $item['title'] . '</h2></div>', 
                $item['url'], 
                array(
                  'html' => TRUE
                )
              );
            ?>
          <?php else: ?>
            <div class="pic">
              <?php
                print theme('image_style', array(
                  'style_name' => '456x456', 
                  'path' => $item['uri'], 
                  'alt' => $item['alt']
                ));
              ?>
            </div>
          <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
      <div class="col-md-6">
      <?php foreach($content['field_bt_infoone_linkimage_2']['#items'] as $item): ?>
        <div class="anchor-block-2">
          <?php if ($item['url']): ?>
          <div class="pic">
            <?php
              print theme('image_style', array(
                'style_name' => '456x214', 
                'path' => $item['uri'], 
                'alt' => $item['alt']
              ));
            ?>
          </div>
          <?php
            print l(
              '<div class="overlay"><h2 class="light">' . $item['title'] . '</h2></div>', 
              $item['url'], 
              array(
                'html' => TRUE
              )
            );
          ?>
        <?php else: ?>
          <div class="pic">
            <?php
              print theme('image_style', array(
                'style_name' => '456x214', 
                'path' => $item['uri'], 
                'alt' => $item['alt']
              ));
            ?>
          </div>
        <?php endif; ?>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>