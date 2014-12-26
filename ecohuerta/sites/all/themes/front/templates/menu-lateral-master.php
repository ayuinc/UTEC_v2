<nav class="primary">
  <ul class="menu menu-vertical menu-light-blue">
    <li class="<?php if($is_front || strcmp(request_uri(), '/iniciativas-utec')==0 || strcmp(request_uri(), '/retos-ingenieria')==0){print active;}?>">
      <a href="<?php print $base_path; ?>">
         Ingenio en acción
        </a>
    </li>
    <li class="<?php if(strcmp(request_uri(), '/marea-en-accion')==0 || strcmp(request_uri(), '/marea-en-accion-causas')==0 || strcmp(request_uri(), '/marea-en-accion-que-haremos')==0 || strcmp(request_uri(), '/marea-en-accion-equipos')==0 || strcmp(request_uri(), '/marea-en-accion-capitulos')==0 || strcmp(request_uri(), '/marea-en-accion-votacion')==0){print active;}?>">
      <a href="<?php print $base_path; ?>marea-en-accion">
        Marea en acción
      </a>
    </li>
    <li class="<?php if(strcmp(request_uri(), '/aplica-tu-ingenio')==0){print active;}?>">
        <a id="menu-button-tu-solucion" href="<?php print $base_path; ?>aplica-tu-ingenio">
          Aplica tu ingenio
        </a>
    </li>
    <li class="<?php if(strcmp(request_uri(), '/ecohuerta')==0){print active;}?>">
      <a href="<?php print $base_path; ?>ecohuerta">
        Air Lechugas
      </a>
    </li>
  </ul>
</nav>