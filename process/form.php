<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

	if (isset($_POST['name'])) { $name = $_POST['name']; }
	if (isset($_POST['email'])) { $email = $_POST['email']; }
	if (isset($_POST['message'])) {
			$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING ); 
	}
	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($message,70);
  $formdata = array (
    'name' => $name,
    'email' => $email,
    'message' => $msg
  );
		$to			= 		"sandeepv68@gmail.com";
		$subject	=		"Message from $name";
		$messages	=		json_encode($formdata);
		$headers = 'From: www.codelarva.com' . "\r\n" .
					'Reply-To: codelarav@gmail.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $messages, $headers);

endif; //form submitted
header("Location:../index.html");//if success
?>
