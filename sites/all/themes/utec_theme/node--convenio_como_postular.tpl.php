<?php 
	
	$titulo = $node->title;   
	$descripcion = $node->body['und']['0']['value'];
	$imagen = $node->field_image['und']['0']['uri'];
  $tab_titles = $node->field_nombre['und'];
  $tab_contents = $node->field_cuerpo['und'];
  // kpr($node->field_image);

?>

<div class="container-sm section-scroll-content" id="apply">
  <h2 class="light"><?php print $titulo ?></h2>
  <div class="separator-gray separator-sm"></div>
  <div class="p-ch-gray-dark">
    <div class="pv-ch-7">
      <?php print $descripcion ?>   
    </div>

    <div class="hidden-xs hidden-sm">
      <!-- TABS -->
      <div class="tabs tabs-style-linebox">
        <nav>
          <ul>
            <?php $count = 0; ?>
            <?php foreach ($tab_titles as $key => $tab_title): ?>
            <li class="<?php ($count == 0) ? print 'tab-current' : '' ; ?>">
              <a href="#section-linebox-<?php print $count; ?>"><span><?php print $tab_title['value'] ?></span>
              </a>
            </li>
            <?php $count++; ?>
            <?php endforeach ?>
          </ul>
        </nav>
        <div class="content-wrap bg-gray-lighter" style="color: black;">
          <?php $count = 0; ?>
          <?php foreach ($tab_contents as $key => $tab_content): ?>
          <section id="section-linebox-<?php print $count; ?>" class="<?php ($count == 0) ? print 'content-current' : '' ; ?>">
            <p style="color: black;"><?php print $tab_content['value'] ?></p>
          </section>
          <?php $count++;?>
          <?php endforeach ?>
        </div><!-- /content -->
      </div>
    </div>

    <div class="hidden-lg">
      <!-- TABS -->
      <div class="tabs tabs-style-linebox" id="collapse-myTab">
        <nav>
          <ul>
            <?php $count = 0; ?>
            <?php foreach ($tab_titles as $key => $tab_title): ?>
            <li class="<?php ($count == 0) ? print 'tab-current' : '' ; ?>">
              <a href="bloque-linebox-<?php print $count; ?>"><span><?php print $tab_title['value'] ?></span>
              </a>
            </li>
            <?php $count++; ?>
            <?php endforeach ?>
          </ul>
        </nav>
        <div class="content-wrap bg-gray-lighter" style="color: black;">
          <?php $count = 0; ?>
          <?php foreach ($tab_contents as $key => $tab_content): ?>
          <section id="bloque-linebox-<?php print $count; ?>" class="<?php ($count == 0) ? print 'content-current' : '' ; ?>">
            <p style="color: black;"><?php print $tab_content['value'] ?></p>
          </section>
          <?php $count++;?>
          <?php endforeach ?>
        </div><!-- /content -->
      </div>
    </div>


  </div>
  <a class="scroll-down scroll-down-sq size lg" href="#codeofconduct" rel="nofollow"><i class="icon-arrows-down"></i></a>
</div>

