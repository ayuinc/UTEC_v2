<?php 
  hide($content['comments']);
  hide($content['links']);
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> node-career-services clearfix"<?php print $attributes; ?>>

	<div class="minh-350 bg-center">
		<?php print render($content['field_ct_image']); ?>
	</div>
  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php else: ?>
    <h1 class="text-gray-darker medium mb-0 pt-49"><?php print $title; ?></h1>
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

  <h4 class="thin pb-7 lh-lg">
  	<?php print render($content['body']); ?>
  </h4>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>

</div>