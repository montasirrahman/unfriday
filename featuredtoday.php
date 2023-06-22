<?php

include("asset/simple_html_dom.php");

// Create DOM from URL or file
//	echo ''.$html->plaintext.'';
//foreach($html->find('img') as $img)
//       echo $img->src . '<br>';



$html = file_get_html($websitUrl);

// imdb get data
//$websiteurlimdb = 'https://www.imdb.com';
//$htmlimdb = file_get_html($websiteurlimdb);
//echo $htmlimdb;


//img src
//echo $html->find('img.img-responsive',5)->src;

//img background
//echo $html->find('div#background-image',0)->style
?>

<link rel="stylesheet" href="css/movies/popular.css">
<link rel="stylesheet" href="css/movies/style.css">
<link rel="stylesheet" href="css/movies/movies.css"> 
<link rel="stylesheet" href="css/movies/feature.css">


<div class="featureInline">
			<!--#1--->
			<?php  
			$count = 0;
			$count2 = 1;
			
			while($count <= 3) {
				echo '
		<div class="content movie-cointainer cointent-sub-home2">
				<a href="movies-single.php?query_term='.$html->find('div.browse-movie-wrap . div.browse-movie-bottom . a.browse-movie-title',$count)->plaintext.' '.$html->find('div.browse-movie-wrap . div.browse-movie-bottom . div.browse-movie-year',$count)->plaintext.'">
					<div class="image-a-tag">
						<img src="https://yts.mx'.$html->find('div.browse-movie-wrap . img.img-responsive',$count2)->src.'"  class="images-movie image-hover-image lazyloaded" alt="" loading="lazy">
						<div class="middle-text">
							<div class="text-show-on-hover">
								<span class="fa fa-tree"></span>
								<h3 class="text-rating">'.$html->find('div.browse-movie-wrap . h4.rating',$count)->plaintext.'</h3>
								<h4 class="text-about" style="font-size: 22px;">Featured Movie</h4>
								<p class="button-green-download2-big">View Details</p>
							</div>
						</div>
					</div>
				</a>
			<div class="browse-movie-bottom">
				<div class="movie-name-span">
					<a  class="movie-name-text" href="#">'.$html->find('div.browse-movie-wrap . div.browse-movie-bottom . a.browse-movie-title',$count)->plaintext.'</a>
				</div>
				<div class="browse-movie-year">'.$html->find('div.browse-movie-wrap . div.browse-movie-bottom . div.browse-movie-year',$count)->plaintext.'</div>
			</div>
		</div>

				'; 
			$count++;
			$count2 = $count2 + 2;
			} 
			?>

</div>				
						
						
						
