<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

	if (isset($_POST['name'])) { $name = $_POST['name']; }
	if (isset($_POST['email'])) { $email = $_POST['email']; }
	if (isset($_POST['message'])) {
			$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING ); 
	}

  $formdata = array (
    'name' => $name,
    'email' => $email,
    'message' => $message
  );
		$to			= 		"sandeepv68@gmail.com";
		$subject	=		"From $name";
		$messages	=		json_encode($formdata);

		$replyto	=		"From: fromprocessor@iviewsource.com \r\n".
									"Reply-To: donotreply@iviewsource.com \r\n";

		mail($to, $subject, $messages);

endif; //form submitted
header("Location:../index.html");//if success
?>
