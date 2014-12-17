<?php 

	$theme_path = drupal_get_path('theme', 'utec_theme');

?>
<!-- HEADER -->
<div id="header"> 
	<div class="tool-bar bg-gray-lighter pt-sm pb-sm">
		<div class="container">
			<div class="left">
				<ul class=" thin text-gray mr-ch-14 nav-list pt-sm">
					<li>
						<a href="#">Alumnos</a>
					</li>
					<li>
						<a href="#">Profesores</a>
					</li>
					<li>
						<a href="#">Empresas</a>
					</li>
					<li>
						<a href="#">Postulantes</a>
					</li>
				</ul>
			</div>
			<div class="right">
				<div class="inline-block pt-xs">
					<ul class="small ml-ch-7 nav-list">
						<li class="form-search">
							<form action="" class="form-inline mr-14">
								<div class="form-group mb-0">
									<label for="search" class="sr-only">Buscar</label>
									<input type="search" class="input-sm form-control" width="210" placeholder="Buscar...">
									<button type="submit" class="btn btn-default btn-xs" value="S"><i class="icon-search"></i></button>
								</div>
							</form>
						</li>
						<li class="pt-xs">
							<a href="#" class="text-gray">Contacto</a>
						</li>
						<li class="pt-xs">
							<a href="#" class="text-gray">Blog</a>
						</li>
						<li>
							<a href="#" class="btn btn-xs btn-custom btn-gray" rel="nofollow">EN</a>
						</li>
						<li>
							<a href="#" class="btn btn-xs btn-custom btn-gray" rel="nofollow">ES</a>
						</li>
						<li>
							<a href="#" class="btn btn-xs btn-custom btn-gray" rel="nofollow">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-main">
		<div class="container">
			<div class="left">
				<div class="logo pv-21">
					<a href="#"><img src="<?php print $theme_path; ?>/assets/img/logo_horizontal_UTEC.png" alt="Logo UTEC" width="135" height="auto"></a>
				</div>
			</div>
			<div class="left">
				<ul class="nav-display-triggers">
					<li>
						<a href="#nav-display-1">
							<div><i class="icon-menu-somos-utec"></i></div>
							<span>Somos Utec</span>
						</a>
					</li>
					<li>
						<a href="#nav-display-2">
							<div><i class="icon-menu-investigacion"></i></div>
							<span>Investigación</span>
						</a>
					</li>
					<li>
						<a href="#nav-display-3">
							<div><i class="icon-menu-carreras"></i></div>
							<span>Carreras</span>
						</a>
					</li>
					<li>
						<a href="#nav-display-4">
							<div><i class="icon-menu-admision"></i></div>
							<span>Admisión</span>
						</a>
					</li>
					<li>
						<a href="#nav-display-5">
							<div><i class="icon-menu-convenios"></i></div>
							<span>Convenios</span>
						</a>
					</li>
					<li>
						<a href="#nav-display-6">
							<div><i class="icon-menu-edp"></i></div>
							<span>EDP</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="nav-display" id="nav-display-1">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<h1>Conoce<br><span>Quiénes</span> Somos</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="#">Respaldo</a>
						</li>
						<li>
							<a href="#">Autoridades</a>
						</li>
						<li>
							<a href="#">Profesores</a>
						</li>
						<li>
							<a href="#"><span>Ingenio</span>en acción</a>
						</li>
						<li>
							<a href="#"><span>Metodología</span>Educativa</a>
						</li>
						<li>
							<a href="#"><span>Calendario</span>Académico</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="#">Noticias</a>
						</li>
						<li>
							<a href="#">Eventos</a>
						</li>
						<li>
							<a href="#"><span>Vida</span>Estudiantil</a>
						</li>
						<li>
							<a href="#"><span>Campus y</span>Laboratorios</a>
						</li>
						<li>
							<a href="#"><span>Trabaja</span>en UTEC</a>
						</li>
						<li>
							<a href="#" class="btn btn-primary btn-custom bold">Postular</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-display" id="nav-display-2">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<h1>Experiencia<br><span>en</span> Investigación</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="#">Publicaciones</a>
						</li>
						<li>
							<a href="#"><span>Empresas</span>y clientes</a>
						</li>
						<li>
							<a href="#">Proyectos</a>
						</li>
						<li>
							<a href="#">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-display" id="nav-display-3">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<h1>Nuestra <span>oferta</span><br>Académica</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="#"><span>Ingeniería</span>Industrial</a>
						</li>
						<li>
							<a href="#"><span>Ingeniería</span>De la Energía</a>
						</li>
						<li>
							<a href="#"><span>Ingeniería</span>Química Industrial</a>
						</li>
						<li>
							<a href="#"><span>Ingeniería</span>Mecánica</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="#"><span>Ingeniería</span>Electrónica</a>
						</li>
						<li>
							<a href="#">Menciones</a>
						</li>
						<li>
							<a href="#"><span>Escuela de</span>Desarollo</a>
						</li>
						<li>
							<a href="#" class="btn btn-primary btn-custom bold">Postular</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-display" id="nav-display-4">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<h1>Talento<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="#"><span>Modalidades</span>de admisión</a>
						</li>
						<li>
							<a href="#"><span>Charlas</span>informativas</a>
						</li>
						<li>
							<a href="#"><span>Información</span>económica</a>
						</li>
						<li>
							<a href="#" class="btn btn-primary btn-custom bold">Postular a la pre</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="#"><span>Calendario</span>de admisión</a>
						</li>
						<li>
							<a href="#"><span>Visita</span>UTEC</a>
						</li>
						<li>
							<a href="#"><span>Orientación</span>Vocacional</a>
						</li>
						<li>
							<a href="#"><span>Preguntas</span>Frecuentes</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-display" id="nav-display-5">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<h1>Lorem <span>ipsum</span><br>dolor sit amet</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="#"><span>Proceso de</span>ampliación</a>
						</li>
						<li>
							<a href="#"><span>Ven a</span>la utec</a>
						</li>
						<li>
							<a href="#"><span>Convenios de</span>Intercambio</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-display" id="nav-display-6">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<h1>Escuela de<br><span>desarollo</span><br>profesional</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li><a href="#">Diplomados</a></li>
						<li>
							<a href="#"><span>Cursos</span>online</a>
						</li>
						<li>
							<a href="#"><span>Cursos</span>Cortos</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="#"><span>Cursos</span>Adhoc</a>
						</li>
						<li><a href="#">Calendario</a></li>
						<li>
							<a href="http://escuela-edp.utec.edu.pe/" class="btn btn-primary btn-custom bold">Inscríbete</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> 
