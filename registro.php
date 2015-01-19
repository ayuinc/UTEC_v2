
<?php

session_start();

include_once( 'PHPMailer/class.phpmailer.php' );
require_once( 'nusoap2/nusoap.php' );

//Validación de que los parámetros existan
if (!isset($_POST['nombres'])) {$_POST['nombres'] = "";};
if (!isset($_POST['apellidop'])) {$_POST['apellidop'] = "";};
if (!isset($_POST['apellidom'])) {$_POST['apellidom'] = "";};
if (!isset($_POST['tipo-documento'])) {$_POST['tipo-documento'] = "";};
if (!isset($_POST['documento'])) {$_POST['documento'] = "";};
if (!isset($_POST['genero'])) {$_POST['genero'] = "M";};
if (!isset($_POST['carrera'])) {$_POST['carrera'] = "00000";};
if (!isset($_POST['pais'])) {$_POST['pais'] = "";};
if (!isset($_POST['ciudad'])) {$_POST['ciudad'] = "";};
if (!isset($_POST['dia'])) {$_POST['dia'] = ""; $fecha_n = ""; };
if (!isset($_POST['mes'])) {$_POST['mes'] = "";};
if (!isset($_POST['ano'])) {$_POST['ano'] = "";};
if (!isset($_POST['depto'])) {$_POST['depto'] = "";};
if (!isset($_POST['provincia'])) {$_POST['provincia'] = "";};
if (!isset($_POST['distrito'])) {$_POST['distrito'] = "";};
if (!isset($_POST['direccion-actual'])) {$_POST['direccion-actual'] = "";};
if (!isset($_POST['email'])) {$_POST['email'] = "";};
if (!isset($_POST['celular-1'])) {$_POST['celular-1'] = "";};
if (!isset($_POST['celular-2'])) {$_POST['celular-2'] = "";};
if (!isset($_POST['telefono'])) {$_POST['telefono'] = "";};
if (!isset($_POST['ano-culminacion'])) {$_POST['ano-culminacion'] = "";};
if (!isset($_POST['colegio'])) {$_POST['colegio'] = "";};
if (!isset($_POST['estudios-dpto'])) {$_POST['estudios-dpto'] = "";};
if (!isset($_POST['estudios-provincia'])) {$_POST['estudios-provincia'] = "";};
if (!isset($_POST['estudios-distrito'])) {$_POST['estudios-distrito'] = "";};
if (!isset($_POST['estudios-rendimiento'])) {$_POST['estudios-rendimiento'] = "";};
if (!isset($_POST['estudiante'])) {$_POST['estudiante'] = "N";};
if (!isset($_POST['consulta'])) {$_POST['consulta'] = "";};


if ($_POST['dia'] != "")
{
  $fecha_n = $_POST['dia']." de ".$_POST['mes']." Del ".$_POST['ano'];
}

$carrera_elegida = $_POST['carrera'];
$carreras = array(
    '14864' => 'Ingeniería Mecánica',
    '15964' => 'Ingeniería Electrónica',
    '15966' => 'Ingeniería Química Industrial',
    '15968' => 'Ingeniería de la Energía',
    '15970' => 'Ingeniería Industrial', 
    '00000' => 'N/S', 
);


//Inicio del proceso de envío de correos
$mail = new PHPMailer();
$destinatarios = array(
'ebardales@utec.edu.pe' => 'Ebert Alexander Bardales Castro',
'ntubbeh@utec.edu.pe'  => 'Nader Tubbeh',
'apacheco@utec.edu.pe'  => 'Angel Pacheco Masías',
);

$tituloTelemarketing = "";
$subjectTelemarketing = "";
$fromTelemarketing = "";
$fromNameTelemarketing = "";
$tituloCliente = "";
$subjectCliente = "";
$fromCliente = "";
$fromNameCliente = "";
$familia = "";
$origen = "";

//Definicón de subject, destinatario, título

