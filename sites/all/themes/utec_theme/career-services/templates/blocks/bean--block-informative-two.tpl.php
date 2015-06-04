<div class="container-md">
  <div class="<?php print $classes; ?> pv-42 clearfix"<?php print $attributes; ?>>
    <h2 class="lead medium mb-0">
      <span class="text-gray-darker"><?php print $title; ?></span>
      <span class="text-gray"> <?php print render($content['field_bt_subtitle']); ?></span>
    </h2>
    <h4 class="lead light pv-35 mt-0">
      <?php print render($content['field_bt_description']); ?>
    </h4>
    <div class="mb-ch-14">
      <div class="row">
        <div class="col-sm-6 mb-14">
          <div class="minh-556 p-14 border-grey ">
            <span>
              <h4 class="pl-7 pv-21 m-0 light">
                <?php print render($content['field_btg_infotwo_title_1']); ?>
              </h4>
            </span>
            <ul class="grid-list grid-list-3 p-ch-7">
            <?php foreach($content['field_btg_infotwo_linkimage_1']['#items'] as $item): ?>
              <li class="grid-list-item">
              <?php if ($item['url']): ?>
                <?php
                  print l(
                    '<div class="item-pic flex-column-center flex-aling-center">' . 
                    theme('image_style', array(
                      'style_name' => '130x130', 
                      'path' => $item['uri'], 
                      'alt' => $item['alt']
                    )) . 
                    '<div class="overlay"></div></div>',
                    $item['url'], 
                    array(
                      'attributes' => array(
                        'target' => $item['target']
                      ), 
                      'html' => TRUE
                    )
                  );
                ?>
              <?php else: ?>
                <div class="item-pic flex-column-center flex-aling-center">
                <?php
                  print theme('image_style', array(
                    'style_name' => '130x130', 
                    'path' => $item['uri'], 
                    'alt' => $item['alt']
                  ));
                ?>
                </div>
              <?php endif; ?>
              </li>
            <?php endforeach; ?>
            </ul>
            <?php foreach($content['field_btg_infotwo_link_1']['#items'] as $item): ?>
            <?php
              print l(
                '<span><h4 class="pl-7 pt-14 pb-7 m-0 light">' . 
                $item['title'] . 
                '<p class="pl-7 m-0 icon-arrows-right h6 inline-block"></p></h4></span>', 
                $item['url'], 
                array(
                  'query' => $item['query'], 
                  'fragment' => $item['fragment'], 
                  'attributes' => array(
                    'class' => array(
                      'text-primary', 
                      'text-hover-blue'
                    )
                  ), 
                  'html' => TRUE
                )
              );
            ?>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="minh-556 p-14 border-grey">
            <span>
              <h4 class="pl-7 pv-21 m-0 light">
                <?php print render($content['field_btg_infotwo_title_2']); ?>
              </h4>
            </span>
            <ul class="grid-list grid-list-3 p-ch-7">
            <?php foreach($content['field_btg_infotwo_linkimage_2']['#items'] as $item): ?>
              <li class="grid-list-item">
              <?php if ($item['url']): ?>
                <?php
                  print l(
                    '<div class="item-pic flex-column-center flex-aling-center">' . 
                    theme('image_style', array(
                      'style_name' => '130x130', 
                      'path' => $item['uri'], 
                      'alt' => $item['alt']
                    )) . 
                    '<div class="overlay"></div></div>',
                    $item['url'], 
                    array(
                      'attributes' => array(
                        'target' => $item['target']
                      ), 
                      'html' => TRUE
                    )
                  );
                ?>
              <?php else: ?>
                <div class="item-pic flex-column-center flex-aling-center">
                <?php
                  print theme('image_style', array(
                    'style_name' => '130x130', 
                    'path' => $item['uri'], 
                    'alt' => $item['alt']
                  ));
                ?>
                </div>
              <?php endif; ?>
              </li>
            <?php endforeach; ?>
            </ul>
            <?php foreach($content['field_btg_infotwo_link_2']['#items'] as $item): ?>
            <?php
              print l(
                '<span><h4 class="pl-7 pt-14 pb-7 m-0 light">' . 
                $item['title'] . 
                '<p class="pl-7 m-0 icon-arrows-right h6 inline-block"></p></h4></span>', 
                $item['url'], 
                array(
                  'query' => $item['query'], 
                  'fragment' => $item['fragment'], 
                  'attributes' => array(
                    'class' => array(
                      'text-primary', 
                      'text-hover-blue'
                    )
                  ), 
                  'html' => TRUE
                )
              );
            ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>