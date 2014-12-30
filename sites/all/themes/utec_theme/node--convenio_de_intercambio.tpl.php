<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $titulo = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
  $fids   = $node->field_convenio['und'];
  // print_r($fids);
  
?>

<div class="container-sm">
  <h1 class="light"><?php print $titulo ?></h1>
  <div class="separator-gray separator-sm"></div>
  <h3><?php print $cuerpo ?></h3>
  <div class="pv-ch-42">
    <div>
      <ul class="grid-list grid-list-3 grid-list-hover size sm">
        <?php foreach ($fids as $fid) : ?>
          <?php 
          // print_r($fid['value']);
            $field = entity_load('field_collection_item', array($fid['value']));
            // print_r($field);
            $image = $field->field_image['und'][0]['filename']; 
            $link = $field->field_link_['und'][0]['value']; 
            die(print_r($field->field_image));
          ?>
        <li data-href="<?php print $link ?>">
          <div>
            <img src="<?php print('/'.$pathfile.$image)?>" alt="" width="112px" height="auto">
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>