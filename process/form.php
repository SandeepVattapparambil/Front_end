<?php
/*if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"]))//checks whether form data is set already?
{
	if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"]))//checks whether form data is empty?
	{
		$name = $_POST["name"];//Name of visitor
		$visitor_email = $_POST["email"];//Email id of visitor
		$in_message = $_POST["message"];//Message from visitor
		$message = wordwrap($in_message, 70);//Message from visitor wordwrapped for mail function
		$to_master = "sandeepv68@gmail.com";//Master Email id
		$subject = "Message from site visitor -".$name."!";//Subject for master mail
		$headers = "From: ".$name.", ".$visitor_email."\n";//Header for master mail
		$site_subject = "From sandeepv.co.nr !";//Subject for visitor mail
		$userheaders = "From: ".$to_master." @ www.sandeepv.co.nr\n";//Header for visitor mail
		$usermessage = "Thank you for your support !.\n";//Message for visitor mail
		$me = mail($to_master,$subject,$message,$headers);//to master
		$you = mail($visitor_email,$site_subject,$usermessage,$userheaders);//to visitor
		header("Location:../index.php");//if success
	}
}*/
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
