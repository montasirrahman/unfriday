
<html>
<head>
<?php include 'meta.php';?>
	<link rel="stylesheet" href="css/engine/magnet.css">
	<link rel="stylesheet" href="css/engine/extra.css">
	<link rel="stylesheet" href="css/engine/img.css">
	<link rel="stylesheet" href="css/engine/magnet_0.css">
	<script src="//cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
	<script src="asset/uploadify/jquery.uploadifive.min.js" type="text/javascript"></script>
</head>
	<?php include 'header.php';?>
	<!------------------Click------------>

	<script type="text/javascript">
		function clickme() {
		  console.log('You clicked me');
		}
		let intervalFunction;
		let count = 0;
		window.onload = function () {
		  intervalFunction = setInterval(function () {
			if (typeof document.getElementsByClassName('btn-primary-unfriday-click')[0] != "undefined") {
			  document.getElementsByClassName('btn-primary-unfriday-click')[0].click();
			  count++;
			  if (count === 1) {
				console.log("Now you have clicked me 10 times!! let me take a break")
				clearInterval(intervalFunction)
			  }
			}
		  }, 0);
		}
		<?php $timestamp = time();?>
		$(document).ready(function(){
			$("#submit0").click(function(){
				var magneturl = $("#magnet")[0].value;
				$.get("magnet2torrent.php", { magnet: encodeURIComponent(magneturl) },function(data){
					var result = $('#magnet2torrent .info');
					var obj = eval ("(" + data + ")");
					var strhtml = 'The url ' + magneturl + ' is vailed! ';
					if (obj.result) {
						strhtml = '<a target="_blank" href="http://itorrents.org/torrent/' + obj.url + '.torrent" Class="stream_q itorrent_3"><i class="fa fa-envira" style="font-size:15px"></i>&nbsp;Itorrents Mirror</a><a  target="_blank" href="http://torrage.info/torrent.php?h=' + obj.url + '" Class="stream_q t_3"><i class="fa fa-envira" style="font-size:15px"></i>&nbsp;Torrage Mirror</a><a  target="_blank" href="http://btcache.me/torrent/' + obj.url + '" Class="stream_q b_3"><i class="fa fa-envira" style="font-size:15px"></i>&nbsp;Btcache Mirror</a>';
					}
					result.html('<div class="alert">' + strhtml + '</div>');
				});
			});
		});
	</script>
<body>
	<div class="content">
		<div class="top-head"></div>
			<div class="full_page_details">		
			 	<div class="engine-cointainer">	
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


<div class="all_things">
	<div class="type_1">
		<div class="container_3">
			<div class="row_3">
				<a href="magnet:?xt=urn:btih:'.$magnet_link.'" Class="stream_q magnet_3" ><i class="fa fa-magnet" style="font-size:15px"></i>&nbsp;Magnet Download</a>
				<a href="#" Class="stream_q torrent_3" id="drop_btn"><i class="fa fa-download" style="font-size:15px"></i>&nbsp;Torrent Download</a>
			</div>
			<div class="row_3">
			
				<div class="tab-pane" id="magnet2torrent">
					<form style="display: none;">
						<textarea type="text" id="magnet" name="magnet" >magnet:?xt=urn:btih:'.$magnet_link.'</textarea>
						<input type="button" class="btn-primary-unfriday-click" onclick="clickme()" id="submit0" name="submit0" value="submit0" />
					</form>
					<div  class="info"></div>
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
					echo '
				<section class="img-gallery-magnific">
					<div class="magnific-img">
						<a class="image-popup-vertical-fit" href="'.$images[1][$y].'" title="'.$images[1][$y].'">
							<img src="'.$images[1][$y].'" alt="loading" >
						</a>
					</div>
				</section>
						';
					$matched_data = preg_replace($re4, '<img class="responsive" style="display:none;" src="get_img.php?images='.$images[1][$y].'" alt="loading"', $matched_data, 1);
												}
				echo '
				<div class="match_data_all">
					<div class="torrent_details_0">Description</div>							
					'.$matched_data.'
				</div>';
				
			?> </div>
			</div>
	</div>

<!---------image popup -------->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
<script  src="./js/engine/img.js"></script>
<!---------image popup END-------->

</body>
</html>
