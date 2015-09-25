<?php 
	
	$titulo = $node->title;   
	$descripcion = $node->body['und']['0']['value'];
	$imagen = $node->field_image['und']['0']['uri'];
  $tab_titles = $node->field_nombre['und'];
  $tab_contents = $node->field_cuerpo['und'];
  // kpr($node->field_image);

?>

<div class="container-sm">
  <h2 class="light"><?php print $titulo ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div class="pv-ch-7">
      <?php print $descripcion ?>   
    </div>
    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <?php $count = 0; ?>
        <?php foreach ($tab_titles as $key => $tab_title): ?>
        <li role="presentation" class="<?php ($count == 0) ? print 'active' : '' ; ?>"><a href="#tab-<?php print $count ?>" aria-controls="tab-<?php print $count ?>" role="tab" data-toggle="tab"><?php print $tab_title['value'] ?></a></li>
        <?php $count++; ?>
        <?php endforeach ?>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <?php $count = 0; ?>
        <?php foreach ($tab_contents as $key => $tab_content): ?>
        <div role="tabpanel" class="tab-pane <?php ($count == 0) ? print 'active' : '' ; ?>" id="tab-<?php print $count ?>"><?php print $tab_content['value'] ?></div>
        <?php $count++; ?>
        <?php endforeach ?>
      </div>
    </div>
    <!-- Controls --> 
  </div>
</div>

