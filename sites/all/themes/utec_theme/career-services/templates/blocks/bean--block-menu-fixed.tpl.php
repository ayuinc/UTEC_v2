<div id="section-scroll" class="<?php print $classes; ?> block-menu-fixed hidden-sm hidden-xs clearfix"<?php print $attributes; ?>>
  <ul class="p-14 pb-42">
    <?php foreach ($content['field_bt_menufixed_link']['#items'] as $item): ?>
      <li>
      <?php
        print l(
          $item['title'], 
          $item['url'], 
          array(
            'fragment' => $item['fragment'], 
            'query' => $item['query'], 
            'attributes' => array(
              'class' => array(
                'animated', 
                'bounceInRight', 
                'ad-2', 
                'scroll-ref-1', 
                'atm-scroll-item'
              )
            ),
            'html' => $item['html']
          )
        );
      ?>
      </li>
    <?php endforeach; ?>
  </ul>
  <div class="text-center pv-7"> 
    <h2 class="lead medium mb-7">
      <span class="text-gray-darker">Consulta o registra</span>
      <span class="text-gray"> una propuesta de trabajo</span>
    </h2>
    <!--button type="button" class="col-xs-12 btn btn-alumnos btn-primary uppercase atm-scroll-item" data-toggle="modal" data-target="#myModal">LOGIN</button-->
    <a href="http://utec.bumeran.com.pe/" class="col-xs-12 btn btn-alumnos btn-primary uppercase atm-scroll-item" target="_blank">LOGIN</a>
  </div>
</div>
