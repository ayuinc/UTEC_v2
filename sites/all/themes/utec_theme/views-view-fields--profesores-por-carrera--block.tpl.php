<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	$uid = $fields['field_profesor']->content;
	$user = user_load($uid);
	kpr($user);
?>
<?php foreach ($node->field_profesor['und'] as $key => $value) :?>
  <?php $name = $value['entity']->name; ?>
  <?php $pic = $value['entity']->picture->filename; ?>
  <?php $uid = $value['entity']->uid; ?>
  <?php $desc = $value['entity']->field_descripci_n['und'][0]['value']; ?>
  <?php //die(print_r($value)); ?>
  <?php 
  if ($language->language == 'en') {
    $profesor_url = "/" . $language->prefix . "/" . drupal_get_path_alias('page/30/profesor-carrera/'.$uid.'/'.$carrera_id, $language->language); 
  }else
    $profesor_url = "/" . drupal_get_path_alias('page/30/profesor-carrera/'.$uid.'/'.$carrera_id, $language->language); 
  ?> 
  <li class="mb-ch-14">
    <div class="grid-list-pic" data-href="<?php print $profesor_url ?>">
      <img src="/<?php if($pic != ''){print($pathfile.'pictures/'.$pic);} else {print($pathfile.'pictures/'.'user.jpg'); }?>" alt="<?php print t('Faculty') ?>" width="180px" height="auto" class="img-circle">
    </div>
    <a href="<?php print $profesor_url ?>">
      <?php print $name ?>
    </a>
    <p class="font-profesores"><?php print $desc ?></p>
  </li>
<?php endforeach ?>
















