<div id="form-netsuite" class="container-sm"> 
  <h1 class="light"><?php //print $node->title ?></h1>
  <div class="separator-gray separator-sm"></div>           
  <h3><?php //print render($content['field_subtitulo']); ?></h3>
  <div class="pv-ch-7 pv-ch-14-xs p-ch-gray">
    
    <div class="form-blocks">
      <div class="form-tabs">
        <div id="tab-person-natural" class="form-tab-item active">
          <input type="radio" name="person_type" id="natural-person" class="input-radio" value="persona" checked="checked">
          <label>Persona natural</label>
        </div>
        <div id="tab-person-legal" class="form-tab-item">
          <input type="radio" name="person_type" id="legal-person" class="input-radio" value="empresa">
          <label>Persona Jurídica</label>
        </div>
      </div>
      <div id="tab-person-natural-content" class="form-tab-content">
        <?php print drupal_render($output['netsuite_form_builder_netsuite_block_1']); ?>    
      </div>
      <div id="tab-person-legal-content" class="form-tab-content hide">
        <?php print drupal_render($output['netsuite_form_builder_netsuite_block_2']); ?>    
      </div>
    </div>

  </div>
</div>
