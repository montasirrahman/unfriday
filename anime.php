<html >
  <head>
	<title>Anime</title>
	<?php include 'meta.php';?>
  </head>
	<?php include 'header.php';?>
  <body>
	<div class="content">
			<div class="top-head"></div>
            <?php include 'anime-new.php';?>
  </body>
</html>

<!------
				<a class="imdb_0_torrent a_tag" href="search_engine.php?search='.$htmla->find('tr . td.titleColumn . a',$count)->plaintext.'" >
					<div class="get_tv_list" >
						<div class="tv_img">
							<img src="'.$htmla->find('tr . img',$count)->src.'"  >
						</div>
						<div class="tv_text">
							
							<p class="padding_60px imdb_0_torrent a_tag" >'.$htmla->find('tr . td.titleColumn . a',$count)->plaintext.'</p>

							<p class="padding_60px imdb_0_torrent a_tag">'.$htmla->find('tr . td.imdbRating',$count)->plaintext.'</p>
						</div>
					</div>	
				</a>

                //its title
                <a href="search_engine.php?search='.$htmla->find('div.title . div.title-text . h2.h2_anime_title . a',$count)->plaintext.'" >

------->