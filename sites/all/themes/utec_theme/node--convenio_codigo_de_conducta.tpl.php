<?php 
	
	$titulo = $node->title;   
	$descripcion = $node->body['und']['0']['value'];
	$file = file_create_url($node->field_archivo_pdf['und']['0']['uri']);
  // kpr($node);

?>

<div class="container-sm">
  <h2 class="light"><?php print $titulo ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div class="pv-ch-7">
      <?php print $descripcion ?>   
    </div>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="banner banner-label-bottom mb-7 ml-0">
          <a href="<?php print $file ?>"></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Controls --> 
  </div>
</div>