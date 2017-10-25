<!DOCTYPE html>
<html>
	<head>
		<?php 
			$title = "Сайт твоей сестры";
			require_once "blocks/head.php";

		?>
	</head>
	
	<body>
		<?php require_once "blocks/header.php" ?>
		
		<div id = "wrapper">

			<div id = "left-col">
				<div class = "top-news"> 
					<h2> Authorization </h2>
				</div>
				<div class = "apportion"></div>

				<div id = "loading" style = "display: none;"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>

				<div id = "authorization"> 

					<div id = "authorization-tab">
						<input type = "button" name = "tab-login" value = "Log In">
						<input class = "tab-noactiv" type = "button" name = "tab-signup" value = "Sing Up">
					</div>

					<div class = "authorization-form">
						<div id = "authorization-form-login">
							<input id = "login-login" type = "text" name = "login-login" placeholder = "Login"> 
							<span id = "help-login"> from 4 to 20 symbols </span> <br />
							<input id = "login-password" type = "password" name = "login-password" placeholder = "Password">
							<span id = "help-password"> from 8 to 20 symbols </span> <br />
							<input id = "login-button" type = "button" name = "login-button" value = "Log In">
						</div>

						<div id = "authorization-form-signup">
							<input id = "signup-login" type = "text" name = "signup-login" placeholder = "Login"> 
							<span id = "help-login-singup"> from 4 to 20 symbols </span> <br />
							<input id = "signup-email" type = "text" name = "signup-email" placeholder = "Email"> 
							<span id = "help-email-singup"> email.name@domain.name </span> <br />
							<input id = "signup-password" type = "password" name = "signup-password" placeholder = "Password">
							<span id = "help-password-singup"> from 8 to 20 symbols </span> <br />
							<input id = "signup-password2" type = "password" name = "signup-password2" placeholder = "Confirm password">
							<span id = "help-password-singup2"> different passwords </span> <br />
							<input id = "signup-button" type = "button" name = "signup-button" value = "Sign Up">
						</div>											
					</div>					
				</div>	
			</div>

			<?php require_once "blocks/right-col.php" ?>
			
		</div>

		<?php require_once "blocks/footer.php" ?>
		
	</body>
</html>