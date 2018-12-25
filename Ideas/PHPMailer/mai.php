<?php

function sendnewmail($msgnew,$emailidnew,$subjectnew)

{

       require_once("class.phpmailer.php");

       require_once("class.smtp.php");

       $mail = new PHPMailer();


       $mail->IsSMTP();     // set mailer to use SMTP

       $mail->Host = "smtp.gmail.com"; // specify main and backup server

       $mail->SMTPAuth = true;     // turn on SMTP authentication

       $mail->Username ="venkyrandy@gmail.com";  // SMTP username

       $mail->Password ="MAHESHRKO"; // SMTP password


       $mail->From = "venkyrandy@gmail.com";

       $mail->FromName = "Venkatesh";

       $mail->AddAddress("dearvenkym@gmail.com","venky");

       //$mail->AddAddress("ellen@example.com");                  // name is optional

       //$mail->AddReplyTo("info@example.com", "Information");


       $mail->WordWrap = 50;                                 // set word wrap to 50 characters

       //$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments

       //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name

       $mail->IsHTML(true);                                  // set email format to HTML

       $mail->SMTPDebug  = 2;

       $mail->Subject = "hi";

       $mail->Body    = "dear";

       //$mail->AltBody = "This is the body in plain text for non-HTML mail clients";


       if(!$mail->Send())

       {

         echo "Message could not be sent. <p>";

          echo "Mailer Error: " . $mail->ErrorInfo;

          exit;

       }


}

$htmldetails ="Welcome to HostingRaja";

$email = "demotesthostingraja@gmail.com";

$subject = "Sample welcome message";

sendnewmail($htmldetails,$email,$subject);


?>