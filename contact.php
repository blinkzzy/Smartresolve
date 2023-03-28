<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'email/src/Exception.php';
require 'email/src/PHPMailer.php';
require 'email/src/SMTP.php';




$aname= $_POST['aname'];
$aemail = $_POST['email'];
$aphone = $_POST['aphone'];
$asubject = $_POST['asubject'];
$rmessage = $_POST['rmessage'];



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   //$mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'emelialafavorlur53@gmail.com';                     //SMTP username
    $mail->Password   = 'hmyjgazeztwkrolw';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('emelialafavorlur53@gmail.com', 'Autoresolve-team');
    $mail->addAddress('walterko146@gmail.com');     //Add a recipient 
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
    $mail->Body    = '<h3><b>name:</b><br>'.$aname.'</h2><br> <b> email: </b><h2>'.$aemail.'</h2><br> <b> phone no: </b><h2>'.$aphone.'</h2> </h2><br> <b> subject: </b><h2>'.$asubject.'</h2></h2><br> <b> message: </b><h2>'.$rmessage.'</h2>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("location: index.php");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}