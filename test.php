<?php
$to      = 'sandeepv68@gmail.com';
$subject = 'Test ';
$message = 'hello This is a test message ';
$headers = 'From: sandeep@codelarva.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
//phpinfo();
?>