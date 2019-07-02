<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_form = 'lfcirewolede-ilorin.com';

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";

	$to = "kaytemzy@gmail.com";

	$headers = "For: $email_form \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	Mail($to,$email_subject,$email_body,$headers);


/*
if (mail($to,$email_subject,$email_body,$headers);){
	
} else {
	echo "alert('"kindly Consult Sic Kaynet"')"
}
*/

	header("Location: index.php?message-sent-success");	


?>