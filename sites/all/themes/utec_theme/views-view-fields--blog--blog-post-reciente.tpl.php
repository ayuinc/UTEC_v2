<?php 
	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_imagen']->content;
	$category = $fields['field_categor_a']->content;
	$texto_corto = $fields['field_texto_corto']->content;
	$path = $fields['path']->content;
	$user_id = $fields['uid']->content;
	kpr($fields);
?>
<div class="banner" data-href="//link">
	<div class="banner-pic" style="background-image: url(assets/img/img-sq.png);">
		<!-- <div class="banner-label bg-primary text-white"><span>Emprendimiento</span></div> -->
	</div>
	<div class="banner-content">
		<div>
			<h2><a href="#">Lorem ipsum dolor sit amet.</a></h2>
			<em class="text-primary">27 octubre 2014</em>
			<p class="lead">Recusandae vitae, temporibus repudiandae veritatis aspernatur nisi harum explicabo possimus illo velit.</p>
		</div>
		<div class="flex-space-between">
			<div class="left">
				<a href="#" class="btn btn-sm btn-primary btn-outline see-more">Leer más</a>
			</div>
			<div class="right">
				<ul class="social-links">
					<li><a href="#" class="icon-footer-facebook"></a></li>
					<li><a href="#" class="icon-footer-twitter"></a></li>
					<li><a href="#" class="icon-footer-email"></a></li>
					<li><a href="#" class="icon-footer-plus"></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>