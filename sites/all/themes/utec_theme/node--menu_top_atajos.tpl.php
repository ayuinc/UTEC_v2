<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $titulo = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
  $fids   = $node->field_menu_top_campos['und'];
  // print_r($fids);
  
?>

<div class="container-sm">
  <h1 class="light"><?php print $titulo ?></h1>
  <div class="separator-gray separator-sm"></div>
  
  <div class="col-sm-6 list-custom mb-ch-42">
        <div>
          <ul>
            <?php foreach ($fids as $fid) : ?>
              <?php 
              // print_r($fid['value']);
                $num = $fid['value'];
                $field = entity_load('field_collection_item', array($fid['value']));
                $nombre = $field[$num]->field_nombre['und'][0]['value'];
                $link = $field[$num]->field_link_atajo['und'][0]['value'];
              ?>
              <li><a href="<?php print $link ?>"><?php print $nombre ?></a></li>
              <?php endforeach; ?>  
          </ul>
        </div>
  </div>

  <?php print $cuerpo ?>

</div>