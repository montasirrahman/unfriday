<link rel="stylesheet" href="css/movies/style.css">
<link rel="stylesheet" href="css/movies/movies.css">
<link rel="stylesheet" href="css/discover/style.css"> 

		<div class="center-anime">
        <div class="q_s_t">
				<span class="q_s_t_border"></span> 
                Seasonal Anime 
                <?php echo date(" \of F Y ") . ""; ?>
			</div>
			<?php 
				include("asset/simple_html_dom.php");
				$htmla = file_get_html($myanimelist . '/anime/season');
			?>
			<!--#1--->
			<?php  
			$count = 0;
			
			while($count <= 11) {
				echo '

            <div class="cointent-sub-home">
                    <a href="search_engine.php?search='.$htmla->find('div.title . div.title-text . h2.h2_anime_title . a',$count)->plaintext.'" >
                        <div class="image-a-tag">
                            <img src="'.$htmla->find('div.image img',$count)->src.'"  alt="" loading="lazy" class="images-movie lazyload image-hover-image">
                            <div class="middle-text">
                                <div class="text-show-on-hover">
                                    <span class="fa fa-tree" ></span>
                                    <h4 class="text-rating">'.$htmla->find('div.information . div.scormem . div.scormem-container . div.score-label',$count)->plaintext.' / 10</h4>
                                    <h4 class="text-about"></h4>
                                    <p class="button-green-download2-big">View Details</p>
                                </div>
                            </div>
                        </div>
                    </a>
                <div class="browse-movie-bottom">
                    <div class="movie-name-span">
                        <a class="movie-name-text" href="#" class="browse-movie-title">'.$htmla->find('div.title . div.title-text . h2.h2_anime_title . a',$count)->plaintext.'</a>
                    </div>
                    <div class="browse-movie-year"></div>
                </div>
            </div>



				'; 
			$count++;
			} 
			?>


		</div>
	</div>