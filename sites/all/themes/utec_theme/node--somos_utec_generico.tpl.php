<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/somos-utec-generico/'); ?>

<?php $title = $node->title; ?>  
<?php $field_introduccion_su_generico = $node->field_introduccion_su_generico['und']['0']['value']; ?>
<?php $field_contenido_su_generico = $node->field_contenido_su_generico['und']['0']['value']; ?>
<?php $field_foto_su_generico = $node->field_foto_su_generico['und']['0']['filename']; ?>




<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead"><?php print $field_introduccion_su_generico ?></p>
	<?php if ($field_foto_su_generico!='') { ?>
		<img src="<?php print('/'.$pathfile.$field_foto_su_generico)?>">
	<?php } ?>
	<ul class="grid-list grid-list-4 grid-list-centered grid-list-anchors pv-21">
		<li class="mb-ch-14">
			<div class="grid-list-pic"><img src="assets/img/user.jpg" alt="" width="98px" height="auto" class="img-circle"></div>
			<div>
				<a href="#" class="thin">Rosa María Llosa Demartini</a>
				<span>Miembro del consejo directivo</span>
			</div>
		</li>
		<li class="mb-ch-14">
			<div class="grid-list-pic"><img src="assets/img/user.jpg" alt="" width="98px" height="auto" class="img-circle"></div>
			<div>
				<a href="#" class="thin">Rosa María Llosa Demartini</a>
				<span>Miembro del consejo directivo</span>
			</div>
		</li>
		<li class="mb-ch-14">
			<div class="grid-list-pic"><img src="assets/img/user.jpg" alt="" width="98px" height="auto" class="img-circle"></div>
			<div>
				<a href="#" class="thin">Rosa María Llosa Demartini</a>
				<span>Miembro del consejo directivo</span>
			</div>
		</li>
		<li class="mb-ch-14">
			<div class="grid-list-pic"><img src="assets/img/user.jpg" alt="" width="98px" height="auto" class="img-circle"></div>
			<div>
				<a href="#" class="thin">Rosa María Llosa Demartini</a>
				<span>Miembro del consejo directivo</span>
			</div>
		</li>
		<li class="mb-ch-14">
			<div class="grid-list-pic"><img src="assets/img/user.jpg" alt="" width="98px" height="auto" class="img-circle"></div>
			<div>
				<a href="#" class="thin">Rosa María Llosa Demartini</a>
				<span>Miembro del consejo directivo</span>
			</div>
		</li>
		<li class="mb-ch-14">
			<div class="grid-list-pic"><img src="assets/img/user.jpg" alt="" width="98px" height="auto" class="img-circle"></div>
			<div>
				<a href="#" class="thin">Rosa María Llosa Demartini</a>
				<span>Miembro del consejo directivo</span>
			</div>
		</li>
		<li class="mb-ch-14">
			<div class="grid-list-pic"><img src="assets/img/user.jpg" alt="" width="98px" height="auto" class="img-circle"></div>
			<div>
				<a href="#" class="thin">Rosa María Llosa Demartini</a>
				<span>Miembro del consejo directivo</span>
			</div>
		</li>
	</ul>
</div>