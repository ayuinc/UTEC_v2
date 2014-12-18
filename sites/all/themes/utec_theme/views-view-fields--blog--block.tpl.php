<?php //die(print_r($fields)); ?>
<?php 
	kpr($fields); 
	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_imagen']->content;
	$category = $fields['field_categor_a']->content;
	$texto_corto = $fields['field_texto_corto']->content;
?>
<div class="pv-21">
	<h2 class="lead medium mb-0"><span class="text-gray-darker">Blog</span> <span class="text-gray">UTEC</span></h2>
	<h4 class="lead mt-0 mb-56">Lorem ipsum sit amet, consectetur adipisicing elit.</h4>
	<div class="banner row ml-0" data-href="//link">
		<div class="col-sm-3 banner-pic" style="background-image: url(assets/img/img-sq.png);"></div>
		<div class="col-sm-9 banner-content">
			<div>
  			<div class="user-card user-card-round">
  				<div class="user-pic"><img src="assets/img/user.jpg" alt=""></div>
  				<div class="user-info"><h4>Alberto Iturralde</h4><small>Ingeniero Mecánico</small></div>
  			</div>
  			<h2><a href="#">Lorem ipsum dolor sit amet.</a></h2>
				<p class="lead">Recusandae vitae, temporibus repudiandae veritatis aspernatur nisi harum explicabo possimus illo velit.</p>
				<div class="text-right pv-14">
					<button class="see-more btn btn-lg btn-primary uppercase">Leer más</button>
				</div>
			</div>
		</div>
	</div>
</div>