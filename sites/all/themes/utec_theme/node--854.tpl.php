<?php 
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile= variable_get('file_public_path', conf_path() . '/files/');

	$titulo = $node->title;
	$cuerpo = $node->body['und']['0']['value'];
	$mencion = $node->field_mencion['und']['0']['value'];
	$electivo = $node->field_electivo['und'];
	
	// print_r($node);
?>

<div class="container-sm">
	examen de admision
	<h1 class="light"><?php print t('Form') ?></h1>
	<div clsass="separator-gray separator-lg"></div>
	<h3 class="thin text-gray pt-21 pb-56"><?php print t('Examen de admision') ?></h3>
</div>
<div class="container-sm form-custom">
	<form action="/registro.php" data-submit="Formulario de inscripcion" method="post">
			<input type="hidden" name="origen" value="<?php print $title ?>">
			<input type="hidden" name="origen2" value="<?php print $title ?>">
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only"><?php print t('Names') ?></label>
					<input type="text" class="form-control" placeholder="Nombres" name="nombres" id="nombres">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only"><?php print t('Last Name') ?></label>
					<input type="text" class="form-control" placeholder="Apellido paterno" name="apellido_paterno" id="apellido_paterno">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only"><?php print t('Last Name') ?></label>
					<input type="text" class="form-control" placeholder="Apellido materno" name="apellido_materno" id="apellido_materno">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only"><?php print t('Gender') ?></label>
					<select name="genero" id="genero" class="form-control select-override">
					  <option value="15970">Masculino</option>
            <option value="14864">Femenino</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only">carrera</label>
					<input type="text" class="form-control" placeholder="carrera" name="carrera" id="carrera">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only">carrera</label>
					<input type="text" class="form-control" placeholder="carrera" name="carrera" id="carrera">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only">documento</label>
					<input type="text" class="form-control" placeholder="documento" name="documento" id="documento">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only">lugar de nacimiento</label>
					<input type="text" class="form-control" placeholder="lugar de nacimiento" name="lugar_nacimiento" id="lugar_nacimiento">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only">fecha de nacimiento</label>
					<input type="text" class="form-control" placeholder="fecha de nacimiento" name="fecha_nacimiento" id="fecha_nacimiento">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-7">
					<label for="" class="sr-only">domicilio actual</label>
					<input type="text" class="form-control" placeholder="domicilio actual" name="domicilio_actual" id="domicilio_actual">
				</div>
			</div>
			<div class="text-right">
				<button type="submit" class="btn btn-primary btn-lg"><?php print t('Send') ?></button>
			</div>
	</form>						
	<p class="text-gray">De conformidad con los artículos lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut at, veritatis tempore ipsa voluptate neque lorem exercitationem impedit aperiam? Veritatis recusandae dolorem, ullam repellendus minus expedita consequatur doloremque iusto fugiat maxime!</p>
</div>
<div class="container pt-42">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<p class="text-gray"><?php print t('De conformidad con los artículos lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut at, veritatis tempore ipsa voluptate neque lorem exercitationem impedit aperiam? Veritatis recusandae dolorem, ullam repellendus minus expedita consequatur doloremque iusto fugiat maxime!') ?></p>
	</div>
	<div class="col-md-1"></div>
</div>


<?php

session_start();

require_once( 'nusoap2/nusoap.php' );

//consumir web service:
$client = new nusoap_client( "http://app.utec.edu.pe/inscripcionutecws3/services/InscripcionServicePort?wsdl", true ); 

$programacion = "2015-1";
$origen = "landing-alto-rendimiento";

$v0 = "ALTO RENDIMIENTO";
$v1 = utf8_decode($_POST['nombres']);
$v2 = "Pacheco"; //utf8_decode($_POST['apellido']);
$v3 = "Masias"; //utf8_decode($_POST['apellidom']);
$v4 = "";
$v5 = "";
$v6 = "M";
$v7 = "Ingeniería Mecánica"; //utf8_decode($carreras[$carrera_elegida]);
$v8 = "";
$v9 = "";
$v10 = "";
$v11 = "";
$v12 = "";
$v13 = "";
$v14 = "";
$v15 = "";
$v16 = "";
$v17 = ""; //utf8_decode($direccion);
$v18 = "111"; //utf8_decode($_POST['emailx']);
$v19 = "454545"; //utf8_decode($celular);
$v20 = "";
$v21 = "123456789"; //$_POST['telefono'];
$v22 = "";
$v23 = "nombre"; //utf8_decode($_POST['colegio']);//24
$v24 = "";//25
$v25 = $_SERVER['REMOTE_ADDR'];//26
$v26 = "48500";//27
$v27 = "N";
$v28 = "";
$v29 = "";
$v30 = "";
$v31 = "";
$v32 = "";
$v33 = "";
$v34 = "14864"; //utf8_decode($_POST['carrera']);
$v35 = $programacion;
$v36 = "";
$v37 = $origen;
$v38 = "";

$param = array('familia' => $v0, 'nombres' => $v1, 'apelPat' => $v2, 'apelMat' => $v3, 'tipDoc' => $v4, 'numDoc' => $v5, 'genero' => $v6, 'carrera1' => $v7, 'carrera2' => $v8, 'paisNaci' => $v9, 'ciudadNaci' => $v10,
                                        'diaNaci' => $v11, 'mesNaci' => $v12, 'anhoNaci' => $v13, 'dptoActual' => $v14, 'provActual' => $v15, 'distActual' => $v16, 'direccion' => $v17, 'email' => $v18, 'celular1' => $v19, 'celular2' => $v20,
                                        'telfFijo' => $v21, 'anhoEstudios' => $v22, 'colegio' => $v23, 'rendimiento' => $v24, 'ip' => $v25, 'codActividad' => $v26, 'esEstudiante' => $v27, 'gradoInstruccion' => $v28, 'gradoColegio' => $v29, 'movilOperador' => $v30,
                                        'codPais' => $v31, 'numRPM' => $v32, 'comoSupoNosotros' => $v33, 'codigoProducto' => $v34, 'codigoProgramacion' => $v35, 'comentario' => $v36, 'origenOportunidad' => $v37, 'univProcedencia' => $v38);

$response = $client->call( 'registrarInscripcion', $param );
$error = $client->getError();

print_r($response);

if($error){

	//Flash::setError("<p class='nom'>Error enviando el formulario por CRM, vuelve a intentarlo porfavor</p>");
	echo "error";
	//log4php
	
}else{

	echo "exito";
  //$message.="  <p>Comunícate con UTEC más fácil:<br/><a href='http://guia.com.pe/estara/estara_popup.asp?advertiseId=411234&status=P&phone=51013731000&addressId=876727&' target='_blank'><img src='img/llama_gratis.jpg' alt='LLama gratis'></a></p>";
  //Flash::setInfo($message);
}

//header( 'Location: https://app.utec.edu.pe/centro-preuniversitario/' ) ;
?>
