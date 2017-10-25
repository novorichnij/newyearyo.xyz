<?php
	require_once 'session.php';
	/*require 'rb.php';
	R::setup ("mysql:host=localhost;dbname=newyearyo","root","");*/

	$data = $_POST;

	if (isset ($data ["signup-login"])) {
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
		};



	} else if (isset ($data ["login-login"])) {

		$user = R::findOne ("users", "login = ?", array ($data ["login-login"]));
		if ($user) {
			if (password_verify ($data ["login-password"], $user->password)) {
				$_SESSION ["logged_user"] = $user;
			} else {
				echo "Incorrect password";
			}
		} else {
			echo "Login not found";
		};

	};
?>