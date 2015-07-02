<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action'])))

	if (isset($_POST['name'])) 
	{ 
	$name = $_POST['name']; 
	}
	if (isset($_POST['email'])) 
	{ 
	$email = $_POST['email']; 
	}
	if (isset($_POST['message'])) 
	{
			$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING ); 
	}	

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom($name);
//Set an alternative reply-to address
$mail->addReplyTo('noreply@codelarva.com', 'CodeLarva Technologies');
//Set who the message is to be sent to
$mail->addAddress('sandeepv68@gmail.com', 'Sandep Vattapparambil');
//Set the subject line
$mail->Subject = 'Message by' .$name. 'CodeLarva.com';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->msgHTML($message);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    header("location:../index.html?q=0");//echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header("location:../index.html");//echo "Message sent!";
}
?>