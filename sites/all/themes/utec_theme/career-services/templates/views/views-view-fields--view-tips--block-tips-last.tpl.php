<div class="col-sm-4 ">
<?php
  print l(
    '<div class="banner minh-560 text-gray-dark flex-column-center flex-align-center">' . 
    '<div class="minh-210 bg-center">' . 
    $fields['field_ct_image']->content . 
    '</div>' . 
    '<div class="text-left ph-28">' . 
    '<h3 class="medium">' . $fields['title']->content . '</h3>' . 
    '<h4 class="thin lh-lg">' . $fields['field_ct_teaser']->content . '</h4>' . 
    '<span>' . 
    '<h4 class="text-primary pl-7 pt-14 pb-7 m-0 light">' . 
    'Leer más<p class="pl-7 m-0 icon-arrows-right h6 inline-block"></p>' . 
    '</h4>' . 
    '</span>' . 
    '</div>' . 
    '</div>', 
    'node/' . $fields['nid']->content, 
    array(
      'html' => TRUE
    )
  );
?>
</div>