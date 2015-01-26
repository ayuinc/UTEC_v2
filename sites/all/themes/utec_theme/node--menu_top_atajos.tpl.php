<?php 
  global $base_url;
  global $theme_path;
  global $language;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $titulo = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
  $fids   = $node->field_menu_top_campos['und'];
  // print_r($fids);
  
?>

<div class="container-sm mb-70 pb-70">
  <h1 class="light"><?php print $titulo ?></h1>
  <div class="separator-gray separator-sm"></div>
  
  <div class="col-sm-6 list-custom mb-ch-42">
    <div>
      <ul>
        <?php if($node->nid == "717" || $node->nid == "914") : ?>  
          <?php
            $subnode = node_load(749);
            
            if ($language->language == 'en')
              $subtitulo = $subnode->title_ingles;
            else
              $subtitulo = $subnode->title;

            $subcuerpo = $subnode->body['und']['0']['value'];
            $subfids   = $subnode->field_menu_top_campos['und'];                 
          ?>
          <li>
          	<a><?php print $subtitulo ?></a>
            <ul>
              <?php foreach ($subfids as $fid) : ?>
                <?php 
                	// print_r($fid['value']);
                  $num = $fid['value'];
                  $field = entity_load('field_collection_item', array($fid['value']));
                  $nombre_ingles = $field[$num]->field_nombre_ingles['und'][0]['value'];
                  $nombre = $field[$num]->field_nombre['und'][0]['value'];
                  $link = $field[$num]->field_link_atajo['und'][0]['value'];
                  $link_ingles = $field[$num]->field_link_atajo_ingles['und'][0]['value'];     
                ?>
                <li>
                  <?php if ($language->language == 'en') : ?>
                    <a href="<?php print $link_ingles ?>"><?php print $nombre_ingles ?></a>
                  <?php elseif ($language->language != 'en') : ?>
                    <a href='<?php print $link ?>'><?php print $nombre ?></a>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>  
            </ul>
          </li>
        <?php endif ?>

        <?php foreach ($fids as $fid) : ?>
          <?php 
            // print_r($fid['value']);
            $num = $fid['value'];
            $field = entity_load('field_collection_item', array($fid['value']));
            $nombre = $field[$num]->field_nombre['und'][0]['value'];
            $nombre_ingles = $field[$num]->field_nombre_ingles['und'][0]['value'];
            $link = $field[$num]->field_link_atajo['und'][0]['value'];
            $link_ingles = $field[$num]->field_link_atajo_ingles['und'][0]['value'];
          ?>
          <li>
            <?php if ($language->language == 'en') : ?>
              <a href="<?php print $link_ingles ?>"><?php print $nombre_ingles ?></a>
            <?php elseif ($language->language != 'en') : ?>
              <a href='<?php print $link ?>'><?php print $nombre ?></a>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>  
      </ul>
    </div>
  </div>

  <?php print $cuerpo ?>

</div>