<?php 
 global $base_url;
 global $theme_path;
 global $language;
 $path = $base_url.'/'.$theme_path;
 $pathfile= variable_get('file_public_path', conf_path() . '/files/');
 $title = $node->title;  
 $field_introduccion_autoridades = $node->field_introduccion_autoridades['und']['0']['value']; 

 //kpr($node->field_profesor['und']);
?>
<div class="container-sm">
	<h1 class="light"><?php print t('Authorities') ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead text-gray"><?php print $field_introduccion_autoridades ?></p>
	<ul class="pv-35 grid-list grid-list-2 grid-list-1-xs">
		<?php //kpr($node); ?>
    <?php foreach ($node->field_profesor['und'] as $key => $value) :?>
      <?php $name = $value['entity']->name; ?>
			<?php $pic = $value['entity']->picture->filename; ?>
			<?php $uid = $value['entity']->uid; ?>
      <?php $desc = $value['entity']->field_descripci_n_autoridad['und'][0]['value']; ?>
      <?php $desc_ingles = $value['entity']->field_descripci_n_autoridad_ingl['und']['0']['value']; ?>
      <?php $res = $value['entity']->field_rese_a_autoridad['und']['0']['value']; ?>
      <?php $res_ingles = $value['entity']->field_rese_a_autoridad_ingles['und']['0']['value']; ?>	

      <?php 
        if ($language->prefix) {
          $profesor_url = "/" . $language->prefix . "/" . drupal_get_path_alias('page/30/autoridades/'.$uid, $language->language); 
        }else
          $profesor_url = "/" . drupal_get_path_alias('page/30/autoridades/'.$uid, $language->language); 
      ?>
      <?php if($uid != 14 && $uid != 22) : ?>
			<li data-href="<?php print $profesor_url ?>">
				<div class="user-card user-card-round size lg">
					<div class="user-pic"><img src="/<?php if($pic != ''){print($pathfile.'pictures/'.$pic);} else {print($pathfile.'pictures/'.'user.jpg'); }?>" alt="<?php print $name ?>"></div>
					<div class="user-info">
						<!--<a href="#">Rosa María Llosa Demartini</a>-->
						<a href="<?php print $profesor_url ?>"><?php print $name ?></a>
						<?php if ($language->language == 'en') : ?>
						<span><?php print $desc_ingles?></span>
						<?php else : ?>
						<span><?php print $desc?></span>
						<?php endif; ?>
				</div>
			</li>
      <?php endif ?>
    <?php endforeach; ?>
    <?php foreach ($node->field_profesor['und'] as $key => $value) :?>
        <?php $name = $value['entity']->name; ?>
        <?php $pic = $value['entity']->picture->filename; ?>
        <?php $uid = $value['entity']->uid; ?>
        <?php $desc = $value['entity']->field_descripci_n_autoridad['und'][0]['value']; ?>
        <?php $desc_ingles = $value['entity']->field_descripci_n_autoridad_ingl['und']['0']['value']; ?>
        <?php $res = $value['entity']->field_rese_a_autoridad['und']['0']['value']; ?>
        <?php $res_ingles = $value['entity']->field_rese_a_autoridad_ingles['und']['0']['value']; ?>  

      <?php 
        if ($language->language == 'en') {
          $profesor_url = "/" . $language->prefix . "/" . drupal_get_path_alias('page/30/autoridades/'.$uid, $language->language); 
        }else
          $profesor_url = "/" . drupal_get_path_alias('page/30/autoridades/'.$uid, $language->language); 
      ?>      
      <?php if($uid == 14 || $uid == 22) : ?>
        <li data-href="<?php print $profesor_url ?>">
          <div class="user-card user-card-round size lg">
            <div class="user-pic"><img src="/<?php if($pic != ''){print($pathfile.'pictures/'.$pic);} else {print($pathfile.'pictures/'.'user.jpg'); }?>" alt="<?php print $name ?>"></div>
            <div class="user-info">
              <!--<a href="#">Rosa María Llosa Demartini</a>-->
              <a href="<?php print $profesor_url ?>"><?php print $name ?></a>
              <?php if ($language->language == 'en') : ?>
              <span><?php print $desc_ingles ?></span>
              <?php else : ?>
              <span><?php print $desc ?></span>
              <?php endif; ?>
          </div>
        </li>
      <?php endif; ?>
    <?php endforeach ?>
	</ul>
</div>

