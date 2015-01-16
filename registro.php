
<?php

session_start();

include_once( 'PHPMailer/class.phpmailer.php' );
require_once( 'nusoap2/nusoap.php' );

$mail = new PHPMailer();
$destinatarios = array(
'ebardales@utec.edu.pe' => 'Ebert Alexander Bardales Castro',
'ntubbeh@utec.edu.pe'  => 'Nader Tubbeh',
'apacheco@utec.edu.pe'  => 'Angel Pacheco Masías',
);

$carrera_elegida = $_POST['carrera'];
$carreras = array(
    '14864' => 'Ingeniería Mecánica',
    '15964' => 'Ingeniería Electrónica',
    '15966' => 'Ingeniería Química Industrial',
    '15968' => 'Ingeniería de la Energía',
    '15970' => 'Ingeniería Industrial', 
);

$mensaje_html ="";
$mensaje_html .= '<html><body>
        <table>
            <tr>
                <td colspan="2"><b>EXAMEN ADMISION - Datos Personales</b></td>
            </tr>
            <tr>
                <td>EXITO!</td>
            </tr>
        </table>
    </body>
    </html>';

$mail->From     = 'informes@utec.edu.pe';
$mail->FromName = 'UTEC';
$mail->Host = "545c0f422c16364190cd270f517e9d.mail.outlook.com";
$mail->Subject  = 'Solicitud - Examen Admision UTEC';
$mail->AltBody  = "Para ver este correo, utilize un visor de correo compatible con HTML"; // optional, comment out and test
$mail->IsHTML(true);
$mail->Body = $mensaje_html;


foreach ( $destinatarios as $destinatario_email => $destinatario_nombre ) {
        $mail->AddAddress( $destinatario_email, $destinatario_nombre );
      }
      
$mail->Send();

$mailrpta = "angelpa38@gmail.com";
$mail_1 = new PHPMailer();
$mail_1->CharSet = 'UTF-8';
$mail_1->From     = 'admision@utec.edu.pe';
$mail_1->FromName = 'UTEC – Admisión';
$mail_1->IsHTML(true); 
$mail_1->Host = "545c0f422c16364190cd270f517e9d.mail.outlook.com";
$mail_1->Subject  = 'Gracias por tu Interés en UTEC';
$mail_1->AddAddress($mailrpta);
$mail_1->AltBody  = "Para ver este correo, utilize un visor de correo compatible con HTML";
//$mail_1->AddEmbeddedImage('http://app.utec.edu.pe/admision/img/llama_gratis.jpg', 'llama_gratis');
//$mail_1->AddEmbeddedImage('http://app.utec.edu.pe/admision/img/logo_utec.jpg', 'logoUtec');
//$mail_1->AddEmbeddedImage('http://app.utec.edu.pe/admision/img/cabeceraWEB.jpg', 'cabeza');
//$mail_1->AddEmbeddedImage('http://app.utec.edu.pe/admision/img/pieWEB.jpg', 'pie');

$contenidorpta="";
$contenidorpta.="<p><img src='http://app.utec.edu.pe/admision/img/cabeceraWEB.jpg' alt='cabeceraWEB' usemap='#Map2'>
  <map name='Map2' id='Map2'>
    <area shape='rect' coords='3,3,597,86' href='http://www.utec.edu.pe/Utec.aspx' target='_blank' alt='UTEC' />
  </map>
</p>";
$contenidorpta.="<p>Hola que hace?, </p>
                 <p><h2>¡Gracias por tu interés en UTEC.!</h2>
                 <br />Hemos recibido tu consulta correctamente. 
                 <br />Pronto atenderemos tu consulta.</p>
                 <p>¿Quieres conocer más acerca de UTEC?</p>
                 <p><ul>
                 <li><a href='https://www.youtube.com/watch?v=E7orILoYKSI&feature=youtu.be' target='_blank'>Conoce nuestro nuevo campus en Barranco, próximo a inaugurarse.</a></li>
                 <li><a href='http://www.utec.edu.pe/carreras/default.aspx#.VD2hCfl5O5I' target='_blank'>Conoce nuestras carreras.</a></li>
                 <li>Síguenos en <a href='https://www.facebook.com/utecuniversidad' target='_blank'>Facebook</a>, <a href='https://twitter.com/utecedu' target='_blank'>Twitter</a> y <a href='https://www.youtube.com/user/universidadutec' target='_blank'>Youtube</a>.</li></ul></p><br/>";

