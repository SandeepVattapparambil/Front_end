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

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "email@gmail.com";
$mail->Password = "password";
$mail->SetFrom("example@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("email@gmail.com");
 if(!$mail->Send())
    {
    echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
    echo "Message has been sent";
    }
?>