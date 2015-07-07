<?php
 $toEmail = "sandeepv68@gmail.com";
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
?>