<!-- END:Header -->

<!-- HEADER-ON-SCROLL -->
<div id="header-on-scroll">
	<div class="nav-main">
		<div class="container">
			<div class="left">
				<div class="logo">
					<a href="#"><img src="<?php print $theme_path; ?>/assets/img/icon_UTEC_gs.png" alt="Logo UTEC"></a>
				</div>
			</div>
			<div class="left">
				<ul class="nav-display-triggers">
					<li>
						<a href="#nav-shrink-display-1">
							<span>Somos Utec</span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-2">
							<span>Investigación</span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-3">
							<span>Carreras</span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-4">
							<span>Admisión</span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-5">
							<span>Convenios</span>
						</a>
					</li>
					<li>
						<a href="#nav-shrink-display-6">
							<span>EDP</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="nav-display" id="nav-shrink-display-1">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<h1>Conoce<br><span>Quiénes</span> Somos</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="#">Respaldo</a>
						</li>
						<li>
							<a href="#">Autoridades</a>
						</li>
						<li>
							<a href="#">Profesores</a>
						</li>
						<li>
							<a href="#"><span>Ingenio</span>en acción</a>
						</li>
						<li>
							<a href="#"><span>Metodología</span>Educativa</a>
						</li>
						<li>
							<a href="#"><span>Calendario</span>Académico</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="#">Noticias</a>
						</li>
						<li>
							<a href="#">Eventos</a>
						</li>
						<li>
							<a href="#"><span>Vida</span>Estudiantil</a>
						</li>
						<li>
							<a href="#"><span>Campus y</span>Laboratorios</a>
						</li>
						<li>
							<a href="#"><span>Trabaja</span>en UTEC</a>
						</li>
						<li>
							<a href="#" class="btn btn-primary btn-custom bold">Postular</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-display" id="nav-shrink-display-2">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<h1>Experiencia<br><span>en</span> Investigación</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="#">Publicaciones</a>
						</li>
						<li>
							<a href="#"><span>Empresas</span>y clientes</a>
						</li>
						<li>
							<a href="#">Proyectos</a>
						</li>
						<li>
							<a href="#">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-display" id="nav-shrink-display-3">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<h1>Nuestra <span>oferta</span><br>Académica</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="#"><span>Ingeniería</span>Industrial</a>
						</li>
						<li>
							<a href="#"><span>Ingeniería</span>De la Energía</a>
						</li>
						<li>
							<a href="#"><span>Ingeniería</span>Química Industrial</a>
						</li>
						<li>
							<a href="#"><span>Ingeniería</span>Mecánica</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="#"><span>Ingeniería</span>Electrónica</a>
						</li>
						<li>
							<a href="#">Menciones</a>
						</li>
						<li>
							<a href="#"><span>Escuela de</span>Desarollo</a>
						</li>
						<li>
							<a href="#" class="btn btn-primary btn-custom bold">Postular</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-display" id="nav-shrink-display-4">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<h1>Talento<br><span>vocación</span> y<br><span>aspiración</span><br>a la excelencia</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="#"><span>Modalidades</span>de admisión</a>
						</li>
						<li>
							<a href="#"><span>Charlas</span>informativas</a>
						</li>
						<li>
							<a href="#"><span>Información</span>económica</a>
						</li>
						<li>
							<a href="#" class="btn btn-primary btn-custom bold">Postular a la pre</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="#"><span>Calendario</span>de admisión</a>
						</li>
						<li>
							<a href="#"><span>Visita</span>UTEC</a>
						</li>
						<li>
							<a href="#"><span>Orientación</span>Vocacional</a>
						</li>
						<li>
							<a href="#"><span>Preguntas</span>Frecuentes</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-display" id="nav-shrink-display-5">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<h1>Lorem <span>ipsum</span><br>dolor sit amet</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li>
							<a href="#"><span>Proceso de</span>ampliación</a>
						</li>
						<li>
							<a href="#"><span>Ven a</span>la utec</a>
						</li>
						<li>
							<a href="#"><span>Convenios de</span>Intercambio</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-display" id="nav-shrink-display-6">
		<div class="container relative">
			<a href="#" class="nav-display-close">X</a>
		</div>
		<div class="container-sm">
			<div class="nav-display-left">
				<div>
					<h1>Escuela de<br><span>desarollo</span><br>profesional</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit itaque dolorum fugiat.</p>
				</div>
			</div>
			<div class="nav-display-right">
				<div>
					<ul>
						<li><a href="#">Diplomados</a></li>
						<li>
							<a href="#"><span>Cursos</span>online</a>
						</li>
						<li>
							<a href="#"><span>Cursos</span>Cortos</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="#"><span>Cursos</span>Adhoc</a>
						</li>
						<li><a href="#">Calendario</a></li>
						<li>
							<a href="http://escuela-edp.utec.edu.pe" class="btn btn-primary btn-custom bold">Inscríbete</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END:HEADER-ON-SCROLL -->