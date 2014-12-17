<?php 

	global $base_path;

  $fields = entity_load('field_collection_item');

  $derecho_superior_txt1 = $fields[1]->field_texto_superior_1['und'][0]['value'];
  $derecho_superior_txt2 = $fields[1]->field_texto_superior_2['und'][0]['value'];
  $derecho_superior_link = $fields[1]->field_link['und'][0]['value'];
  $derecho_superior_img = $fields[1]->field_imagen['und'][0]['filename'];

  $izquierdo_txt1 = $fields[2]->field_texto_superior_1['und'][0]['value'];
  $izquierdo_txt2 = $fields[2]->field_texto_superior_2['und'][0]['value'];
  $izquierdo_link = $fields[2]->field_link['und'][0]['value'];
  $izquierdo_img  = $fields[2]->field_imagen['und'][0]['filename'];

  $derecho_inferior_izq_txt1 = $fields[3]->field_texto_superior_1['und'][0]['value'];
  $derecho_inferior_izq_txt2 = $fields[3]->field_texto_superior_2['und'][0]['value'];
  $derecho_inferior_izq_link = $fields[3]->field_link['und'][0]['value'];
  $derecho_inferior_izq_img  = $fields[3]->field_imagen['und'][0]['filename'];

  $derecho_inferior_der_txt1 = $fields[4]->field_texto_superior_1['und'][0]['value'];
  $derecho_inferior_der_txt2 = $fields[4]->field_texto_superior_2['und'][0]['value'];
  $derecho_inferior_der_link = $fields[4]->field_link['und'][0]['value'];
  $derecho_inferior_der_img  = $fields[4]->field_imagen['und'][0]['filename'];

?>
<h1 class="lead medium mb-0"><span class="text-gray-darker">En la UTEC ingeniería es</span> <span class="text-gray">bienestar.</span></h1>
	<h4 class="lead mt-0 mb-42">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
	<div class="anchor-img-grid anchor-img-grid-1 grid-block row ml-0">
		<div class="col-sm-6">
      <a href="<?php print $GLOBALS['base_url']; ?>/<?php print $izquierdo_link; ?>" class="anchor-1">
        <img src="sites/default/files/<?php print $izquierdo_img; ?>" />
        <div class="overlay-bg"></div>
        <div class="overlay-content">
          <div>
            <span class="text-top mb-0"><?php print $izquierdo_txt1; ?></span>
            <span class="text-bottom"><?php print $izquierdo_txt2; ?></span>
          </div>
        </div>
      </a>
    </div>
    <div class="col-sm-6">
      <div class="clearfix">
        <a href="<?php print $base_path; ?>/<?php print $derecho_superior_link; ?>" class="anchor-2">
          <img src="sites/default/files/<?php print $derecho_superior_img; ?>" />
          <div class="overlay-bg overlay-bg-rect"></div>
          <div class="overlay-content">
            <div>
              <span class="text-top mb-0"><?php print $derecho_superior_txt1; ?></span>
              <span class="text-bottom"><?php print $derecho_superior_txt2; ?></span>
            </div>
          </div>
        </a>
      </div>
      <div class="clearfix">
        <div class="col-sm-6">
          <a href="<?php print $base_path; ?>/<?php print $derecho_inferior_izq_link; ?>" class="anchor-3">
            <img src="sites/default/files/<?php print $derecho_inferior_izq_img; ?>" />
            <div class="overlay-bg"></div>
            <div class="overlay-content">
              <div>
                <span class="text-top mb-0"><?php print $derecho_inferior_izq_txt1; ?></span>
                <span class="text-bottom"><?php print $derecho_inferior_izq_txt2; ?></span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-6">
          <a href="<?php print $base_path; ?>/<?php print $derecho_inferior_der_link; ?>" class="anchor-4">
            <img src="sites/default/files/<?php print $derecho_inferior_der_img; ?>" />
            <div class="overlay-bg"></div>
            <div class="overlay-content">
              <div>
                <span class="text-top mb-0"><?php print $derecho_inferior_der_txt1; ?></span>
                <span class="text-bottom"><?php print $derecho_inferior_der_txt2; ?></span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>          
  </div>