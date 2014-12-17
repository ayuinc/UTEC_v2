<?php 

	$theme_path = drupal_get_path('theme', 'utec_theme');
	$video_name = $node->field_video['und']['0']['filename'];
	
	$wrapper = entity_metadata_wrapper('node', $node);
  $formtype = field_get_items('node', $node, 'field_bloque_izquierdo');

  $fields = entity_load('field_collection_item', array($node->field_bloque_derecho['und'][0]['value']));
  // $track_2 = entity_load('field_collection_item', array($node->field_track[LANGUAGE_NONE][1]['value']));
// $field_bloque_derecho
// $field_bloque_izquierdo
// $field_bloque_derecho_inferior
// $field_bloque_derecho_inferior_de

  $value = $fields[1]['FieldCollectionItemEntity'];

  $item = field_collection_field_get_entity(1);
	die(print_r($item));
	// die(print_r($value));

  foreach($formtype as $itemid) { 
    $item = field_collection_field_get_entity($itemid);
	  print $item->field_reference_title['und'][0]['safe_value'];
	  print $item->field_reference_location['und'][0]['safe_value'];
	}


?>
<h1 class="lead medium mb-0"><span class="text-gray-darker">En la UTEC ingeniería es</span> <span class="text-gray">bienestar.</span></h1>
	<h4 class="lead mt-0 mb-42">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
	<div class="anchor-img-grid anchor-img-grid-1 grid-block row ml-0">
    <div class="col-sm-6">
      <a href="#" class="anchor-1">
        <img src="assets/img/anchor-img-grid-sq.png" />
        <div class="overlay-bg"></div>
        <div class="overlay-content">
          <div>
            <span class="text-top mb-0">Texto superior</span>
            <span class="text-bottom">Texto inferior</span>
          </div>
        </div>
      </a>
    </div>
    <div class="col-sm-6">
      <div class="clearfix">
        <a href="#" class="anchor-2">
          <img src="assets/img/anchor-img-grid-rect.png" />
          <div class="overlay-bg overlay-bg-rect"></div>
          <div class="overlay-content">
            <div>
              <span class="text-top mb-0">Texto superior</span>
              <span class="text-bottom">Texto inferior</span>
            </div>
          </div>
        </a>
      </div>
      <div class="clearfix">
        <div class="col-sm-6">
          <a href="#" class="anchor-3">
            <img src="assets/img/anchor-img-grid-sq-1.png" />
            <div class="overlay-bg"></div>
            <div class="overlay-content">
              <div>
                <span class="text-top mb-0">Texto superior</span>
                <span class="text-bottom">Texto inferior</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-6">
          <a href="#" class="anchor-4">
            <img src="assets/img/anchor-img-grid-sq-2.png" />
            <div class="overlay-bg"></div>
            <div class="overlay-content">
              <div>
                <span class="text-top mb-0">Texto superior</span>
                <span class="text-bottom">Texto inferior</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>          
  </div>