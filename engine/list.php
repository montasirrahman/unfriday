
<html>
<head>
	<link rel="stylesheet" href="css/engine/magnet.css">
	<link rel="stylesheet" href="css/engine/extra.css">
</head>
<body>
	<div class="content">
		<div class="top-head"></div>
			<div class="full_page_details">
				<?php

				/**********get main data except ads**************/
				$link_for_magnet = $_GET["link"];
				$url = 'https://1337x.to/torrent/'.$link_for_magnet;
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

						
						<div class="content_raw">'.$raw.'</div>
							<br>
						'.$link_for_magnet.'
							<br>
						'.$magnet_link.'
							<br>
							

						';
				/*************** img section work repalce relative tags with absolute tags********************/
				$re3 = '/data-original="(.*?)"/sm';
				$count3 = preg_match_all($re3, $raw, $images);
				$re4 = '/<img src=\"\/(.*)\"/mU';
				for ($y = 0; $y < $count3; $y++) {
																echo '<br><img src="'.$images[1][$y].'" alt="loading" >';
													$matched_data = preg_replace($re4, '<img class="responsive" src="get_img.php?images='.$images[1][$y].'" alt="loading"', $matched_data, 1);
												}
				echo $matched_data;
				
			?>
