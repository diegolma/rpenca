<?php
require "vendor/autoload.php";
require_once "clases/usuario.php";

class Utils{

	public function enviarEmail($email,$nombre_completo){

		//Create a new PHPMailer instance
		$mail = new PHPMailer;

		//Tell PHPMailer to use SMTP
		$mail->isSMTP();

		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;

		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';

		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';

		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;

		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';

		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;

		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "notifpenca@gmail.com";

		//Password to use for SMTP authentication
		$mail->Password = "USER1234";

		//Set who the message is to be sent from
		$mail->setFrom('notifpenca@gmail.com', 'Penca App');

		//Set an alternative reply-to address
		$mail->addReplyTo('notifpenca@gmail.com', 'Penca App');

		//Set who the message is to be sent to
		$mail->addAddress($email, $nombre_completo);

		//Set the subject line
		$mail->Subject = 'Welcome';

		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
		$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';

		
		//send the message, check for errors
		if (!$mail->send()) {
		    //echo "Mailer Error: " . $mail->ErrorInfo;
		    $res=false;
		} else {
		    //echo "Message sent!";
		    $res=true;
		}	


		return $res;

		}	

	public function contactar($nombre,$apellido,$email,$phone,$contenido){


		//Create a new PHPMailer instance
		$mail = new PHPMailer;

		//Tell PHPMailer to use SMTP
		$mail->isSMTP();

		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;

		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';

		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';

		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;

		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';

		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;

		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "notifpenca@gmail.com";

		//Password to use for SMTP authentication
		$mail->Password = "USER1234";

		//Set who the message is to be sent from
		$mail->setFrom($email);

		//$mail->FromName($nombre." ".$apellido);

		//Set an alternative reply-to address
		$mail->addReplyTo('notifpenca@gmail.com', 'Penca App');

		//Set who the message is to be sent to
		$mail->addAddress($mail->Username);

		//Set the subject line
		$mail->Subject = "Consulta de ".$nombre." ".$apellido."";

		$mail->Body=$contenido."<br>Teléfono de contacto: ".$phone."<br>Email de contacto: ".$email;

		$mail->AltBody = 'This is a plain-text message body';

		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;		    
		}
	}	

	public static function reseteo($email){
		$shamail=sha1($email);
		$hola=new DateTime();
		$now=$hola->getTimestamp();

		$a='http://localhost/penca/trunk/restaurar.php?usr='.$shamail.'&dt='.$now.'&dte='.sha1($now);
		//Create a new PHPMailer instance
		$mail = new PHPMailer;

		//Tell PHPMailer to use SMTP
		$mail->isSMTP();

		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;

		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';

		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';

		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;

		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';

		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;

		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "notifpenca@gmail.com";

		//Password to use for SMTP authentication
		$mail->Password = "USER1234";

		//Set who the message is to be sent from
		$mail->setFrom("notifpenca@gmail.com");

		//Set who the message is to be sent to
		$mail->addAddress($email);

		$mail->Subject = "Restablecer contraseña de Penca";

		$usr=new Usuario();
		$usr=$usr->obtenerPorId($usr->existe($email));

		$mensaje="Estimado/a ".$usr->getName()."\nNos alegramso de que te vuelvas a conectar a La Penca. \nPara restablecer tu contraseña simplemente has clic en el link que te dejamos más abajo dento de las siguientes dos horas. En caso de que no hayassolicitado restablecerla, por favor ignora este mensaje.\n\n".$a."\n\nEste mensaje se ha enviado automáticamente por el sistema de La Penca desde una cuenta no monitorizada. Agradecemos no responda este mensaje.";

		$mail->Body=$mensaje;

		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;		    
		}
	}
}
?>