<?php 

  $uid = $fields['uid']->content;
  $name = $fields['name']->content;
	$pic = $fields['picture']->content;

  if ($language->prefix) {
    $profesor_url = "/" . $language->prefix . "/" . drupal_get_path_alias('page/67/profesor-edp/'.$uid, $language->language); 
  }else
    $profesor_url = "/" . drupal_get_path_alias('page/67/profesor-edp/'.$uid, $language->language); 
?>

<li class="mb-ch-14 isotope-item" data-href="<?php print $profesor_url ?>" style="position: absolute; left: 0px; top: 0px;">
    <div class="grid-list-pic">
      <?php print $pic; ?>
    </div>
    <div class="user-info">
      <a href="<?php print $profesor_url ?>"><?php print $name ?></a>
    </div>
</li>