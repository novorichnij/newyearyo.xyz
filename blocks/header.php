<?php
	session_start ();
?>

<header id = "header">
	<div id = "header-main">
		<a href = "/" id = "logo">
				<img src = "img/logo.jpg" class = "avatar"> </a>

		<a href = "/" title = "Main" id = "avatar"> 
			<span class = "site-title">Newyearyo</span> </a>

		<nav id = "main-nav">
			<a class = "main-nav-link" id = "avatar-clone" href = "/" title = "Main" style = "display: none"> 
				<div> Home </div> </a>
			<a class = "main-nav-link" href = "mirzalizadet.php" title = "Mirzalizade T."> 
				<div> Mirzalizade T.</div> </a> 
			<a class = "main-nav-link" href = "about.php" title = "About"> 
				<div> About </div> </a> 
			<a class = "main-nav-link" href = "feedback.php" title = "Feedback">
				<div> Feedback </div> </a> 
			<?php if (isset ($_SESSION ["logged_user"])) : ?>
				<a class = "main-nav-link" id = "logout" href = "../php/php-logout.php" title = "LogOut"> 
					<div> LogOut </div> </a>
			<?php else : ?>			
				<a class = "main-nav-link" id = "loginsignup" href = "loginsignup.php" title = "LogIn/SignUp"> 
					<div> LogIn/SignUp </div> </a> 
			<?php endif; ?>
			 

		</nav>

		<div class = "go-to-top" title = "Go to top"> <i class="fa fa-chevron-up" aria-hidden="true"> </i></div>

		<nav id = "twitter">
			<a href = "https://twitter.com/novo_Orichnij" target="_blank">
				<img src = "img/avatar.jpg" class = "avatar">
			</a>
		</nav>

		<div id = "search">
			<form action="//google.com/search" method = "get" accept-charset = "UTF-8" class = "search-form">
				<input type = "search" name = "q" results = "0" class = "search-form-input" placeholder = "Search">
				<button type = "submit" class = "search-form-submit"></button>
			</form>
		</div>
	</div>
</header>