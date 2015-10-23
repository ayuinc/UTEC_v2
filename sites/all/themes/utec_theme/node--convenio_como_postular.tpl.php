<?php 
	
	$titulo = $node->title;   
	$descripcion = $node->body['und']['0']['value'];
	$imagen = $node->field_image['und']['0']['uri'];
  $tab_titles = $node->field_nombre['und'];
  $tab_contents = $node->field_cuerpo['und'];
  // kpr($node->field_image);

?>

<div class="container-sm section-scroll-content  pt-35" id="apply">
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

    <div class="hidden-lg"> 

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne"> 
          <?php $count = 0; ?>
          <?php foreach ($tab_titles as $key => $tab_title): ?>
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php print $count; ?>" aria-expanded="true" aria-controls="collapseOne">
                <?php print $tab_title['value'] ?>
              </a>
            </h4>
          <?php $count++; ?>
          <?php endforeach ?>
          </div>

          <?php $count = 0; ?>
          <?php foreach ($tab_contents as $key => $tab_content): ?>
          <div id="collapse-<?php print $count; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <?php print $tab_content['value'] ?>
            </div>
          </div>
          <?php $count++;?>
          <?php endforeach ?>
        </div>
      </div>
    </div>

  </div>
  <a class="scroll-down scroll-down-sq size lg" href="#codeofconduct" rel="nofollow"><i class="icon-arrows-down"></i></a>
</div>