$origen = utf8_decode($_POST['origen']);
if($origen == "Examen de Admisión" || $origen == "Primeros puestos" || $origen == "Alto rendimiento" || 
   $origen == "Traslado Externo" || $origen == "Centro Pre" || $origen == "Bachillerato Internacional" )
{

    $fromTelemarketing = "informes@utec.edu.pe";
    $fromNameTelemarketing = "UTEC";
    $tituloCliente = "¡Gracias por tu interés en UTEC.!";
    $subjectCliente = "Gracias por tu Interés en UTEC";
    $fromCliente = "admision@utec.edu.pe";
    $fromNameCliente = "UTEC – Admisión";

    if ($origen == "Examen de Admisión")
    {
        $tituloTelemarketing = "EXAMEN ADMISION - Datos Personales";
        $subjectTelemarketing = "Solicitud - Examen Admision UTEC";
        $familia = "EXAMEN-ADMISION";
        $origen = "pagina-examen-admision";
    }

    if ($origen == "Primeros puestos")
    {
        $tituloTelemarketing = "PRIMEROS PUESTOS - Datos Personales";
        $subjectTelemarketing = "Solicitud - Primeros Puestos UTEC";
        $familia = "PRIMEROS-PUESTOS";
        $origen = "pagina-primeros-puestos";
    }

    if ($origen == "Alto rendimiento")
    {
        $tituloTelemarketing = "ALTO RENDIMIENTO - Datos Personales";
        $subjectTelemarketing = "Solicitud - Alto Rendimiento UTEC";
        $familia = "ALTO-RENDIMIENTO";
        $origen = "pagina-alto-rendimiento";
    }

    if ($origen == "Traslado Externo")
    {
        $tituloTelemarketing = "TRASLADO EXTERNO - Datos Personales";
        $subjectTelemarketing = "Solicitud - Traslado Externo UTEC";
        $familia = "TRASLADO-EXTERNO";
        $origen = "pagina-traslado-externo";
    }

    if ($origen == "Centro Pre")
    {
        $tituloTelemarketing = "CENTRO PRE - Datos Personales";
        $subjectTelemarketing = "Solicitud - Centro Preuniversitario UTEC";
        $familia = "CENTRO-PRE";
        $origen = "pagina-centro-pre";
    }

    if ($origen == "Bachillerato Internacional")
    {
        $tituloTelemarketing = "BACHILLERATO INTERNACIONAL - Datos Personales";
        $subjectTelemarketing = "Solicitud - Bachillerato Internacional UTEC";
        $familia = "BACHILLERATO";
        $origen = "pagina-bachillerato";
    }
}


if($origen == "Formulario inscripcion examen de admision" || $origen == "Formulario inscripcion alto rendimiento" || $origen == "Formulario inscripcion centro pre" || 
   $origen == "Formulario inscripcion primeros puestos" || $origen == "Formulario inscripcion traslados" || $origen == "Formulario inscripcion bachillerato internacional" )
{

    $fromTelemarketing = "inscripciones@utec.edu.pe";
    $fromNameTelemarketing = "UTEC";
    $tituloCliente = "¡Gracias por tu interés en UTEC.!";
    $fromCliente = "admision@utec.edu.pe";
    $fromNameCliente = "UTEC – Admisión";

    if($origen == "Formulario inscripcion examen de admision")
    {
        $tituloTelemarketing = "Registro de Inscripciones - Examen de Admisión UTEC";
        $subjectTelemarketing = "Registro de Inscripciones - Examen de Admisión UTEC";
        $subjectCliente = "Registro de Inscripciones - Examen de Admisión UTEC";
        $familia = "EXAMEN";
        $origen = "pagina-inscripcion-examen-admision";  
    }

    if($origen == "Formulario inscripcion alto rendimiento")
    {
        $tituloTelemarketing = "Registro de Inscripciones - Alto Rendimiento UTEC";
        $subjectTelemarketing = "Registro de Inscripciones - Alto Rendimiento UTEC";
        $subjectCliente = "Registro de Inscripciones - Alto Rendimiento UTEC";
        $familia = "ALTO RENDIMIENTO";
        $origen = "pagina-inscripcion-alto-rendimiento";  
    }

    if($origen == "Formulario inscripcion bachillerato internacional")
    {
        $tituloTelemarketing = "Registro de Inscripciones - Bachillerato Internacional UTEC";
        $subjectTelemarketing = "Registro de Inscripciones - Bachillerato Internacional UTEC";
        $subjectCliente = "Registro de Inscripciones - Bachillerato Internacional UTEC";
        $familia = "BACHILLERATO";
        $origen = "pagina-inscripcion-bachillerato";  
    }

    if($origen == "Formulario inscripcion centro pre")
    {
        $tituloTelemarketing = "Registro de Inscripciones - Centro Preuniversitario UTEC";
        $subjectTelemarketing = "Registro de Inscripciones - Centro Preuniversitario UTEC";
        $subjectCliente = "Registro de Inscripciones - Centro Preuniversitario UTEC";
        $familia = "PRE UTEC";
        $origen = "pagina-inscripcion-centro-preuniversitario";  
    }

    if($origen == "Formulario inscripcion primeros puestos")
    {
        $tituloTelemarketing = "Registro de Inscripciones - Primeros Puestos UTEC";
        $subjectTelemarketing = "Registro de Inscripciones - Primeros Puestos UTEC";
        $subjectCliente = "Registro de Inscripciones - Primeros Puestos UTEC";
        $familia = "PRIMEROS PUESTOS";
        $origen = "pagina-inscripcion-primeros-puestos";  
    }


    if($origen == "Formulario inscripcion traslados")
    {
        $tituloTelemarketing = "Registro de Inscripciones - Traslado Externo UTEC";
        $subjectTelemarketing = "Registro de Inscripciones - Traslado Externo UTEC";
        $subjectCliente = "Registro de Inscripciones - Traslado Externo UTEC";
        $familia = "TRASLADO EXTERNO";
        $origen = "pagina-inscripcion-traslado-externo";  
    }
}


