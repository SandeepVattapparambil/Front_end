<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action'])))
{
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
	$to			= 		"sandeepv68@gmail.com";
	$subject	=		"Message by" .$name. "from CodeLarva Technologies";
	$messages	=		$message;

	$headers	=		"From: visitor@codelarva.com \r\n".
								"Reply-To: do-not-reply@codelarva.com \r\n";

	if(mail($to, $subject, $messages, $headers))
	{
		header("Location:../index.php?g=1");//if success
	}
	else
	{
		header("Location:../index.php?g=0");//if failed
	}
}
?>