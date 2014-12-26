<?php 

$titulo = $node->title;
$field_decripcion_corta_item = $node->field_decripcion_corta_item['und']['0']['value'];
$field_imagen_item = $node->field_imagen_item['und']['0']['value'];
$field_descripcion_imagen = $node->field_descripcion_imagen['und']['0']['filename'];
$field_contenido_item = $node->field_contenido_item['und']['0']['value'];

?>

<div class="body minhp-100 pvp-7" id="sec-1">
    <div class="container-sm">
        <h1 class="light"><?php print $titulo; ?></h1>
        <div class="separator-gray separator-sm"></div>
        <div class="pv-ch-42 lead-ch p-ch-gray">
            <h3><?php print $field_decripcion_corta_item; ?></h3>
            <img src="<?php print $theme_path . "/" . $field_imagen_item; ?>" class="img-responsive">
            <h3><?php print $field_descripcion_imagen ?></h3>
            <img src="assets/img/bg_header-1.png" class="img-responsive">
            <h3>Lorem ipsum dolor sit amet, consectetur so adipisicing elit, sed sil do eiusmod
            tempor.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed sil do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed sil do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit.</p>
            <h3>Lorem ipsum dolor sit amet, consectetur so adipisicing elit, sed sil do eiusmod
            tempor.</h3>
        </div>
    </div>
</div>