if($origen == "Charlas informativas" || $origen == "Contacto" || $origen == "Visita Utec" || 
   $origen == "Ven a la UTEC" || $origen == "Trabaja en UTEC")
{
    $fromTelemarketing = "webmaster@utec.edu.pe";
    $fromNameTelemarketing = "UTEC";
    $tituloCliente = "¡Gracias por tu interés en UTEC.!";
    $subjectCliente = "Gracias por tu Interés en UTEC";
    $fromCliente = "informes@utec.edu.pe";
    $fromNameCliente = "Universidad de Ingeniería & Tecnología";


    if($origen == "Charlas informativas")
    {
        $tituloTelemarketing = "Charlas Informativas";
        $subjectTelemarketing = "Charlas Informativas UTEC";
        $subjectCliente = "Charlas Informativas UTEC";
        $familia = "CHARLAS-INFORMATIVAS";
        $origen = "pagina-charlas";
    }

    if($origen == "Contacto")
    {
        $tituloTelemarketing = "Formulario de Contacto - Datos Personales";
        $subjectTelemarketing = "Solicitud - Formulario de Contacto UTEC";
        $familia = "CONTACTO";
        $origen = "pagina-contacto";  
    }

    if($origen == "Visita Utec")
    {
        $tituloTelemarketing = "Formulario de Visita UTEC - Datos Personales";
        $subjectTelemarketing = "Solicitud - Formulario de Visita UTEC";
        $familia = "CONTACTO";
        $origen = "pagina-visita-utec";  
    }

    if($origen == "Ven a la UTEC")
    {
        $tituloTelemarketing = "Formulario de Ven a la UTEC - Datos Personales";
        $subjectTelemarketing = "Solicitud - Formulario de Ven a la UTEC";
        $familia = "CONTACTO";
        $origen = "pagina-ven-a-la-utec";  
    }

    if($origen == "Trabaja en UTEC")
    {
        $tituloTelemarketing = "Formulario de Trabaja en UTEC - Datos Personales";
        $subjectTelemarketing = "Solicitud - Formulario de Trabaja en UTEC";
        $familia = "CONTACTO";
        $origen = "pagina-trabaja-en-utec";  
    }
}


