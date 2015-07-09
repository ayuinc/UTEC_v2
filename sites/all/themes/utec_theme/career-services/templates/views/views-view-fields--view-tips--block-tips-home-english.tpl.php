<div class="minh-490 flex-column-center banner flex-align-center">
<?php
print l(
    '<div class="banner">' . 
    '<div class="minh-210 bg-img-block">' . 
    $fields['field_ct_image']->content . 
    '</div>' . 
    '<div class="p-21">' . 
    '<h3 class="medium m-0 text-gray-dark">' . $fields['title']->content . '</h3>' . 
    '<h4 class="thin text-gray-dark lh-lg">' . $fields['field_ct_teaser']->content . '</h4>' . 
    '<span>' . 
    '<h4 class="text-primary m-0 light">' . 
    '<span>' . 
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