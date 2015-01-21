<?php 
 global $base_url;
 global $theme_path;
 global $language;
 $path = $base_url.'/'.$theme_path;
 $pathfile= variable_get('file_public_path', conf_path() . '/files/');
 $title = $node->title;  
 $field_introduccion_autoridades = $node->field_introduccion_autoridades['und']['0']['value']; 

?>
<div class="container-sm">
	<h1 class="light"><?php print t('Authorities') ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead text-gray"><?php print $field_introduccion_autoridades ?></p>
	<ul class="pv-35 grid-list grid-list-2 grid-list-1-xs">
		<?php //kpr($node); ?>
    <?php foreach ($node->field_profesor['und'] as $key => $value) :?>
         
      <?php 
      	$name_url = $name;
      	$name_url = str_replace(' ',"-",$name_url);
      	$name_url = str_replace(array('á','à','â','ã','ª','ä'),"a",$name_url);
  	    $name_url = str_replace(array('Á','À','Â','Ã','Ä'),"a",$name_url);
  	    $name_url = str_replace(array('Í','Ì','Î','Ï'),"i",$name_url);
  	    $name_url = str_replace(array('í','ì','î','ï'),"i",$name_url);
  	    $name_url = str_replace(array('é','è','ê','ë'),"e",$name_url);
  	    $name_url = str_replace(array('É','È','Ê','Ë'),"e",$name_url);
  	    $name_url = str_replace(array('ó','ò','ô','õ','ö','º'),"o",$name_url);
  	    $name_url = str_replace(array('Ó','Ò','Ô','Õ','Ö'),"o",$name_url);
  	    $name_url = str_replace(array('ú','ù','û','ü'),"u",$name_url);
  	    $name_url = str_replace(array('Ú','Ù','Û','Ü'),"u",$name_url);
  	    $name_url = str_replace("ñ","n",$name_url);
   		  $name_url = str_replace("Ñ","N",$name_url);
  	    $name_url = strtolower ($name_url);

      ?>
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
					<div class="user-pic"><img src="/<?php if($pic != ''){print($pathfile.'pictures/'.$pic);} else {print($pathfile.'pictures/'.'user.jpg'); }?>" alt=""></div>
					<div class="user-info">
						<!--<a href="#">Rosa María Llosa Demartini</a>-->
						<a href="<?php print $profesor_url ?>"><?php print $name ?></a>
						<?php if ($language->language == 'en') : ?>
						<span><?php print $desc_ingles?></span>
						<?php else : ?>
						<span><?php print $desc?></span>
						<?php endif; ?>
						<!-- <a href="mailto:<?php //print $mail ?>"><?php //print $mail ?></a></div>   		 -->
				</div>
			</li>
      <?php endif ?>
    <?php endforeach; ?>
    <?php foreach ($node->field_profesor['und'] as $key => $value) :?>
        <?php $name = $value['entity']->name; ?>
        <?php $pic = $value['entity']->picture->filename; ?>
        <?php $uid = $value['entity']->uid; ?>
        <?php $desc = $value['entity']->field_descripci_n_autoridad['und'][0]['value']; ?>
        <?php $desc_ingles = $value['entity']->field_descripci_n_autoridad_ingles['und']['0']['value']; ?>
        <?php $res = $value['entity']->field_rese_a_autoridad['und']['0']['value']; ?>
        <?php $res_ingles = $value['entity']->field_rese_a_autoridad_ingles['und']['0']['value']; ?>  

      <?php 
        if ($language->prefix) {
          $profesor_url = "/" . $language->prefix . "/" . drupal_get_path_alias('page/30/autoridades/'.$uid, $language->language); 
        }else
          $profesor_url = "/" . drupal_get_path_alias('page/30/autoridades/'.$uid, $language->language); 
      ?>      
      <?php if($uid == 14 || $uid == 22) : ?>
        <li data-href="<?php print $profesor_url ?>">
          <div class="user-card user-card-round size lg">
            <div class="user-pic"><img src="/<?php if($pic != ''){print($pathfile.'pictures/'.$pic);} else {print($pathfile.'pictures/'.'user.jpg'); }?>" alt=""></div>
            <div class="user-info">
              <!--<a href="#">Rosa María Llosa Demartini</a>-->
              <a href="<?php print $profesor_url ?>"><?php print $name ?></a>
              <?php if ($language->language == 'en') : ?>
              <span><?php print $desc_ingles?></span>
              <?php else : ?>
              <span><?php print $desc?></span>
              <?php endif; ?>
              <!-- <a href="mailto:<?php //print $mail ?>"><?php //print $mail ?></a></div>        -->
          </div>
        </li>
      <?php endif; ?>
    <?php endforeach ?>
	</ul>
</div>

