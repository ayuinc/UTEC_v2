<?php

include_once( 'viacloset/includes/PHPMailer/class.phpmailer.php' );
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer();

if ( EMAIL_HEADER_EOL == 'LF' ) {
	$mail->LE = "\n";
} elseif ( EMAIL_HEADER_EOL == 'CRLF' ) {
	$mail->LE = "\r\n";
}

if ( EMAIL_SMTP == "Y" ) {
	
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host = SMTP_SERVER; // SMTP server
	
	//Le indicamos que el servidor smtp requiere autenticación
	$mail->SMTPAuth = true;
	
	//Le decimos cual es nuestro nombre de usuario y password
	$mail->Username = SMTP_USUARIO; 
	$mail->Password = SMTP_PASSWORD;
	
}
