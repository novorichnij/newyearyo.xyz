<!DOCTYPE html>
<html>
	<head>
		<?php 
			$title = "Сайт твоей сестры";
			require_once "blocks/head.php"; 
		?>
		<link href = "/css/style1-teaser.css" rel = "stylesheet" type = "text/css">
	</head>
	
	<body>
		<?php require_once "blocks/header.php" ?>
		
		<div id = "wrapper">

			<div id = "left-col">
				

				<dir class = "teaser-input">
					<h3> &nbsp <i class="fa fa-address-card-o" aria-hidden="true"></i> &nbsp Adding a teaser </h3>
					<input id = "teaser-img" type = "file" name = "teaser-img" enctype = "multipart/form-data">
					<input id = "teaser-text" type = "text" name = "teaser-text" placeholder = "Text">
					<input id = "teaser-link" type = "text" name = "teaser-link" placeholder = "Link">
					<input id = "teaser-group" type = "text" name = "teaser-group" placeholder = "Group">
					<input id = "add-button" type = "button" name = "add-button" value = "Add to base">

				</dir>

























			</div>


			<?php require_once "blocks/right-col.php" ?>
			
		</div>

		<?php require_once "blocks/footer.php" ?>
		
	</body>
</html>