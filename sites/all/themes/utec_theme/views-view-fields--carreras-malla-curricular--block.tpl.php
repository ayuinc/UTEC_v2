<?php  

  $titulo = $fields['title']->content; 
  $bloque = $fields['field_numero_de_bloque']->content;
  $total_creditos = $fields['field_creditos_del_bloque']->content;
  $curso = $fields['field_cursos']->content;

?>  
<li>
  <ul class="head">
    <li><?php print $bloque; ?></li>
    <li><?php print $total_creditos; ?><br><?php print t('Credits') ?></li>
  </ul>
  <div class="body">
    <?php print $curso ?>
  </div>  
</li>
  
