<html lang="en" >
  <head>
	<?php include 'meta.php';?>
	<title>Movies</title>
	<!---movie element-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
	<link rel="stylesheet" href="css/movies/style.css">
	<link rel="stylesheet" href="css/movies/movies.css">
	<link rel="stylesheet" href="css/movies/movies_single.css">
  </head>
	<?php include 'header.php';?>
  <body>
		<?php include 'yts.php';?>
	<div class="content">
			<div class="top-head"></div>
	</div>  
			<!--------------------------Extra--------------------------->
		<!-----------------------Movies Start---------------------------->
				  
		<?php   if (!empty($title1)) {
			$countresults = sizeof($movies); $countresults = $countresults-1; // -1 because if loop is starting from zero 
			for ($y = 0; $y <= $countresults; $y++) {
				echo '
					<div class="content">
						<iframe class="iframe_streaming" sandbox = "allow-forms allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation" src="webtor_player.php?magnet_uri='.$magnet_link1[$y].'&images_uri='.$image_url[$y].'" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				';						
				} } else { echo '<script>window.location.href = "search_engine.php?search='.$query_term.'";</script>' ; }
					  ?>
  </body>
</html>