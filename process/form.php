<?php
//if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action'])))
//{
	if (isset($_POST['names'])) 
	{ 
	$name = $_POST['names']; 
	}
	if (isset($_POST['email'])) 
	{ 
	$email = $_POST['email']; 
	}
	if (isset($_POST['textarea1'])) 
	{
	$message = filter_var($_POST['textarea1']); 
	}
	$to			= 		"sandeepv68@gmail.com";
	$subject	=		"Message by" .$name. "from CodeLarva Technologies";
	$messages	=		$message;

	$headers	=		"From: visitor@codelarva.com \r\n".
						"Reply-To: do-not-reply@codelarva.com \r\n";
mail($to, $subject, $messages);
header("Location:../index.php");//if success	
//}
?>