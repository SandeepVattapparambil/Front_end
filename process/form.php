<?php
   /* $toEmail = "sandeepv68@gmail.com";
    $mailHeaders = "From:codelarva@codelarva.com";
	$subject = "Message by ". $_POST["userName"] ." from CodeLarva.com";
    if(mail($toEmail, $subject, $_POST["content"], $mailHeaders)) 
	{
        //print "<p class='success'>Mail Sent.</p>";
		header("location:../index.php");
    } else 
	{
        //print "<p class='Error'>Problem in Sending Mail.</p>";
		header("location:../index.php");
    }
/*/	
$name = $_POST["userName"];	
$email = $_POST["userEmail"];
$message = $_POST["content"];
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sandeepv68@gmail.com';                 // SMTP username
$mail->Password = 'sandeep&sreedevi';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'sandeepv68@gmail.com';
$mail->FromName = 'Sandeep Vattapparambil/';
$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('no-reply@codelarva.com', 'No-reply');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

///$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
///$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Visitor at CodeLarva.com';
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
	header("location:../index.php");
}
?>