$mensaje_html ="";
$mensaje_html .= '<html><body><table><tr>
        <td colspan="2"><b>'.$tituloTelemarketing.'</b></td>
       </tr>
       <tr>
                            <td>Nombres:</td>
                            <td>'.utf8_decode($_POST['nombres']).'</td>
                         </tr>
                         <tr>
                            <td>Apellido Paterno:</td>
                            <td>'.utf8_decode($_POST['apellidop']).'</td>
       </tr>
       <tr>
                            <td>Apellido Materno:</td>
                            <td>'.utf8_decode($_POST['apellidom']).'</td>
       </tr>
       <tr>
                            <td>G&eacute;nero:</td>
                            <td>'.utf8_decode($_POST['genero']).'</td>
       </tr>
       <tr>
                            <td>Carrera de Interes:</td>
                            <td>'.$carreras[$carrera_elegida].'</td>
       </tr>
       <tr>
                            <td>Tipo de Documento: </td>
                            <td>'.$_POST['tipo-documento'].'</td>
       </tr>    
       <tr>
                            <td>Nro de Documento: </td>
                            <td>'.utf8_decode($_POST['documento']).'</td>
       </tr>
       <tr>
                            <td>Pa&iacute;s de Nacimiento :</td>
                            <td>'.utf8_decode($_POST['pais']).'</td>
       </tr>
       <tr>
                            <td>Ciudad de Nacimiento :</td>
                            <td>'.utf8_decode($_POST['ciudad']).'</td>
       </tr>
       <tr>
                            <td>Fecha de Nacimiento:</td>
                            <td>'.utf8_decode($fecha_n).'</td>
       </tr>
       <tr>
                            <td>Departamento de Nacimiento:</td>
                            <td>'.utf8_decode($_POST['depto']).'</td>
       </tr>
       <tr>
                            <td>Provincia de Nacimiento:</td>
                            <td>'.utf8_decode($_POST['provincia']).'</td>
       </tr>
       <tr>
                            <td>Distrito de Nacimiento:</td>
                            <td>'.utf8_decode($_POST['distrito']).'</td>
       </tr>
       <tr>
                            <td>Direccion Actual:</td>
                            <td>'.utf8_decode($_POST['direccion-actual']).'</td>
       </tr>
       <tr>
                            <td>Correo Electronico:</td>
                            <td>'.utf8_decode($_POST['email']).'</td>
       </tr>
       <tr>
                            <td>1er Nro de Celular:</td>
                            <td>'.$_POST['celular-1'].'</td>
       </tr>
       <tr>
                            <td>2er Nro de Celular:</td>
                            <td>'.$_POST['celular-2'].'</td>
       </tr>
       <tr>
                            <td>Telefono Fijo:</td>
                            <td>'.$_POST['telefono'].'</td>
       </tr>
       <tr>
                            <td>Consulta:</td>
                            <td>'.utf8_decode($_POST['consulta']).'</td>
       </tr>
                         <tr>
                            <td colspan="2"><b>Estudios</b></td> 
                         </tr>
       <tr>
                            <td>A&ntilde;o en que culmino sus estudios secundarios o bachillerato:</td>
                            <td>'.$_POST['ano-culminacion'].'</td>
       </tr>
       <tr>
                            <td>Colegio de Procedencia:</td>
                            <td>'.utf8_decode($_POST['colegio']).'</td>
       </tr>
                         <tr>
                            <td>Departamento del Colegio de Procedencia:</td>
                            <td>'.utf8_decode($_POST['estudios-dpto']).'</td>
       </tr>
                         
                         <tr>
                            <td>Provincia del Colegio de Procedencia:</td>
                            <td>'.utf8_decode($_POST['estudios-provincia']).'</td>
       </tr>
                         <tr>
                            <td>Distrito del Colegio de Procedencia:</td>
                            <td>'.utf8_decode($_POST['estudios-distrito']).'</td>
       </tr>
                         <tr>
                            <td>Rendimiento Academico:</td>
                            <td>'.utf8_decode($_POST['estudios-rendimiento']).'</td>
       </tr>
                         <tr>
                            <td>Es o ha sido estudiante de esta universidad:</td>
                            <td>'.utf8_decode($_POST['estudiante']).'</td>
       </tr>

                         <tr>
                            <td colspan="2"><b>Datos Adicionales</b></td> 
                         </tr>
                         <tr>
                            <td>Fecha de Envio:</td>
                            <td>'.date("d/m/Y").'</td>
       </tr>
                         <tr>
                            <td>Hora de Envio:</td>
                            <td>'.date("h:i:s a").'</td>
       </tr>
                         <tr>
                            <td>IP:</td>
                            <td>'.$_SERVER['REMOTE_ADDR'].'</td>
       </tr>
                         </table>
    </body>
    </html>';


$mail->From     = $fromTelemarketing;
$mail->FromName = $fromNameTelemarketing;
$mail->Host = "545c0f422c16364190cd270f517e9d.mail.outlook.com";
$mail->Subject  = $subjectTelemarketing;
$mail->AltBody  = "Para ver este correo, utilize un visor de correo compatible con HTML"; // optional, comment out and test
$mail->IsHTML(true);
$mail->Body = $mensaje_html;


foreach ( $destinatarios as $destinatario_email => $destinatario_nombre ) {
        $mail->AddAddress( $destinatario_email, $destinatario_nombre );
}
      
$mail->Send();

$mailrpta = utf8_decode($_POST['email']);
$mail_1 = new PHPMailer();
$mail_1->CharSet = 'UTF-8';
$mail_1->From     = $fromCliente;
$mail_1->FromName = $fromNameCliente;
$mail_1->IsHTML(true); 
$mail_1->Host = "545c0f422c16364190cd270f517e9d.mail.outlook.com";
$mail_1->Subject  = $subjectCliente;
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
$contenidorpta.="<p>Hola ".utf8_decode($_POST['nombres']).", </p>
                 <p><h2>".$tituloCliente."</h2>
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

