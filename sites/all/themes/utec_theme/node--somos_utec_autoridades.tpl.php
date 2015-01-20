<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php global $language; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/'); ?>
<?php $title = $node->title; ?>  
<?php $field_introduccion_autoridades = $node->field_introduccion_autoridades['und']['0']['value']; ?>

<div class="container-sm">
	<h1 class="light"><?php print t('Authorities') ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead text-gray"><?php print $field_introduccion_autoridades ?></p>
	<ul class="pv-35 grid-list grid-list-2 grid-list-1-xs">
		<?php kpr($node); ?>
    <?php foreach ($node->field_profesor['und'] as $key => $value) :?>
      <?php $name = $value['entity']->name; ?>   
			<?php $pic = $value['entity']->picture->filename; ?>
			<?php $uid = $value['entity']->uid; ?>
      <?php $desc = $value['entity']->field_descripci_n['und'][0]['value']; ?>
      <?php $desc_ingles = $value['entity']->field_descripci_n_ingles['und']['0']['value']; ?>
			<li data-href="/user/<?php print $uid ?>">
				<div class="user-card user-card-round size lg">
					<div class="user-pic"><img src="/<?php if($pic != ''){print($pathfile.'pictures/'.$pic);} else {print($pathfile.'pictures/'.'user.jpg'); }?>" alt=""></div>
					<div class="user-info">
						<!--<a href="#">Rosa María Llosa Demartini</a>-->
						<a href="/user/<?php print $uid ?>"><?php print $name ?></a>
						<?php if ($language->prefix == 'en') : ?>
						<span><?php print $desc_ingles?></span>
						<?php else : ?>
						<span><?php print $desc?></span>
						<?php endif; ?>
						<a href="mailto:<?php print $mail ?>"><?php print $mail ?></a></div>
				</div>
			</li>
    <?php endforeach ?>
	</ul>
</div>

