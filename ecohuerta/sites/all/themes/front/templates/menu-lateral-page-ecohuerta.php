<ul class="nav nav-point">
    <li class="<?php if(strcmp(request_uri(),'/sobre-ecohuerta')==0){print active;}?>">
      <div class="nav-point-text-arrow">
        <a class="nav-point-text"  href="<?php print $base_path; ?>sobre-ecohuerta">Sobre Ecohuerta</a>
        <div class="nav-point-arrow nav-point-arrow-style"></div>
      </div>
      <a class="nav-point-link" href="<?php print $base_path; ?>sobre-ecohuerta" rel="tipsy" original-title="Iniciativas UTEC"></a>
    </li>
    <li class="<?php if(strcmp(request_uri(),'/recetas')==0){print active;}?>">
      <div class="nav-point-text-arrow">
        <a class="nav-point-text"  href="<?php print $base_path; ?>recetas">Recetas</a>
        <div class="nav-point-arrow nav-point-arrow-style"></div>
      </div>
      <a class="nav-point-link" href="<?php print $base_path; ?>recetas" rel="tipsy" original-title="Retos de la ingeniería"></a>
    </li>
</ul>