if($origen == "pagina-inscripcion-examen-admision")
{
                $contenidorpta = "";
                $contenidorpta.="<table width='600px' height='168px' cellpadding='2' cellspacing='2' bgcolor='#FFFFFF'>
                <tr><td><p><img src='http://app.utec.edu.pe/admision/img/cabeceraWEB.jpg' alt='cabeceraWEB' usemap='#Map2'>
                  <map name='Map2' id='Map2'>
                    <area shape='rect' coords='3,3,597,86' href='http://www.utec.edu.pe/Utec.aspx' target='_blank' alt='UTEC' />
                  </map>
                </p></td></tr>";

                $contenidorpta.="<p>Hola ".strtoupper($_POST['nombres']).",</p>
                <p><h2>¡Gracias por tu interés en UTEC!</h2>
                <br/> Hemos recibido tus datos correctamente.
                <br />Para completar tu inscripción en el Examen de Admisión, debes seguir estos pasos:</p>";
                
                $contenidorpta.="<p>1. Efectúa el depósito bancario por el Derecho de Inscripción al Concurso de Admisión Ordinario. BCP cuenta corriente soles N° 193-1976235-0-68. El costo es de S/.450. 
                <br/>2. Presenta los siguientes documentos en la Oficina de Admisión:</p>";
                $contenidorpta.="<p><ul><li>Voucher del depósito bancario (o enviar el voucher electrónico al e-mail inscripciones@utec.edu.pe)</li>
                                <li>Certificados originales de estudios de los cinco años de Educación Secundaria</li>
                                <li>Copia del Documento Nacional de Identidad.</li>
                                <li>Dos fotografías actuales, tamaño carné, en fondo blanco.</li>
                                <li>Declaración jurada familiar. <a href='http://www.utec.edu.pe/admision/Documentos%20compartidos/Declaraci%C3%B3n%20Jurada%20Familiar.pdf' target='_blank'>Descargar formato.</a></li>
                                </ul></p>";

                $contenidorpta.="<p>
                 Adicionalmente, en caso hubieras dejado de estudiar tres años o más de haber egresado de la educación secundaria, deberás presentar 
                 certificado original y vigente de antecedentes policiales, penales y judiciales.   
                 </p>";

                $contenidorpta.="<p>Preséntate en nuestra oficina de Admisión (Av. Prolongación San Martín 207, Barranco) con los documentos indicados como requisito de inscripción.</p>";
                $contenidorpta.="<p>¡Éxitos!</p>";
                $contenidorpta.="<p>Comunícate con UTEC más fácil:<br/><a href='http://guia.com.pe/estara/estara_popup.asp?advertiseId=411234&status=P&phone=51013731000&addressId=876727&' target='_blank'><img src='http://app.utec.edu.pe/admision/img/llama_gratis.jpg' alt='LLama gratis'></a></p>";
                //$contenidorpta.="<p>Oficina de Admisión<br /><strong>UTEC -  Universidad de Ingeniería & Tecnología</strong><br />Telf: (511) 373 1000<br />Av. Prolongación San Martín, 207, Barranco<br />informes@utec.edu.pe<br />www.utec.edu.pe</p>";
                $contenidorpta.="<p><img src='http://app.utec.edu.pe/admision/img/logo_utec.jpg' alt='Logo Utec'><br/><b>UTEC - Universidad de Ingeniería & Tecnología</b></p>
                </td></tr>
                </table>";
                
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
}


if($origen == "pagina-inscripcion-alto-rendimiento" || $origen == "pagina-inscripcion-bachillerato")
{
              $contenidorpta = "";
              $contenidorpta.="<table width='600px' height='168px' cellpadding='2' cellspacing='2' bgcolor='#FFFFFF'>

              <tr><td><p><img src='http://app.utec.edu.pe/admision/img/cabeceraWEB.jpg' alt='cabeceraWEB' usemap='#Map2'>
                <map name='Map2' id='Map2'>
                  <area shape='rect' coords='3,3,597,86' href='http://www.utec.edu.pe/Utec.aspx' target='_blank' alt='UTEC' />
                </map>
              </p></td></tr>";

              $contenidorpta.="<p>Hola ".strtoupper($_POST['nombres']).",</p>
              <p><h2>¡Gracias por tu interés en UTEC!</h2>
              <br/> Hemos recibido tus datos correctamente.
              <br />Para completar tu inscripción a la Evaluaci&oacute;n de Alto Rendimiento, debes seguir estos pasos:</p>";
              
              $contenidorpta.="<p>1. Efectúa el depósito bancario por el Derecho de Inscripción a la Evaluación de Alto Rendimiento. BCP cuenta corriente soles N° 193-1976235-0-68. 
                              <br/>2. Presenta los siguientes documentos en la Oficina de Admisión:</p>";
              $contenidorpta.="<p><ul>
                              <li>Voucher del depósito. También puedes enviar el voucher electrónico al e-mail inscripciones@utec.edu.pe</li>
                              <li>Certificados originales de estudios de los cinco años de Educación Secundaria. En caso no hayas culminado tus estudios, puedes presentarlos hasta el 15 de enero de 2015.</li>
                              <li>Copia del Documento Nacional de Identidad.</li>
                              <li>Constancia original que acredite pertenecer al tercio superior de tu promoción con un promedio no menor de 15.</li>
                              <li>Dos fotografías actuales, tamaño carné, en fondo blanco.</li>
                              <li>Resolución del CONADIS que acredite la condición de discapacidad (Sólo aquellos que se presentan por la Modalidad de Discapacitados).</li>
                              </ul></p>";

              $contenidorpta.="<p>
               En caso apliques por la modalidad de Bachillerato Internacional, presentar diploma de Bachillerato Internacional con la obtención de las 
               puntuaciones que se consignan en el siguiente documento: <a href='http://www.utec.edu.pe/admision/Documentos%20compartidos/Bachillerato%20Internacional.pdf' target='_blank'>Bachillerato Internacional.pdf</a>      
               </p>";

              $contenidorpta.="<p>Preséntate en nuestra oficina de Admisión (Av. Prolongación San Martín 207, Barranco) con los documentos indicados como requisito de inscripción.</p>";
              $contenidorpta.="<p>¡Éxitos!</p>";
              $contenidorpta.="<p>Comunícate con UTEC más fácil:<br/><a href='http://guia.com.pe/estara/estara_popup.asp?advertiseId=411234&status=P&phone=51013731000&addressId=876727&' target='_blank'><img src='http://app.utec.edu.pe/admision/img/llama_gratis.jpg' alt='LLama gratis'></a></p>";
              $contenidorpta.="<p><img src='http://app.utec.edu.pe/admision/img/logo_utec.jpg' alt='Logo Utec'><br/><b>UTEC - Universidad de Ingeniería & Tecnología</b></p>
              </td></tr>
              </table>";
              
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
}


