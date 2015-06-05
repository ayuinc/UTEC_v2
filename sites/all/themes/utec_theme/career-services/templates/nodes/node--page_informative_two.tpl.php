<?php 
  hide($content['comments']);
  hide($content['links']);
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> node-career-services clearfix"<?php print $attributes; ?>>

  <div class="mt-56-xs minh-350 bg-center">
    <?php print render($content['field_ct_image']); ?>
  </div>
  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php else: ?>
    <h1 class="text-gray-darker pt-63 pb-28 light mb-0 pv-28"><?php print $title; ?></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['field_ct_subtitle']): ?>
  <h3 class="medium mb-0 text-gray-darker pv-21 lh-lg">
    <span class="text-gray-darker">
      <?php print render($content['field_ct_subtitle']); ?>
    </span>
  </h3>
  <?php endif; ?>

  <h4 class="text-gray light lh-lg">
    <?php print render($content['body']); ?>
  </h4>

  <?php if ($content['field_ctg_infotwo_title']): ?>
    <?php foreach($content['field_ctg_infotwo_title']['#items'] as $item): ?>
      <h2 class="thin mb-0 text-gray-darker pt-63 pb-28">
        <span class="text-gray-darker"><?php print $item['value']; ?></span>
      </h2>
    <?php endforeach; ?>
  <?php endif; ?>

  <?php if ($content['field_ctg_infotwo_image']): ?>
    <?php $i = 0; ?>
    <div class="row pv-14-lg entities">
    <?php foreach($content['field_ctg_infotwo_image']['#items'] as $item): ?>
      <?php if ($i == 4): ?>
        </div>
        <div class="row pv-14-lg entities">
        <?php $i = 0; ?>
      <?php endif; ?>
      <div class="col-md-3 col-xs-6">
      <?php if ($item['url']): ?>
        <?php
          print l(
            '<div class="pic-teconectamos border-grey">' . 
            theme('image_style', array(
              'style_name' => '160x160', 
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
        <div class="pic-teconectamos border-grey">
        <?php 
          print theme('image_style', array(
            'style_name' => '160x160', 
            'path' => $item['uri'], 
            'alt' => $item['alt']
          ));
        ?>
        </div>
      <?php endif; ?>
      </div>
      <?php $i++; ?>
    <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>

</div>