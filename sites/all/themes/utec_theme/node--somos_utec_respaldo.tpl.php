<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $titulo = $node->title;
  $field_introduccion_respaldo = $node->field_introduccion_respaldo;
  $fids   = $node->field_empresa_respaldo['und'];
  print_r($node);
  
?>

<div class="container-sm">
  <h1 class="light"><?php print $titulo ?></h1>
  <div class="separator-gray separator-sm"></div>
  <p class="lead text-gray"><?php print $field_introduccion_respaldo ?></p>
  <div class="pv-ch-42">
    <div>
      <ul class="grid-list grid-list-3 grid-list-hover size sm">
        <?php foreach ($fids as $fid) : ?>
          <?php 
          // print_r($fid['value']);
            $num = $fid['value'];
            $field = entity_load('field_collection_item', array($fid['value']));
            $image = $field[$num]->field_logo_respaldo['und'][0]['filename']; 
            $link = $field[$num]->field_link_respaldo['und'][0]['value'];
          ?>
        <li data-href="<?php print $link ?>" target="_blank">
          <div>
            <img src="<?php print('/'.$pathfile.$image)?>" alt="" width="100%" height="auto">
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>