if($origen == "pagina-inscripcion-centro-pre")
{
              $contenidorpta.="<table width='600px' height='168px' cellpadding='2' cellspacing='2' bgcolor='#FFFFFF'>

              <tr><td><p><img src='http://app.utec.edu.pe/admision/img/cabeceraWEB.jpg' alt='cabeceraWEB' usemap='#Map2'>
                <map name='Map2' id='Map2'>
                  <area shape='rect' coords='3,3,597,86' href='http://www.utec.edu.pe/Utec.aspx' target='_blank' alt='UTEC' />
                </map>
              </p></td></tr>";

              $contenidorpta.="<p>Hola ".strtoupper($_POST['nombres']).",</p>
              <p><h2>¡Gracias por tu interés en UTEC!</h2>
              <br/> Hemos recibido tus datos correctamente.
              <br />Para completar tu inscripción en el Centro Preuniversitario de UTEC, debes seguir estos pasos:</p>";

              $contenidorpta.="<p>1. Efectúa el depósito bancario por por el pago total del programa o la primera cuota de éste. BCP cuenta corriente soles N° 193-1976235-0-68. 
                              <br/>2. Presenta los siguientes documentos en la Oficina de Admisión:</p>";
              $contenidorpta.="<p><ul>
                              <li>Voucher del depósito por el pago total del programa o la primera cuota de éste. También puedes enviar el voucher electrónico al e-mail inscripciones@utec.edu.pe.</li>
                              <li>Copia del Documento Nacional de Identidad.</li>
                              <li>Dos fotografías actuales, tamaño carné, en fondo blanco.</li>
                              </ul></p>";

              $contenidorpta.="
                  <p>Adicionalmente, en caso hubieras dejado de estudiar tres años o más tras haber egresado del colegio, deberás presentar certificado original y vigente de antecedentes policiales, penales y judiciales.</p>
                  <p>El ingreso a UTEC por esta modalidad de admisión se realiza respetando el número de vacantes dispuesto, y en estricto orden de mérito. El número de vacantes de cada proceso de admisión será informado por la Universidad oportunamente.</p>

                  <p><strong>Condiciones para el ingreso: </strong> </p>
                  <p>Para ingresar bajo esta modalidad, se debe cumplir obligatoriamente, con los siguientes requisitos: </p>
                  
                  <ul>
                     <li >Asistencia m&iacute;nima del 85% durante todo el ciclo acad&eacute;mico.</li>
                     <li >Obtener, como promedio general de todos los cursos, nota final aprobatoria. </li>
                     <li >Obtener una vacante de las dispuestas para esta modalidad de ingreso.</li>
                  </ul>";              
                                  
              //$contenidorpta.="<p>Preséntate en nuestra oficina de Admisión (Av. Prolongación San Martín 207, Barranco) con los documentos indicados como requisito de inscripción.</p>";
              $contenidorpta.="<p>¡Éxitos!</p>";
              $contenidorpta.="<p>Comunícate con UTEC más fácil:<br/><a href='http://guia.com.pe/estara/estara_popup.asp?advertiseId=411234&status=P&phone=51013731000&addressId=876727&' target='_blank'><img src='http://app.utec.edu.pe/admision/img/llama_gratis.jpg' alt='LLama gratis'></a></p>";
              //$contenidorpta.="<p>Oficina de Admisión<br /><strong>UTEC -  Universidad de Ingeniería & Tecnología</strong><br />Telf: (511) 373 1000<br />Av. Prolongación San Martín, 207, Barranco<br />informes@utec.edu.pe<br />www.utec.edu.pe</p>";
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

}


