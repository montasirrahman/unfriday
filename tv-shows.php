<html >
  <head>
	<title>Tv-Shows</title>
	<?php include 'meta.php';?>
	<link rel="stylesheet" href="css/discover/style.css"> 
  </head>
	<?php include 'header.php';?>
  <body>
	<div class="content">
			<div class="top-head"></div>
		<div class="discover_all">
			<div class="q_s_t">
				<span class="q_s_t_border"></span> 
					Most Popular TV Shows
			</div>
			<?php 
				include("asset/simple_html_dom.php");
				$htmlimdb = file_get_html($imdbcom . '/chart/tvmeter/');
			?>
			<!--#1--->
			<?php  
			$count = 0;
			
			while($count <= 99) {
				echo '
				<a class="imdb_0_torrent a_tag" href="search_engine.php?search='.$htmlimdb->find('tr . td.titleColumn . a',$count)->plaintext.'" >
					<div class="get_tv_list" >
						<div class="tv_img">
							<img src="'.$htmlimdb->find('tr . img',$count)->src.'"  >
						</div>
						<div class="tv_text">
							
							<p class="padding_60px imdb_0_torrent a_tag" >'.$htmlimdb->find('tr . td.titleColumn . a',$count)->plaintext.'</p>

							<p class="padding_60px imdb_0_torrent a_tag" >'.$htmlimdb->find('tr . td.imdbRating',$count)->plaintext.'</p>
						</div>
					</div>	
				</a>
				'; 
			$count++;
			} 
			?>


		</div>
	</div>
  </body>
</html>