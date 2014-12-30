<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

	// $titulo = $node->title;
  // $cuerpo = $node->body['und']['0']['value'];

  // $fields = entity_load('field_collection_item');
  

  // $link = $fields[5]->field_link_['und'][0]['value'];
  //$logo  = $fields[5]->field_imagen['und'][0]['filename'];

  $fields = entity_load('field_collection_item', array($node->field_convenio['und'][0]['value']));
  print_r($fields);
?>

<div class="container-sm">
  <h1 class="light">Convenios de intercambio</h1>
  <div class="separator-gray separator-sm"></div>
  <h3><?php print $cuerpo ?></h3>
  <div class="pv-ch-42">
    <div>
      <ul class="grid-list grid-list-3 grid-list-hover size sm">
        <li data-href="//">
          <div>
            <img src="assets/img/logo_horizontal_UTEC.png" alt="" width="112px" height="auto">
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>