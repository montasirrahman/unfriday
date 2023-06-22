<html >
  <head>
	<title>Discover</title>
	<?php include 'meta.php';?>
	<link rel="stylesheet" href="css/discover/style.css"> 
  </head>
	<?php include 'header.php';?>
  <body>
	<div class="content">
			<div class="top-head"></div>
		<div class="discover_all">
			<?php 
				include("asset/simple_html_dom.php");
				$htmlx = file_get_html($x1337 . '/home/');
			?>
<!-------------TRENDING THIS WEEK--------->
			<div class="q_s_t">
				<span class="q_s_t_border"></span> 
							TRENDING THIS WEEK
			</div>
			<?php
			$x = 0;
			$y = 1;

			while($x < 12) {
				$a =  $htmlx->find('tbody . tr . td.coll-1.name . a',$y)->href;
				$a = str_replace("/torrent/","",$a);
			echo '
				<a href="magnet_link.php?link='.$a.'">
					<div class="get_discover_list" >
						<p class="imdb_0_torrent a_tag" >'.$htmlx->find('tbody . tr . td.coll-1.name . a',$y)->plaintext.'</p>
						<p class="imdb_0_torrent p" >seeds : '.$htmlx->find('tbody . tr . td.coll-2.seeds',$x)->plaintext.',</p>
						<p class="imdb_0_torrent p" >leeches : '.$htmlx->find('tbody . tr . td.coll-3.leeches',$x)->plaintext.',</p>
						<p class="imdb_0_torrent p" >'.$htmlx->find('tbody . tr . td.coll-date',$x)->plaintext.',</p>
						<p class="imdb_0_torrent p" >'.$htmlx->find('tbody . tr . td.coll-4.size',$x)->innertext.'</p>
					</div>
				</a> 
			
			';
			$x++;
			$y = $y + 2;
			}
			?>
<!----Popular Movie Torrents-->
			<br><br>
			<hr>
			<div class="q_s_t">
				<span class="q_s_t_border"></span> 
							Popular Movie Torrents
			</div>
			<?php
			while($x < 24) {
				$a =  $htmlx->find('tbody . tr . td.coll-1.name . a',$y)->href;
				$a = str_replace("/torrent/","",$a);
			echo '
				<a href="magnet_link.php?link='.$a.'">
					<div class="get_discover_list" >
						<p class="imdb_0_torrent a_tag" >'.$htmlx->find('tbody . tr . td.coll-1.name . a',$y)->plaintext.'</p>
						<p class="imdb_0_torrent p" >seeds : '.$htmlx->find('tbody . tr . td.coll-2.seeds',$x)->plaintext.',</p>
						<p class="imdb_0_torrent p" >leeches : '.$htmlx->find('tbody . tr . td.coll-3.leeches',$x)->plaintext.',</p>
						<p class="imdb_0_torrent p" >'.$htmlx->find('tbody . tr . td.coll-date',$x)->plaintext.',</p>
						<p class="imdb_0_torrent p" >'.$htmlx->find('tbody . tr . td.coll-4.size',$x)->innertext.'</p>
					</div>
				</a> 
			
			';
			$x++;
			$y = $y + 2;
			}
			?>

<!--Popular Foreign  Movie Torrents-->
			<br><br>
			<hr>
			<div class="q_s_t">
				<span class="q_s_t_border"></span> 
							Popular Foreign  Movie Torrents
			</div>
			<?php
			while($x < 34) {
				$a =  $htmlx->find('tbody . tr . td.coll-1.name . a',$y)->href;
				$a = str_replace("/torrent/","",$a);
			echo '
				<a href="magnet_link.php?link='.$a.'">
					<div class="get_discover_list" >
						<p class="imdb_0_torrent a_tag" >'.$htmlx->find('tbody . tr . td.coll-1.name . a',$y)->plaintext.'</p>
						<p class="imdb_0_torrent p" >seeds : '.$htmlx->find('tbody . tr . td.coll-2.seeds',$x)->plaintext.',</p>
						<p class="imdb_0_torrent p" >leeches : '.$htmlx->find('tbody . tr . td.coll-3.leeches',$x)->plaintext.',</p>
						<p class="imdb_0_torrent p" >'.$htmlx->find('tbody . tr . td.coll-date',$x)->plaintext.',</p>
						<p class="imdb_0_torrent p" >'.$htmlx->find('tbody . tr . td.coll-4.size',$x)->innertext.'</p>
					</div>
				</a> 
			
			';
			$x++;
			$y = $y + 2;
			}
			?>
<!--Popular Foreign  Movie Torrents-->
<br><br>
			<hr>
			<div class="q_s_t">
				<span class="q_s_t_border"></span> 
							Other Torrents
			</div>
			<?php
			while($x < 94) {
				$a =  $htmlx->find('tbody . tr . td.coll-1.name . a',$y)->href;
				$a = str_replace("/torrent/","",$a);
			echo '
				<a href="magnet_link.php?link='.$a.'">
					<div class="get_discover_list" >
						<p class="imdb_0_torrent a_tag" >'.$htmlx->find('tbody . tr . td.coll-1.name . a',$y)->plaintext.'</p>
						<p class="imdb_0_torrent p" >seeds : '.$htmlx->find('tbody . tr . td.coll-2.seeds',$x)->plaintext.',</p>
						<p class="imdb_0_torrent p" >leeches : '.$htmlx->find('tbody . tr . td.coll-3.leeches',$x)->plaintext.',</p>
						<p class="imdb_0_torrent p" >'.$htmlx->find('tbody . tr . td.coll-date',$x)->plaintext.',</p>
						<p class="imdb_0_torrent p" >'.$htmlx->find('tbody . tr . td.coll-4.size',$x)->innertext.'</p>
					</div>
				</a> 
			
			';
			$x++;
			$y = $y + 2;
			}
			?>
		</div>
		<br></br></br></br>
	</div>
  </body>
</html>