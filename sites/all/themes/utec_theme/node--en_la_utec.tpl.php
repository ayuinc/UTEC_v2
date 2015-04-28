<?php global $language ?>
<?php 

	global $base_url;

  $fields = entity_load('field_collection_item');

  // kpr($fields);
  // print_r(die($image_style));
  // print_r($image_style_2);

  $derecho_superior_txt1 = $fields[1]->field_texto_superior_1['und'][0]['value'];
  $derecho_superior_txt1_ingles = $fields[1]->field_texto_superior_1_ingles['und'][0]['value'];
  $derecho_superior_txt2 = $fields[1]->field_texto_superior_2['und'][0]['value'];
  $derecho_superior_txt2_ingles = $fields[1]->field_texto_superior_2_ingles['und'][0]['value'];
  $derecho_superior_link = $fields[1]->field_link['und'][0]['value'];
  $derecho_superior_link_ingles = $fields[1]->field_link_ingles['und'][0]['value'];
  $derecho_superior_img = $fields[1]->field_image['und'][0]['uri'];

  $izquierdo_txt1 = $fields[2]->field_texto_superior_1['und'][0]['value'];
  $izquierdo_txt1_ingles = $fields[2]->field_texto_superior_1_ingles['und'][0]['value'];
  $izquierdo_txt2 = $fields[2]->field_texto_superior_2['und'][0]['value'];
  $izquierdo_txt2_ingles = $fields[2]->field_texto_superior_2_ingles['und'][0]['value'];
  $izquierdo_link = $fields[2]->field_link['und'][0]['value'];
  $izquierdo_link_ingles = $fields[2]->field_link_ingles['und'][0]['value'];
  $izquierdo_img  = $fields[2]->field_image['und'][0]['uri'];

  $derecho_inferior_izq_txt1 = $fields[3]->field_texto_superior_1['und'][0]['value'];
  $derecho_inferior_izq_txt1_ingles = $fields[3]->field_texto_superior_1_ingles['und'][0]['value'];
  $derecho_inferior_izq_txt2 = $fields[3]->field_texto_superior_2['und'][0]['value'];
  $derecho_inferior_izq_txt2_ingles = $fields[3]->field_texto_superior_2_ingles['und'][0]['value'];
  $derecho_inferior_izq_link = $fields[3]->field_link['und'][0]['value'];
  $derecho_inferior_izq_link_ingles = $fields[3]->field_link_ingles['und'][0]['value'];
  $derecho_inferior_izq_img  = $fields[3]->field_image['und'][0]['uri'];

  $derecho_inferior_der_txt1 = $fields[4]->field_texto_superior_1['und'][0]['value'];
  $derecho_inferior_der_txt1_ingles = $fields[4]->field_texto_superior_1_ingles['und'][0]['value'];
  $derecho_inferior_der_txt2 = $fields[4]->field_texto_superior_2['und'][0]['value'];
  $derecho_inferior_der_txt2_ingles = $fields[4]->field_texto_superior_2_ingles['und'][0]['value'];
  $derecho_inferior_der_link = $fields[4]->field_link['und'][0]['value'];
  $derecho_inferior_der_link_ingles = $fields[4]->field_link_ingles['und'][0]['value'];
  $derecho_inferior_der_img  = $fields[4]->field_image['und'][0]['uri'];
