<?php global $language ?>
<?php 

	global $base_url;

  $fields = entity_load('field_collection_item');

  //kpr($fields);

  $derecho_superior_txt1 = $fields[1]->field_texto_superior_1['und'][0]['value'];
  $derecho_superior_txt1_ingles = $fields[1]->field_texto_superior_1_ingles['und'][0]['value'];
  $derecho_superior_txt2 = $fields[1]->field_texto_superior_2['und'][0]['value'];
  $derecho_superior_txt2_ingles = $fields[1]->field_texto_superior_2_ingles['und'][0]['value'];
  $derecho_superior_link = $fields[1]->field_link['und'][0]['value'];
  $derecho_superior_img = $fields[1]->field_imagen['und'][0]['filename'];

  $izquierdo_txt1 = $fields[2]->field_texto_superior_1['und'][0]['value'];
  $izquierdo_txt1_ingles = $fields[2]->field_texto_superior_1_ingles['und'][0]['value'];
  $izquierdo_txt2 = $fields[2]->field_texto_superior_2['und'][0]['value'];
  $izquierdo_txt2_ingles = $fields[2]->field_texto_superior_2_ingles['und'][0]['value'];
  $izquierdo_link = $fields[2]->field_link['und'][0]['value'];
  $izquierdo_img  = $fields[2]->field_imagen['und'][0]['filename'];

  $derecho_inferior_izq_txt1 = $fields[3]->field_texto_superior_1['und'][0]['value'];
  $derecho_inferior_izq_txt1_ingles = $fields[3]->field_texto_superior_1_ingles['und'][0]['value'];
  $derecho_inferior_izq_txt2 = $fields[3]->field_texto_superior_2['und'][0]['value'];
  $derecho_inferior_izq_txt2_ingles = $fields[3]->field_texto_superior_2_ingles['und'][0]['value'];
  $derecho_inferior_izq_link = $fields[3]->field_link['und'][0]['value'];
  $derecho_inferior_izq_img  = $fields[3]->field_imagen['und'][0]['filename'];

  $derecho_inferior_der_txt1 = $fields[4]->field_texto_superior_1['und'][0]['value'];
  $derecho_inferior_der_txt1_ingles = $fields[4]->field_texto_superior_1_ingles['und'][0]['value'];
  $derecho_inferior_der_txt2 = $fields[4]->field_texto_superior_2['und'][0]['value'];
  $derecho_inferior_der_txt2_ingles = $fields[4]->field_texto_superior_2_ingles['und'][0]['value'];
  $derecho_inferior_der_link = $fields[4]->field_link['und'][0]['value'];
  $derecho_inferior_der_img  = $fields[4]->field_imagen['und'][0]['filename'];

?>
<div>
  <div class="container">
    <h1 class="lead text-gray-darker pt-21 mb-7 text-switcher">
      <?php print t('At UTEC, engineering is') ?>
    </h1>
    <h1 class="lead pt-21 mb-7 text-switcher">
      <span><?php print t('well-being') ?></span>
      <span><?php print t('innovation') ?></span>
      <span><?php print t('design') ?></span>
    </h1>
  	<!--<h4 class="lead mt-0 mb-42">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>-->
    <div class="anchor-img-grid anchor-img-grid-1">
      <div class="col-sm-6">
        <div data-href="<?php print $base_url; ?>/<?php print $izquierdo_link; ?>" class="anchor-block-1">
          <div class="pic" style="background-image: url(sites/default/files/<?php print $izquierdo_img; ?>);"></div>
          <div class="overlay">
            <a href="#">
              <h4>
                <?php if ($language->language == 'en') {
                  print $izquierdo_txt1_ingles;
                } elseif ($language->language  != 'en') {
                  print $izquierdo_txt1;
                } 
                ?>
              </h4>
              <h2>
                <?php if ($language->language == 'en') {
                  print $izquierdo_txt2_ingles;
                } elseif ($language->language  != 'en') {
                  print $izquierdo_txt2;
                } 
                ?>
              </h2>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div data-href="<?php print $base_url; ?>/<?php print $derecho_superior_link; ?>" class="anchor-block-2">
          <div class="pic" style="background-image: url(sites/default/files/<?php print $derecho_superior_img; ?>);"></div>
          <div class="overlay">
            <a href="#">
              <h4>
                <?php if ($language->language == 'en') {
                  print $derecho_superior_txt1_ingles;
                } elseif ($language->language  != 'en') {
                  print $derecho_superior_txt1;
                } 
                ?>
              </h4>
              <h2>
                <?php if ($language->language == 'en') {
                  print $derecho_superior_txt2_ingles;
                } elseif ($language->language  != 'en') {
                  print $derecho_superior_txt2;
                } 
                ?>
              </h2>
            </a>
          </div>
        </div>
        <?php if ($derecho_inferior_izq_link=='http://utecventures.com') { ?>
        <div data-href="<?php print $derecho_inferior_izq_link; ?>" class="anchor-block-3">
	      <?php } else { ?>  
	      <div data-href="<?php print $base_url; ?>/<?php print $derecho_inferior_izq_link; ?>" class="anchor-block-3">
		    <?php } ?>
          <div class="pic" style="background-image: url(sites/default/files/<?php print $derecho_inferior_izq_img; ?>);"></div>
          <div class="overlay">
            <a href="#">
              <h4>
                <?php if ($language->language == 'en') {
                  print $derecho_inferior_izq_txt1_ingles;
                } elseif ($language->language  != 'en') {
                  print $derecho_inferior_izq_txt1;
                } 
                ?>
              </h4>
              <h2>
                <?php if ($language->language == 'en') {
                  print $derecho_inferior_izq_txt2_ingles;
                } elseif ($language->language  != 'en') {
                  print $derecho_inferior_izq_txt2;
                } 
                ?>
              </h2>
            </a>
          </div>
        </div>
        <div data-href="<?php print $base_url; ?>/<?php print $derecho_inferior_der_link; ?>" class="anchor-block-4">
          <div class="pic" style="background-image: url(sites/default/files/<?php print $derecho_inferior_der_img; ?>);"></div>
          <div class="overlay">
            <a href="#">
              <h4>
                <?php if ($language->language == 'en') {
                  print $derecho_inferior_der_txt1_ingles;
                } elseif ($language->language  != 'en') {
                  print $derecho_inferior_der_txt1;
                } 
                ?>
              </h4>
              <h2>
                <?php if ($language->language == 'en') {
                  print $derecho_inferior_der_txt2_ingles;
                } elseif ($language->language  != 'en') {
                  print $derecho_inferior_der_txt2;
                } 
                ?>
              </h2>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>