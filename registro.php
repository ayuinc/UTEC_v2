
<?php

session_start();

require_once( 'nusoap2/nusoap.php' );

//consumir web service:
$client = new nusoap_client( "http://app.utec.edu.pe/inscripcionutecws3/services/InscripcionServicePort?wsdl", true ); 

$programacion = "2015-1";
$origen ="landing-examen-admision";

$v0 = "EXAMEN";
$v1 = "Angel AYU 123"; //utf8_decode($_POST['nombres']);
$v2 = "Pacheco"; //utf8_decode($_POST['apellidos']);
$v3 = "M"; //utf8_decode($_POST['apellidom']);
$v4 = "";
$v5 = "";
$v6 = "M";
$v7 = "14864";
$v8 = "";
$v9 = "";
$v10 = "";
$v11 = "";
$v12 = "";
$v13 = "";
$v14 = "";
$v15 = "";
$v16 = "";
$v17 = "123"; //utf8_decode($direccion);
$v18 = "angelpa38@gmail.com"; //utf8_decode($_POST['email']);
$v19 = ""; //utf8_decode($celular);
$v20 = "";
$v21 = "123333"; //$_POST['telefono'];
$v22 = "";
$v23 = "";//utf8_decode($_POST['colegio']);//24
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
$v34 = "Ingenieria Industrial"; //utf8_decode($_POST['carrera']);
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

if($error){

	//Flash::setError("<p class='nom'>Error enviando el formulario por CRM, vuelve a intentarlo porfavor</p>");
	echo "ERROR";
	//log4php
	
}else{

	ECHO "exito 123";
  //$message.="  <p>Comunícate con UTEC más fácil:<br/><a href='http://guia.com.pe/estara/estara_popup.asp?advertiseId=411234&status=P&phone=51013731000&addressId=876727&' target='_blank'><img src='img/llama_gratis.jpg' alt='LLama gratis'></a></p>";
  //Flash::setInfo($message);
}

//header( 'Location: https://app.utec.edu.pe/centro-preuniversitario/' ) ;
?>