?>
<div>
  <div class="container">
    <div>
      <h1 class="lead text-gray-darker pt-21 mb-7 text-switcher">
        <?php print t('At UTEC, engineering') ?> 
        <?php if ($language->language == 'en') { ?>
          <em class="text-gray" style="font-size: 28px;">is</em>
        <?php } elseif ($language->language  != 'en') { ?>
          <em class="text-gray" style="font-size: 28px;">es</em>
        <?php } ?>        
        <p class="text-primary visible-xs-inline-block"><?php print t('well-being') ?></p>
        <?php if ($language->language == 'en') { ?>
          <span class="text-primary hidden-xs" id="text-switcher-word-en"></span>
        <?php } elseif ($language->language  != 'en') { ?>
          <span class="text-primary hidden-xs" id="text-switcher-word"></span>
        <?php } ?>
      </h1>
    </div>
    <div class="anchor-img-grid anchor-img-grid-1">
      <div class="col-sm-6">   
      	<?php if ($language->language == 'en') { ?>
	      	<div data-href="<?php print $izquierdo_link_ingles; ?>" class="anchor-block-1">
        <?php } elseif ($language->language  != 'en') { ?>
          <div data-href="<?php print $izquierdo_link; ?>" class="anchor-block-1">    
        <?php } ?>  	        
          <div class="pic" style="background-image: url(<?php print file_create_url($izquierdo_img); ?>);"></div>
          <div class="overlay">
            <?php if ($language->language == 'en') { ?>
              <a href="<?php print $izquierdo_link_ingles; ?>">
                <h4>
                  <?php if ($language->language == 'en') {
                    print $izquierdo_txt1_ingles;
                  } elseif ($language->language  != 'en') {
                    print $izquierdo_txt1;
                  } 
                  ?>
                </h4>
                <h3 class="h2">
                  <?php if ($language->language == 'en') {
                    print $izquierdo_txt2_ingles;
                  } elseif ($language->language  != 'en') {
                    print $izquierdo_txt2;
                  } 
                  ?>
                </h3>
              </a>
            <?php } elseif ($language->language  != 'en') { ?>
              <a href="<?php print $izquierdo_link; ?>">
                <h4>
                  <?php if ($language->language == 'en') {
                    print $izquierdo_txt1_ingles;
                  } elseif ($language->language  != 'en') {
                    print $izquierdo_txt1;
                  } 
                  ?>
                </h4>
                <h3 class="h2">
                  <?php if ($language->language == 'en') {
                    print $izquierdo_txt2_ingles;
                  } elseif ($language->language  != 'en') {
                    print $izquierdo_txt2;
                  } 
                  ?>
                </h3>
              </a>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-sm-6"> 
      	<?php if ($language->language == 'en') { ?>
	      	<div data-href="<?php print $derecho_superior_link_ingles; ?>" class="anchor-block-2">
        <?php } elseif ($language->language  != 'en') { ?>
          <div data-href="<?php print $derecho_superior_link; ?>" class="anchor-block-2">    
        <?php } ?> 		      	        
          <div class="pic" style="background-image: url(<?php print file_create_url($derecho_superior_img); ?>);"></div>
          <div class="overlay">
            <?php if ($language->language == 'en') { ?>
              <a href="<?php print $derecho_superior_link_ingles; ?>">
                <h4>
                  <?php if ($language->language == 'en') {
                    print $derecho_superior_txt1_ingles;
                  } elseif ($language->language  != 'en') {
                    print $derecho_superior_txt1;
                  } 
                  ?>
                </h4>
                <h3 class="h2">
                  <?php if ($language->language == 'en') {
                    print $derecho_superior_txt2_ingles;
                  } elseif ($language->language  != 'en') {
                    print $derecho_superior_txt2;
                  } 
                  ?>
                </h3>
              </a>
            <?php } elseif ($language->language  != 'en') { ?>
              <a href="<?php print $derecho_superior_link; ?>">
                <h4>
                  <?php if ($language->language == 'en') {
                    print $derecho_superior_txt1_ingles;
                  } elseif ($language->language  != 'en') {
                    print $derecho_superior_txt1;
                  } 
                  ?>
                </h4>
                <h3 class="h2">
                  <?php if ($language->language == 'en') {
                    print $derecho_superior_txt2_ingles;
                  } elseif ($language->language  != 'en') {
                    print $derecho_superior_txt2;
                  } 
                  ?>
                </h3>
              </a>
            <?php } ?>         
          </div>
        </div>
      	<?php if ($language->language == 'en') { ?>
	      	<div data-href="<?php print $derecho_inferior_izq_link_ingles; ?>" class="anchor-block-3">
        <?php } elseif ($language->language  != 'en') { ?>
          <div data-href="<?php print $derecho_inferior_izq_link; ?>" class="anchor-block-3">    
        <?php } ?>	      	
          <div class="pic" style="background-image: url(<?php print file_create_url($derecho_inferior_izq_img); ?>);"></div>
          <div class="overlay">
            <?php if ($language->language == 'en') { ?>
              <a href="<?php print $derecho_inferior_izq_link_ingles; ?>">
                <h4>
                  <?php if ($language->language == 'en') {
                    print $derecho_inferior_izq_txt1_ingles;
                  } elseif ($language->language  != 'en') {
                    print $derecho_inferior_izq_txt1;
                  } 
                  ?>
                </h4>
                <h3 class="h2">
                  <?php if ($language->language == 'en') {
                    print $derecho_inferior_izq_txt2_ingles;
                  } elseif ($language->language  != 'en') {
                    print $derecho_inferior_izq_txt2;
                  } 
                  ?>
                </h3>
              </a>
            <?php } elseif ($language->language  != 'en') { ?>
              <a href="<?php print $derecho_inferior_izq_link; ?>">
                <h4>
                  <?php if ($language->language == 'en') {
                    print $derecho_inferior_izq_txt1_ingles;
                  } elseif ($language->language  != 'en') {
                    print $derecho_inferior_izq_txt1;
                  } 
                  ?>
                </h4>
                <h3 class="h2">
                  <?php if ($language->language == 'en') {
                    print $derecho_inferior_izq_txt2_ingles;
                  } elseif ($language->language  != 'en') {
                    print $derecho_inferior_izq_txt2;
                  } 
                  ?>
                </h3>
              </a>
            <?php } ?>
          </div>
        </div>
      	<?php if ($language->language == 'en') { ?>
	      	<div data-href="<?php print $derecho_inferior_der_link_ingles; ?>" class="anchor-block-4">
        <?php } elseif ($language->language  != 'en') { ?>
          <div data-href="<?php print $derecho_inferior_der_link; ?>" class="anchor-block-4">    
        <?php } ?> 		      		        
          <div class="pic" style="background-image: url(<?php print file_create_url($derecho_inferior_der_img); ?>);"></div>
          <div class="overlay">
            <?php if ($language->language == 'en') { ?>
              <a href="<?php print $derecho_inferior_der_link_ingles; ?>">
                <h4>
                  <?php if ($language->language == 'en') {
                    print $derecho_inferior_der_txt1_ingles;
                  } elseif ($language->language  != 'en') {
                    print $derecho_inferior_der_txt1;
                  } 
                  ?>
                </h4>
                <h3 class="h2">
                  <?php if ($language->language == 'en') {
                    print $derecho_inferior_der_txt2_ingles;
                  } elseif ($language->language  != 'en') {
                    print $derecho_inferior_der_txt2;
                  } 
                  ?>
                </h3>
              </a>
            <?php } elseif ($language->language  != 'en') { ?>
              <a href="<?php print $derecho_inferior_der_link; ?>">
                <h4>
                  <?php if ($language->language == 'en') {
                    print $derecho_inferior_der_txt1_ingles;
                  } elseif ($language->language  != 'en') {
                    print $derecho_inferior_der_txt1;
                  } 
                  ?>
                </h4>
                <h3 class="h2">
                  <?php if ($language->language == 'en') {
                    print $derecho_inferior_der_txt2_ingles;
                  } elseif ($language->language  != 'en') {
                    print $derecho_inferior_der_txt2;
                  } 
                  ?>
                </h3>
              </a>
            <?php } ?>  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>