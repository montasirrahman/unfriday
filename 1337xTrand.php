<link rel="stylesheet" href="css/discover/style.css"> 
<link rel="stylesheet" href="css/slider/style.css"> 
	<link rel="stylesheet" href="css/color-change/color-change.css">
	<link rel="stylesheet" href="css/suggest/suggest.css">
	<script  src="js/color-change/color-change.js"></script>
<?php include 'meta.php';?>           
            <?php 
				include("asset/simple_html_dom2.php");
				$htmlx = file_get_html($x1337 . '/home/');
			?>
<!-------------TRENDING THIS WEEK--------->
			<center>
				<div class="q_s_t">
					<span class="q_s_t_border"></span> 
								TRENDING THIS WEEK
				</div>
			</center>
			<?php
			$x = 0;
			$y = 1;

			while($x < 12) {
				$a =  $htmlx->find('tbody . tr . td.coll-1.name . a',$y)->href;
				$a = str_replace("/torrent/","",$a);
			echo '
				<a target="_blank" href="magnet_link.php?link='.$a.'">
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