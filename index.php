<!DOCTYPE html>
<html>
	<head>
		<?php 
			$title = "Сайт твоей сестры";
			require_once "blocks/head.php"; 
		?>
		<script type = "text/javascript" src = "/js/js-slider.js"> </script>
	</head>
	
	<body>
		<?php require_once "blocks/header.php" ?>
		
		<div id = "wrapper">

			<div id = "left-col">
				<div class = "top-news"> 
					<div class = "slider-block">
						<div class = "prev-slide"> <a href = "#"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </a></div>
						<div class = "next-slide"> <a href = "#"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></div>
						<nav class = "nav-slider">
							<div class = "button-slide">1</div>
							<div class = "button-slide">2</div>
							<div class = "button-slide">3</div>
							<div class = "button-slide">4</div>
							<div class = "button-slide">5</div>
						</nav>
						<div class = "slider">
							<div class = "slide"> <img  src = "img/pic-main.jpg"> 
								<a class = "link-slide" href = "#"> the first link to your mother </a> </div>
							<div class = "slide"> <img  src = "img/pic-one.jpg">
								<a class = "link-slide" href = "#"> the second link to your mother </a> </div>
							<div class = "slide"> <img  src = "img/pic-two.jpg">
								<a class = "link-slide" href = "#"> the third link to your mother </a> </div>
							<div class = "slide"> <img  src = "img/pic-three.jpg">
								<a class = "link-slide" href = "#"> the fourth link to your mother </a> </div>
							<div class = "slide"> <img  src = "img/pic-four.jpg">
								<a class = "link-slide" href = "#"> the fifth link to your mother </a> </div>
						</div>
					</div>
				</div>
				
				<div class = "apportion"></div> 
				<div class = "clear"></div>

				<div class = "news-one">
					<img src="img/pic-one.jpg"> 
					<h2> Magic City </h2>
					<p align = "justify"> <a href = "https://www.google.com.ua/search?q=%D0%BA%D0%B5%D0%BA" target="_blank" > Neat own </a> nor she said see walk. And charm add green you these. Sang busy in this drew ye fine. At greater prepare musical so attacks as on distant. Improving age our her cordially intention. </p>
					<div class = "apportion"></div>
				</div>

				<div class = "news-two">
					<img src="img/pic-two.jpg"> 
					<h2> Magic City </h2>
					<p align = "justify"> <a href = "https://www.google.com.ua/search?q=%D0%BA%D0%B5%D0%BA" target="_blank" > Neat own </a> nor she said see walk. And charm add green you these. Sang busy in this drew ye fine. At greater prepare musical so attacks as on distant. Improving age our her cordially intention. </p>
					<div class = "apportion"></div>
				</div>

				<div class = "news-three">
					<img src="img/pic-three.jpg"> 
					<h2> Magic City </h2>
					<p align = "justify"> <a href = "https://www.google.com.ua/search?q=%D0%BA%D0%B5%D0%BA" target="_blank" > Neat own </a> nor she said see walk. And charm add green you these. Sang busy in this drew ye fine. At greater prepare musical so attacks as on distant. Improving age our her cordially intention. </p>
					<div class = "apportion"></div>
				</div>

				<div class = "news-four">
					<img src="img/pic-four.jpg"> 
					<h2> Magic City </h2>
					<p align = "justify"> <a href = "https://www.google.com.ua/search?q=%D0%BA%D0%B5%D0%BA" target="_blank" > Neat own </a> nor she said see walk. And charm add green you these. Sang busy in this drew ye fine. At greater prepare musical so attacks as on distant. Improving age our her cordially intention. </p>
					<div class = "apportion"></div>
				</div>

			</div>


			<?php require_once "blocks/right-col.php" ?>
			
		</div>

		<?php require_once "blocks/footer.php" ?>
		
	</body>
</html>