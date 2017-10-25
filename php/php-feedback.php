<?php
	$name = htmlspecialchars ($_POST ["name"]);
	$email = htmlspecialchars ($_POST ["email"]);
	$subject = htmlspecialchars ($_POST ["subject"]);
	$message = htmlspecialchars ($_POST ["message"]);

	$to = "sweetmybox@ukr.net";
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";

	$headers = "From: $name"." <"."$email".">"."\r\n";
	$headers .= "Reply-to: $email"."\r\n";
	$headers .= "MIME-Version: 1.0"."\r\n";
	$headers .= "Content-type: text/plain; charset = utf-8"."\r\n";
	$headers .= "X-Priority: 1"."\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion ();

	if (mail ($to, $subject, $message, $headers)) {
		echo "Done";
	} else {
		echo "Error";
	}

?>