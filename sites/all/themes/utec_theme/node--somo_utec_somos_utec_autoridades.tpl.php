<?php $title = $node->title; ?>  
<?php $field_introduccion_autoridades = $node->field_introduccion_autoridades['und']['0']['value']; ?>

<?php print_r($node); ?>

<div class="container-sm">
	<h1 class="light">Autoridades</h1>
	<div class="separator-gray separator-lg"></div>
	<!--<p class="lead">Exposición de proyectos egresados</p>-->
	<p><?php print $field_introduccion_autoridades ?></p>
	<ul class="grid-list grid-list-2">
    <?php foreach ($node->field_profesor['und'] as $key => $value) :?>
      <?php $name = $value['entity']->name; ?>   
			<?php $pic = $value['entity']->picture->filename; ?>
      <?php $desc = $value['entity']->field_descripci_n['und'][0]['value']; ?>
      <?php //die(print_r($value)); ?>
			<li data-href="//">
				<div class="user-card user-card-round size lg">
					<div class="user-pic"><img src="assets/img/user.jpg" alt=""></div>
					<div class="user-info">
						<!--<a href="#">Rosa María Llosa Demartini</a>-->
						<?php print $name ?> 
						<span><?php print $desc?></span>
						<a href="mailto:rmaria@utec.edu.pe">rmaria@utec.edu.pe</a></div>
				</div>
			</li>
    <?php endforeach ?>
	</ul>
</div>

