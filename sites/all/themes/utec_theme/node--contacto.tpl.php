<?php $titulo = $node->title; ?>   
<?php $body = $node->body['und']['0']['value']; ?>


<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php print $body ?>	
</div>
<div class="container-sm form-custom"> 
	<h3>Contacto general</h3>
	<form action="/registro.php" data-submit="Formulario de inscripcion" method="post">
		<input type="hidden" name="origen" value="<?php print $title ?>"> 
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Nombres</label>
				<input id="nombres" name="nombres" type="text" class="form-control" placeholder="Nombres">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Apellidos Paterno</label>
				<input id="apellidop" name="apellidop" type="text" class="form-control" placeholder="Apellido paterno">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Apellido Materno</label>
				<input id="apellidom" name="apellidom" type="text" class="form-control" placeholder="Apellido materno">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Email</label>
				<input id="email" name="email" type="text" class="form-control" placeholder="Email">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Teléfono</label>
				<input id="telefono" name="telefono" type="text" class="form-control" placeholder="Teléfono">
			</div>
			<div class="form-group col-sm-4">
				<label for="" class="sr-only">Colegio</label>
				<input id="colegio" name="colegio" type="text" class="form-control" placeholder="Colegio">
			</div>
		</div>
		<div class="form-group">
			<label for="" class="sr-only">Consulta</label>
			<textarea id="consulta" name="consulta" rows="3" class="form-control" placeholder="Escribe tu consulta"></textarea>
		</div>
		<div class="text-right">
			<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
		</div>
	</form>						
</div>	

