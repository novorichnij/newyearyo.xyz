<?php
	// плдключение к базе
	$link = mysqli_connect ("localhost", "u9904193_new", "00000000", "u9904193_newyearyousers") or die(mysqli_error ($link));

	session_start ();

	// функция проверки логина или email как зарегистрированных
	function checkLogin ($column, $value) {
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

	// функция вывода хэша пароля из бд
	function checkPassword ($login) {
		global $link;
		$select = "SELECT password FROM users WHERE login = '$login'";
		$pass = mysqli_query ($link, $select) or die (mysqli_error ($link));
		$array = mysqli_fetch_array ($pass);
		return $array [0];
	};


	$login = $_POST ["login-login"];
	$password = $_POST ["login-password"];

	if (checkLogin ("login", $login)) {
		if (password_verify ($password, checkPassword ($login))) {
			$_SESSION ["logged_user"] = $login;
		} else {
			echo "Incorrect password";
		}
	} else {
		echo "Login not found";
	};

	mysqli_close ($link);



/*    PDO + redbeanphp.com

	require_once '../libs/rb.php';
	R::setup ("mysql:host=localhost;dbname=newyearyo","root","");
	session_start ();

	$data = $_POST;

	$user = R::findOne ("users", "login = ?", array ($data ["login-login"]));
	if ($user) {
		if (password_verify ($data ["login-password"], $user->password)) {
			$_SESSION ["logged_user"] = $user;
		} else {
			echo "Incorrect password";
		}
	} else {
		echo "Login not found";
	};*/

?>