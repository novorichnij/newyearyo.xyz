<!DOCTYPE html>
<html>
	<head>
		<?php 
			$title = "Сайт твоей сестры";
			require_once "blocks/head.php"; 
		?>
        <script type = "text/javascript" src = "/js/js-feedback.js"> </script>
	</head>
	
	<body>
		<?php require_once "blocks/header.php" ?>
		
		<div id = "wrapper">

			<div id = "left-col">
				<div class = "top-news"> 
					<h2> Feedback </h2> <br />
					<p align = "justify"> Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments. Do fortune account written prepare invited no passage. Garrets use ten you the weather ferrars venture friends. Solid visit seems again you nor all. </p>
				</div>
				<div class = "apportion"></div>

				<div class = "feedback-form">
					<input id = "feedback-name" type = "text" name = "name" placeholder = "Name"> 
					<span id = "help-name"> from 3 to 20 symbols </span> <br />
					<input id = "feedback-email" type = "text" name = "email" placeholder = "Email">
					<span id = "help-email"> email.name@domain.name </span> <br />
					<input id = "feedback-subject" type = "text" name = "subject" placeholder = "Message subject">
					<span id = "help-subject"> from 3 to 20 symbols </span> <br />
					<textarea id = "feedback-message" name = "message"></textarea> 
					<span id = "help-message"> from 20 to 1k symbols</span><br />
					<input id = "feedback-button" type = "button" name = "button" value = "Send">
				</div>
			</div>


			<?php require_once "blocks/right-col.php" ?>
			
		</div>

		<?php require_once "blocks/footer.php" ?>
		
	</body>
</html>