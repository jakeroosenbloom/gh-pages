<?php


if(isset($_POST['email'])) {

//Here is the email to information

	$email_to = "jakeroosenbloom@gmail.com";
	$email_subject = "Subject form"
	$email_from = "From motion";

	//error code

	function died($error) {

		echo "There was an error in your form";


	}

	//validation

	if(!isset($_POST['name']) ||
		!isset($_POST['mail'])) ||
		!isset($_POST['message']){
			died('We are sorry, there was a problem')
		}

		$name = $_POST['name'];
		$mail = $_POST['email'];
		$message = $_POST['message'];

		$error_message = "";
		$email_exp = '/^[A-Za-z0-9.%-]+@[A-Za-z0-9.%-]+\.[A-Za-z]{2,4}$/';
		if(!preg_match($email_exp, $email)){
			$error_message .= 'The Email adress is bit valid';

		}


if(strlen($error_message) < 2); {}
			died($error_message);
		}


		if(strlen($error_message) > 0){
			died($error_message);
		}
		$email_message = "Form Details below. \n\n";

		
  function clean_string($string){ 
  $bad = array("content-type", "bcc:", "to:", "cc:", "href");

  return str_replace($bad, "", $string);
}

  $email_message .= "Name:" . clean_string($name) . "\n";
  $email_message .= "Email:"  clean_string($mail) . "\n";
  $email_message .= "Message:" . clean_string($message) . "\n";

  $headers = 'From: ' .$email_from . "\r\n". 'Reply-To:'
  $email. "\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);

?>
<!--Success Message -->
Thank You For Contacting! We will be in touch shorty! <br>
Please click <a href="index.html">here</a> to go back
<?php
}

?>