if($origen == "pagina-inscripcion-primeros-puestos")
{
              $contenidorpta = "";
              $contenidorpta.="<table width='600px' height='168px' cellpadding='2' cellspacing='2' bgcolor='#FFFFFF'>

              <tr><td><p><img src='http://app.utec.edu.pe/admision/img/cabeceraWEB.jpg' alt='cabeceraWEB' usemap='#Map2'>
                <map name='Map2' id='Map2'>
                  <area shape='rect' coords='3,3,597,86' href='http://www.utec.edu.pe/Utec.aspx' target='_blank' alt='UTEC' />
                </map>
              </p></td></tr>";
              $contenidorpta.="<tr></td><p>Hola ".strtoupper($_POST['nombres']).",</p><p><h2>¡Gracias por tu interés en UTEC!</h2><br/> Hemos recibido tus datos correctamente.
              <br />Para completar tu inscripción en la modalidad de Primeros Puestos, debes seguir estos pasos:</p>";
              
              $contenidorpta.="<p>1. Efectúa el depósito bancario por el Derecho de Inscripción al Concurso de Primeros Puestos. BCP cuenta corriente soles N° 193-1976235-0-68. El costo es de S/.450.
              <br/>2. Presenta los siguientes documentos en la Oficina de Admisión:</p>";
              $contenidorpta.="<p><ul>
                              <li>Voucher del depósito bancario (o envío del voucher electrónico al e-mail inscripciones@utec.edu.pe).</li>
                              <li>Constancia original que acredite haber obtenido el primero o segundo puesto de tu promoción, con la firma y sello de la dirección del colegio de procedencia, así como de la UGEL correspondiente.</li>
                              <li>Certificados originales de estudios de los cinco años de Educación Secundaria. En caso aún no hayas culminado tus estudios, podrás presentar estos documentos hasta el 15 de enero de 2015.</li>
                              <li>Copia del Documento Nacional de Identidad.</li>
                              <li>Dos fotografías actuales, tamaño carné, en fondo blanco.</li>
                              </ul></p>";

              $contenidorpta.="            
              <p>
               Adicionalmente, en caso hubieras dejado de estudiar tres años o m&aacute;s, o en caso hayas egresado del colegio tres años antes de postular, deber&aacute;s presentar certificado original y vigente de antecedentes policiales, penales y judiciales.            
              </p>";

              $contenidorpta.="<p>Preséntate en nuestra oficina de Admisión (Av. Prolongación San Martín 207, Barranco) con los documentos indicados como requisito de inscripción.</p>";
              $contenidorpta.="<p>¡Éxitos!</p>";

              $contenidorpta.="<p>Comunícate con UTEC más fácil:<br/><a href='http://guia.com.pe/estara/estara_popup.asp?advertiseId=411234&status=P&phone=51013731000&addressId=876727&' target='_blank'><img src='http://app.utec.edu.pe/admision/img/llama_gratis.jpg' alt='LLama gratis'></a></p>";
              //$contenidorpta.="<p>Oficina de Admisión<br /><strong>UTEC -  Universidad de Ingeniería & Tecnología</strong><br />Telf: (511) 373 1000<br />Av. Prolongación San Martín, 207, Barranco<br />informes@utec.edu.pe<br />www.utec.edu.pe</p>";
              $contenidorpta.="<p><img src='http://app.utec.edu.pe/admision/img/logo_utec.jpg' alt='Logo Utec'><br/><b>UTEC - Universidad de Ingeniería & Tecnología</b></p>
              </td></tr>
              </table>";
              
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
}


