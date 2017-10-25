<?php

	// плдключение к базе
	$link = mysqli_connect ("localhost", "u9904193_new", "00000000", "u9904193_newyearyousers") or die(mysqli_error ($link));

	// функция проверки логина или email как зарегистрированных
	function check ($column, $value) {
		global $link;
		$select = "SELECT $column FROM users";
		$values = mysqli_query ($link, $select)
			or die (mysqli_error ($link));
		$arrayValues = array ();
		if ($values) {
			while ($row = mysqli_fetch_row ($values)) {
				$arrayValues [] = $row [0];
			}
		};
		if (in_array ($value, $arrayValues)) {
			return true;
		} else {
			return false;
		};
	};

	// данные
	$login = $_POST ["signup-login"];
	$email = $_POST ["signup-email"];
	$password = password_hash ($_POST ["signup-password"], PASSWORD_DEFAULT);

	// для отправки данных на почту
	$to = $email;
	$fromName = "NEWYEARYO, BITCH";
	$fromEmail = "sweetmybox@gmail.com";
	$subject = "=?utf-8?B?".base64_encode ("Registration with your sister")."?=";
	$message = "login: ". $login . "\n" . "password: " . $_POST ["signup-password"];
	$headers = "From: $fromName"." <"."$fromEmail".">"."\r\n";
	$headers .= "Reply-to: $fromEmail"."\r\n";
	$headers .= "MIME-Version: 1.0"."\r\n";
	$headers .= "Content-type: text/plain; charset = utf-8"."\r\n";
	$headers .= "X-Priority: 1"."\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion ();

	// внесение в данных базу
	if (check ("login", $login)) {
		echo "This login was registered";
	} else if (check ("email", $email)) {
		echo "This email was registered";
	} else {
		$strSQLi = "INSERT INTO users (login, email, password, data) VALUES ('".$login."', '".$email."', '".$password."', '".time ()."')";
		mysqli_query ($link, $strSQLi) or die (mysqli_error ($link));
		mysqli_close ($link);		

		mail ($to, $subject, $message, $headers);

	};





/*    PDO + redbeanphp.com

	require_once '../libs/rb.php';
	R::setup ("mysql:host=localhost;dbname=newyearyo","root","");

	$data = $_POST;

	if (R::count("users", "login = ?", array ($data ["signup-login"])) > 0) {
		echo "This login was registered";
	} else if (R::count("users", "email = ?", array ($data ["signup-email"])) > 0) {
		echo "This email was registered";
	} else {
		$user = R::dispense ("users");
		$user->login = $data ["signup-login"];
		$user->email = $data ["signup-email"];
		$user->password = password_hash ($data ["signup-password"], PASSWORD_DEFAULT);
		$user->date = time ();
		R::store ($user);
	};*/


?>




