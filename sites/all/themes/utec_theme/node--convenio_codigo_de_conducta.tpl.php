<?php 
	
	$titulo = $node->title;   
	$descripcion = $node->body['und']['0']['value'];
	$files = $node->field_archivo_pdf['und'];
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
        <div class="banner-label-bottom mb-7 ml-0">
          <?php foreach ($files as $key => $file): ?>
          <a href="<?php print file_create_url($file['uri']) ?>"><?php print $file['filename'] ?></a>
          <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Controls --> 
  </div>
</div>