if($origen == "pagina-inscripcion-traslado-externo")
{

              $contenidorpta = "";
              $contenidorpta.= "<table width='600px' height='168px' cellpadding='2' cellspacing='2' bgcolor='#FFFFFF'>
                               <tr><td><p><img src='http://app.utec.edu.pe/admision/img/cabeceraWEB.jpg' alt='cabeceraWEB' usemap='#Map2'>
                                <map name='Map2' id='Map2'>
                                  <area shape='rect' coords='3,3,597,86' href='http://www.utec.edu.pe/Utec.aspx' target='_blank' alt='UTEC' />
                                </map>
                               </p>";
              $contenidorpta.= "<p>Hola ".strtoupper($_POST['nombres']).",</p>
                               <p><h2>¡Gracias por tu interés en UTEC!</h2>
                               <br/> Hemos recibido tus datos correctamente.
                               <br />Para completar tu postulación bajo la modalidad de traslado, debes seguir estos pasos:</p>";
      
              $contenidorpta.= "<p>1. Efect&uacute;a el dep&oacute;sito bancario por el Derecho de Traslado Externo. BCP cuenta corriente soles N° 193-1976235-0-68. El costo es de S/.580.
                                <br/>2. Presenta los siguientes documentos en la Oficina de Admisión:</p>";
              $contenidorpta.= "<p><ul><li>Voucher del depósito bancario (o envío del voucher electrónico al e-mail inscripciones@utec.edu.pe).</li>
                                      <li>Copia del Documento Nacional de Identidad.</li>
                                      <li>Certificados originales de estudios de los cinco años de Educación Secundaria.</li>
                                      <li>Dos fotografías actuales, tamaño carné, en fondo blanco.</li>
                                      <li>Certificados originales de estudios universitarios y de notas, que acrediten tener por lo menos 36 créditos académicos aprobados en la Universidad de procedencia. 
                                      Sólo se considera los créditos aprobados como alumno regular de pregrado de la Universidad de procedencia, bajo la modalidad presencial.</li>
                                      <li>Sílabos originales sellados y visados por la Universidad de procedencia.</li>
                                      <li>Constancia original de ingreso a la Universidad de procedencia.</li>
                                      <li>Constancia de no haber sido separado de la Universidad de procedencia por medida disciplinaria o asuntos académicos.</li>
                                  </ul></p>";
              
              $contenidorpta.= "<p>En caso hubieras dejado de estudiar tres años o más luego de haber egresado de la educación secundaria deberás presentar certificado original y vigente de antecedentes policiales, penales y judiciales.</p>";
              $contenidorpta.= "<p>Preséntate en nuestra oficina de Admisión (Av. Prolongación San Martín 207, Barranco) con los documentos indicados como requisito de inscripción.</p>";
              $contenidorpta.= "<p>¡Éxitos!</p>";
              $contenidorpta.= "<p>Comunícate con UTEC más fácil:<br/><a href='http://guia.com.pe/estara/estara_popup.asp?advertiseId=411234&status=P&phone=51013731000&addressId=876727&' target='_blank'><img src='http://app.utec.edu.pe/admision/img/llama_gratis.jpg' alt='LLama gratis'></a></p>";
              //$contenidorpta.="<p>Oficina de Admisión<br /><strong>UTEC -  Universidad de Ingeniería & Tecnología</strong><br />Telf: (511) 373 1000<br />Av. Prolongación San Martín, 207, Barranco<br />informes@utec.edu.pe<br />www.utec.edu.pe</p>";
              $contenidorpta.= "<p><img src='http://app.utec.edu.pe/admision/img/logo_utec.jpg' alt='Logo Utec'><br/><b>UTEC - Universidad de Ingeniería & Tecnología</b></p>
                                </td></tr>
                               </table>";

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

}


$mail_1->Body = $contenidorpta;
$mail_1->Send();


//consumir web service:
$client = new nusoap_client( "http://app.utec.edu.pe/inscripcionutecws3/services/InscripcionServicePort?wsdl", true ); 

$programacion = "2015-1";

$v0 = $familia;
$v1 = utf8_decode($_POST['nombres']);
$v2 = utf8_decode($_POST['apellidop']);
$v3 = utf8_decode($_POST['apellidom']);
$v4 = utf8_decode($_POST['tipo-documento']);
$v5 = utf8_decode($_POST['documento']);
$v6 = utf8_decode($_POST['genero']);
$v7 = utf8_decode($carreras[$carrera_elegida]);
$v8 = "-"; //utf8_decode($_POST['carrera2']);
$v9 = utf8_decode($_POST['pais']);
$v10 = utf8_decode($_POST['ciudad']);
$v11 = $_POST['dia'];
$v12 = $_POST['mes'];
$v13 = $_POST['ano'];
$v14 = utf8_decode($_POST['depto']);
$v15 = utf8_decode($_POST['provincia']);
$v16 = utf8_decode($_POST['distrito']);
$v17 = utf8_decode($_POST['direccion-actual']);
$v18 = utf8_decode($_POST['email']);
$v19 = $_POST['celular-1'];
$v20 = $_POST['celular-2'];
$v21 = $_POST['telefono'];
$v22 = $_POST['ano-culminacion'];
$v23 = utf8_decode($_POST['colegio']);
$v24 = utf8_decode($_POST['estudios-rendimiento']);
$v25 = $_SERVER['REMOTE_ADDR']; 
$v26 = "0";
$v27 = utf8_decode($_POST['estudiante']);
$v28 = "";
$v29 = "";
$v30 = "";
$v31 = "";
$v32 = "";
$v33 = "";
$v34 = utf8_decode($_POST['carrera']);
$v35 = $programacion;
$v36 = utf8_decode($_POST['consulta']);
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