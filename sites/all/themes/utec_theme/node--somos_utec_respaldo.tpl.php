<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $titulo = $node->title;
  $field_introduccion_respaldo = $node->field_introduccion_respaldo['und']['0']['value'];
  $fids   = $node->field_empresa_respaldo['und'];

  $entity_type = 'field_collection_item';
  // $bundle_names = 'field_some_field'; // Field name the collection is attached to
  $field_name = 'field_logo_respaldo'; // Field name within the field collection
  $view_mode = 'default';

  $info = field_info_instance($entity_type, $field_name, 'field_empresa_respaldo');
  $settings = $info['display'][$view_mode]['settings'];
  $image_style = $settings['image_style'];
?>

<div class="container-sm">
  <h1 class="light"><?php print $titulo ?></h1>
  <div class="separator-gray separator-sm"></div>
  <p class="lead text-gray"><?php print $field_introduccion_respaldo ?></p>
  <div class="pv-ch-42">
    <div>
      <ul class="grid-list grid-list-2 grid-list-1-xs grid-list-hover grid-list-hover-white">
        <?php foreach ($fids as $fid) : ?>
          <?php 
          // print_r($fid['value']);
            $num = $fid['value'];
            $field = entity_load('field_collection_item', array($fid['value']));
            $image = $field[$num]->field_logo_respaldo['und'][0]['uri']; 
            $link = $field[$num]->field_link_respaldo['und'][0]['value'];
          ?>
        <li data-href="<?php print $link ?>" target="_blank" rel="nofollow">
          <div>
            <img src="<?php print image_style_url($image_style, $image)?>" alt="<?php print $titulo ?>" width="70%" height="auto">
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>




