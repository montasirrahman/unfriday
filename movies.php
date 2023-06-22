<html lang="en" >
	<?php error_reporting(0); ?>
  <head>
	<?php include 'meta.php';?>
	<title>Movies</title>
	<!---movie element-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
	<link rel="stylesheet" href="css/movies/style.css">
	<link rel="stylesheet" href="css/movies/movies.css">
  </head>
	<?php include 'header2.php';?>
  <body>
		<?php include 'yts.php';?>
	<div class="content">
			<div class="top-head"></div>
		<?php include 'extra/filter.php';?>
	</div>  
			<!--------------------------Extra--------------------------->
		<!-----------------------Movies Start---------------------------->
				  
		<?php   if (!empty($title1)) {
			$countresults = sizeof($movies); $countresults = $countresults-1; // -1 because if loop is starting from zero 
			for ($y = 0; $y <= $countresults; $y++) {
				echo '
				<div class="content">
					<div class="movie-cointainer">
						<div class="cointent-sub">
								<a href="movies-single.php?query_term='.$title1[$y].' '.$year[$y].'" >
									<div class="image-a-tag">
										<img src="'.$image_url[$y].'" class="images-movie lazyload image-hover-image" alt="" loading="lazy">
										<div class="middle-text">
											<div class="text-show-on-hover">
												<span class="fa fa-tree" ></span>
												<h4 class="text-rating">'.$imdb_rating[$y].' / 10</h4>
												<h4 class="text-about">'.$genres1[$y].'</h4>
												<p class="button-green-download2-big">View Details</p>
											</div>
										</div>
									</div>
								</a>
							<div class="browse-movie-bottom">
								<div class="movie-name-span">
									<a class="movie-name-text" href="#" class="browse-movie-title">'.$title1[$y].'</a>
								</div>
								<div class="browse-movie-year">'.$year[$y].'</div>
							</div>
						</div>
					</div>
				</div>
				';						
				} } else { echo '<script>window.location.href = "search_engine.php?search='.$query_term.'";</script>' ; }
					  ?>
		<!-----------------------Movies End---------------------------->
				<div class="line-hole"></div>
		<!----------------Next Previous Button------------->  
		<div class="content">
			<div class="next-previous">
				<a href="<?php $page3 = $page1 - 1; $prev_page = $full_url1.'?page='.$page3."&quality=".$quality."&genre=".$genre."&rating=".$rating."&sort_by=".$sort_by."&query_term=".$query_term; echo $prev_page ?>"  >
					<div>
						Prev
					</div>
				</a>
					<div class="next-previous-space"></div>
				<a href="<?php $page2 = $page1 + 1; $next_page = $full_url1.'?page='.$page2."&quality=".$quality."&genre=".$genre."&rating=".$rating."&sort_by=".$sort_by."&query_term=".$query_term;  echo $next_page ?>" >
					<div>
						Next
					</div>
				</a>
			</div>  
		</div> 
		<!--------------------------------------------------------------->
  </body>
</html>