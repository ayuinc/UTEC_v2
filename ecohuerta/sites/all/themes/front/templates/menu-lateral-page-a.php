<ul class="nav nav-point">
    <li class="<?php if($is_front){print active;}?>">
      <div class="nav-point-text-arrow">
        <a class="nav-point-text"  href="/">Ingenio en acción</a>
        <div class="nav-point-arrow nav-point-arrow-style"></div>
      </div>
      <a class="nav-point-link" href="/" rel="tipsy" original-title="Ingenio en acción"></a>
    </li>
  
    <li class="<?php if(strcmp(request_uri(),'/iniciativas-utec')==0){print active;}?>">
      <div class="nav-point-text-arrow">
        <a class="nav-point-text"  href="/iniciativas-utec">Iniciativas UTEC</a>
        <div class="nav-point-arrow nav-point-arrow-style"></div>
      </div>
      <a class="nav-point-link" href="/iniciativas-utec" rel="tipsy" original-title="Iniciativas UTEC"></a>
    </li>
    <li class="<?php if(strcmp(request_uri(),'/retos-ingenieria')==0){print active;}?>">
      <div class="nav-point-text-arrow">
        <a class="nav-point-text"  href="/retos-ingenieria">Retos de la ingeniería</a>
        <div class="nav-point-arrow nav-point-arrow-style"></div>
      </div>
      <a class="nav-point-link" href="/retos-ingenieria" rel="tipsy" original-title="Retos de la ingeniería"></a>
    </li>
</ul>