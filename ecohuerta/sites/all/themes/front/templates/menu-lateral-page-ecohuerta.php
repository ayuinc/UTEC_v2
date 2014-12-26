<ul class="nav nav-point">
  <li class="<?php if(strcmp(request_uri(),'/ecohuerta/ecohuerta')==0){print active;}?>">
    <div class="nav-point-text-arrow">
      <a class="nav-point-text"  href="<?php print $base_path; ?>ecohuerta">Inicio</a>
      <div class="nav-point-arrow nav-point-arrow-style"></div>
    </div>
    <a class="nav-point-link" href="<?php print $base_path; ?>ecohuerta" rel="tipsy" original-title="Ecohuerta"></a>
  </li>
  <li class="<?php if(strcmp(request_uri(),'/ecohuerta-video-lechugas-hidroponicas')==0){print active;}?>">
    <div class="nav-point-text-arrow">
      <a class="nav-point-text"  href="<?php print $base_path; ?>ecohuerta-video-lechugas-hidroponicas">Sobre Air Lechugas</a>
      <div class="nav-point-arrow nav-point-arrow-style"></div>
    </div>
    <a class="nav-point-link" href="<?php print $base_path; ?>ecohuerta-video-lechugas-hidroponicas" rel="tipsy" original-title="Sobre ecohuerta"></a>
  </li>
  <li class="<?php if(strcmp(request_uri(),'/ecohuerta-recetas')==0){print active;}?>">
    <div class="nav-point-text-arrow">
      <a class="nav-point-text"  href="<?php print $base_path; ?>ecohuerta-recetas">Recetas</a>
      <div class="nav-point-arrow nav-point-arrow-style"></div>
    </div>
    <a class="nav-point-link" href="<?php print $base_path; ?>ecohuerta-recetas" rel="tipsy" original-title="Recetas"></a>
  </li>
</ul>
