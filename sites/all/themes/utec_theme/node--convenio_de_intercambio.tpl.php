<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
	$link = $node->field_link_['und']['0']['value'];
  $imagen = $node->field_image['und']['0']['filename'];

  $fields = entity_load('field_collection_item');
  print_r($fields);

?>

<div class="container-sm">
  <h1 class="light">Convenios de intercambio</h1>
  <div class="separator-gray separator-sm"></div>
  <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis praesentium minus ratione eum et voluptates quam magnam sit, alias nam rerum in doloribus soluta fugit quo suscipit. Alias, ad, sit.</h3>
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