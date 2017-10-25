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
					<h2> Mirzalizade Technology </h2> <br />
					<div class = "apportion"></div>					

					<div id="disqus_thread"></div>
					<script>
						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://newyearyo-xyz.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>



				</div>
			</div>


			<?php require_once "blocks/right-col.php" ?>
			
		</div>

		<?php require_once "blocks/footer.php" ?>
		
	</body>
</html>