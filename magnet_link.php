<?php error_reporting(0); ?>








<html>
<head>
	<?php include 'meta.php';?>
	<link rel="stylesheet" href="css/engine/magnet.css">
	<link rel="stylesheet" href="css/engine/extra.css">
	<link rel="stylesheet" href="css/engine/img.css">
	<link rel="stylesheet" href="css/engine/magnet_0.css">
</head>
	<?php include 'header.php';?>
<body>
	<div class="content">
		<div class="top-head"></div>
			<div class="full_page_details">		
			 	<div class="engine-cointainer">	
				
				
				<?php
				
				/**********get main data except ads**************/
				include("asset/simple_html_dom.php");
				$link_for_magnet = $_GET["link"];
				$url = 'https://1337x.to/torrent/'.$link_for_magnet;
				//get all from here utsho
				$htmlx = file_get_html($url);
				$raw = file_get_contents($url);     

				$re = '/<div class="tab-content">(.*?)<div role="tabpanel" class="tab-pane" id="comments">/ms';
				preg_match_all($re, $raw, $matches);
				$matched_data = $matches[1][0];
				
				/***************magnet link data get and display *********************/
				
						$re2 = $re = '/magnet:\?xt=urn:btih:(.*?)"/sm';
						preg_match_all($re2, $raw, $magnet);
						$magnet_link = "".$magnet[1][0];
						
						
						
						//echo $magnet_link;
						echo '
						
<h1 class="name_torrent"><span class="q_s_t_border"></span>'.$htmlx->find('div.box-info-heading',0)->plaintext.'</h1>						

<div class="all_things">
	<div class="type_1">
		<div class="container_3">
			<div class="row_3">
				<a href="magnet:?xt=urn:btih:'.$magnet_link.'" Class="stream_q magnet_3" ><i class="fa fa-magnet" style="font-size:15px"></i>&nbsp;Magnet Download</a>
				<a href="http://itorrents.org/torrent/'.$htmlx->find('div.infohash-box . span',0)->plaintext.'.torrent" Class="stream_q torrent_3" id="drop_btn"><i class="fa fa-download" style="font-size:15px"></i>&nbsp;Torrent Download</a>
			</div>
			<div class="row_3">
			<div class="list-group">
			</div>
			<div class="row_3">
				<a href="magnet_streaming.php?magnet_uri=magnet:?xt=urn:btih:'.$magnet_link.'" Class="stream_q stream_3" ><i class="fa fa-play-circle" style="font-size:15px"></i>&nbsp;Streaming Online</a>
			</div>
			</div>
		</div>
	</div>
	<div class="type_2">

	</div>
	<div class="type_3">

	</div>
</div>




<title>'.$htmlx->find('div.box-info-heading',0)->plaintext.'</title>


<div class="cata_torrent">
	<div class="inside_ul_1">'.$htmlx->find('ul.list',1)->innertext.'</div>
	<div class="inside_ul_2">'.$htmlx->find('ul.list',2)->innertext.'</div>
</div>

<h3 class="hashinfo">Hash info : '.$htmlx->find('div.infohash-box . span',0)->plaintext.'</h3>

<div class="imdb_torrent">
		<img alt="No Data Found In IMDb" class="img_imdb_torrent" src="'.$htmlx->find('div.torrent-image . img',0)->src.'" >
	<div class="imdb_info_torrent">
		<p class="imdb_name_torrent" >'.$htmlx->find('div . h3 . a',0)->plaintext.'</p>
		<h3 class="imdb_kirokom">'.$htmlx->find('div.torrent-category.clearfix',0)->plaintext.'</h3>
		<h3 class="imdb_dis">'.$htmlx->find('div.content-row . p',0)->innertext.'</h3>
	</div>
</div>


						';
				/*************** img section work repalce relative tags with absolute tags********************/
				$re3 = '/data-original="(.*?)"/sm';
				$count3 = preg_match_all($re3, $raw, $images);
				$re4 = '/<img src=\"\/(.*)\"/mU';
				echo '
					<div class="q_s_t">
						<span class="q_s_t_border"></span> 
							Screenshots 
					</div>
				';
				for ($y = 0; $y < $count3; $y++) {
					echo '
				<section class="img-gallery-magnific">
					<div class="magnific-img">
						<a class="image-popup-vertical-fit" href="'.$images[1][$y].'" title="'.$images[1][$y].'">
							<img style="max-height: 200px" src="'.$images[1][$y].'" alt="loading" >
						</a>
					</div>
				</section>
						';
					$matched_data = preg_replace($re4, '<img class="responsive" style="display:none;" src="get_img.php?images='.$images[1][$y].'" alt="loading"', $matched_data, 1);
												}
				echo '
			<div class="problem_files">
				<div style="float: left;"><div>
				<div class="q_s_t">
					<span class="q_s_t_border"></span> 
						Files :: 
				</div>
				<div class="files_torrent">
					'.$htmlx->find('div[id=files] . ul',0)->innertext.'
				</div>
			</div>
				';												
				echo '
				<div style="float: left;"><div>
				<div class="q_s_t">
					<span class="q_s_t_border"></span> 
						Description 
				</div>
				<div class="match_data_all">							
					'.$matched_data.'
				</div>';
				
			?> </div>
			</div>
	</div>

<!---------image popup -------->

<script  src="./js/engine/img.js"></script>
<!---------image popup END-------->

</body>
</html>