$contenidorpta.="<p>Comunícate con UTEC más fácil:<br/><a href='http://guia.com.pe/estara/estara_popup.asp?advertiseId=411234&status=P&phone=51013731000&addressId=876727&' target='_blank'><img src='http://app.utec.edu.pe/admision/img/llama_gratis.jpg' alt='LLama gratis'></a></p>";
//$contenidorpta.="<p><strong>UTEC -  Universidad de Ingeniería & Tecnología</strong><br />Telf: (511) 373 1000<br />Av. Prolongación San Martín, 207, Barranco<br />informes@utec.edu.pe<br />www.utec.edu.pe</p>";
$contenidorpta.="<p><img src='http://app.utec.edu.pe/admision/img/logo_utec.jpg' alt='Logo Utec'><br/><b>UTEC - Universidad de Ingeniería & Tecnología</b></p>";
$contenidorpta.="<p>
<img src='http://app.utec.edu.pe/admision/img/pieWEB.jpg' alt='pieWEB' usemap='#Map'>
<map name='Map' id='Map'>
<area shape='rect' coords='19,33,107,67' href='http://www.utec.edu.pe/carreras/ingenieria-industrial/default.aspx#.VE5bZfmG96A' target='_blank' alt='Ingeniería Industrial' />
<area shape='rect' coords='487,31,595,69' href='http://www.utec.edu.pe/carreras/ingenieria-quimica/default.aspx#.VE5bjPmG96A' target='_blank' alt='Ingeniería Química Industrial' />
<area shape='rect' coords='132,36,230,67' href='http://www.utec.edu.pe/carreras/ingenieria-mecanica/default.aspx#.VE6dZ_mG96A' target='_blank' alt='Ingeniería Mecánica' />
<area shape='rect' coords='257,36,348,66' href='http://www.utec.edu.pe/carreras/ingenieria-energia/default.aspx#.VE6dlPmG96A' target='_blank' alt='Ingeniería de la Energía' />
<area shape='rect' coords='374,34,467,67' href='http://www.utec.edu.pe/carreras/ingenieria-electronica/default.aspx#.VE6dufmG96A' target='_blank' alt='Ingeniería Electrónica' />
<area shape='rect' coords='48,121,198,140' href='mailto:informes@utec.edu.pe?Subject=Consulta Información' target='_top' />
<area shape='rect' coords='221,123,344,141' href='http://www.utec.edu.pe/Utec.aspx' target='_blank' alt='UTEC' />
</map>
</p>"; 

$mail_1->Body = $contenidorpta;
$mail_1->Send();



//consumir web service:
$client = new nusoap_client( "http://app.utec.edu.pe/inscripcionutecws3/services/InscripcionServicePort?wsdl", true ); 

$programacion = "2015-1";
$origen ="landing-examen-admision";

$v0 = "ADMISION";
$v1 = "Angel Ayu 789"; //$_POST['nombres'];
$v2 = "Pacheco"; //$_POST['apellidop'];
$v3 = "ApellidoM";
$v4 = "";
$v5 = "";
$v6 = "M";
$v7 = "Ingeniería Electrónica"; //utf8_decode($carreras[$carrera_elegida]);
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
$v18 = "Mail"; //$_POST['email'];
$v19 = ""; //utf8_decode($celular);
$v20 = "";
$v21 = "1111888881"; //$_POST['telefono'];
$v22 = "";
$v23 = "";//24
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
$v34 = "15964"; //utf8_decode($_POST['carrera']);
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