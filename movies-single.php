<html>
<head>
	<?php include 'meta.php';?>
	<link rel="stylesheet" href="css/movies/single.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
 		<?php include 'header.php';?>
		<?php include 'yts_s.php';?>
				  
		<?php   if (!empty($title1)) {
			$countresults = sizeof($movies); $countresults = $countresults-1; // -1 because if loop is starting from zero 
			for ($y = 0; $y <= $countresults; $y++) {
// <div action="" id="background-image" class="headertotop" style="background: url('.$image0_url[$y].') no-repeat center center; background-size: cover; -webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;" >
// <p>'.$complete_torrent_info1[$y].'</p>
//						<div class="block_3">
//							<div class="all_q_s">
//								<div class="q_s">
//									<span class="q_s_border"></span> 
//										Extra
//								</div>
//									<br>
//									'.$yt_trailer_code1[$y].'
//							</div>	
//						</div>
echo '
	<div class="content">
	<div class="top-head"></div>
	<title>'.$title1[$y].' ('.$year[$y].') UnFriday</title>
			<div class="headertotop_blar">
				<div class="top-head_m"></div>
					<div class="all_element">
						<div class="block_1">
							<img src="'.$image_url[$y].'" class="main-img"/>	
						</div>
						<div class="block_2">
							<p class="title_m">'.$title1[$y].'</p>
							<p class="year_m">'.$year[$y].'</p>
								<br><br>
							<p class="genres_m">'.$genres1[$y].'</p>

							<div id="showData">
								<div>
									<table>
										<tbody>
											<tr class="year_m">
													<td>Language : </td>
													<td id="lang" class="max_height_text"></td>
											</tr>
											<tr class="year_m">
													<td>Time: </td>
													<td id="runTime"></td>
											</tr></br></br></br>
											<tr class="year_m">
													<td><i class="fa fa-heart" style="font-size:20px;color:#B4041A"></i></td>
													<td id="imdbVotes"></td>
											</tr>	
											<tr class="year_m">
													<td><i class="fa fa-money" style="font-size:20px;color:green"></i></td>
													<td id="boxOffice"></td>
											</tr>	
											<tr class="year_m">
													<td><img src="images/logo-imdb.svg" alt="IMDb Rating"></td>
													<td>'.$imdb_rating[$y].'</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>
						<div class="block_3">
							<div class="all_q_s">
								<div class="q_s">
									<span class="q_s_border"></span> 
									Downloads & Streaming
								</div>
									<br>
									'.$complete_torrent_info1[$y].'
							</div>	
						</div>
						<div class="block_4">
							<div class="all_q_s">
								<div class="q_s">
									<span class="q_s_border"></span> 
									Synopsis
								</div>
									<br>
									<p class="synopsis1">'.$synopsis1[$y].'</p>
							</div>	
						</div>
						<div class="block_end">
							<div class="all_q_s">
								<div class="q_s">
									<span class="q_s_border"></span> 
									Details
								</div>
							</div>	
							<div id="idSearch" style="display: none;">
								<form>
								<input type="text" value="'.$imdb_code[$y].'" class="form-control" id="input-id" placeholder="Imdb ID" autofocus><br>
								<button type="button" class="btn-primary" id="btn-idSearch" onclick="clickme()">Search</button>    <button type="reset" class="btn-danger" id="btn-reset">Reset</button>
								</form>
							</div>
							<div id="yearSearch" style="display: none;">
								<label>Please enter movie title : </label>
								<form>
								<input type="text" class="form-control" id="input-title2" placeholder="Movie title"><br>
				
								<label>Please enter year : </label>
								<input type="text" class="form-control" id="input-year" placeholder="Movie Year"><br>
				
								<center><button type="button" class="btn-primary" id="btn-yearSearch">Search</button>    <button type="reset" class="btn-danger" id="btn-reset">Reset</button></center>
								</form>
							</div><br>

								<script src="js/movies/script.js"></script>

							<div id="showData">
								<div class="table-responsive_s">
									<table>
										<tbody>
				
											<tr>
													<th>Name of the movie : </th>
													<td id="name"></td>
											</tr>
				
											<tr>
													<th>Year of release : </th>
													<td id="year"></td>
											</tr>
				
											<tr>
													<th>Production House : </th>
													<td id="prodHouse"></td>
											</tr>

											<tr>
													<th>Country : </th>
													<td id="country"></td>
											</tr>
				
											<tr>
													<th>Released : </th>
													<td id="release"></td>
											</tr>
				
											
				
											<tr>
													<th>Actors : </th>
													<td id="actor"></td>
											</tr>
				
											<tr>
													<th>Director : </th>
													<td id="director"></td>
											</tr>
				
											<tr>
													<th>Writer : </th>
													<td id="writer"></td>
											</tr>
				
											<tr>
													<th>Awards : </th>
													<td id="awards"></td>
											</tr>
				
											<tr>
													<th>IMDb ID : </th>
													<td id="imdbId"></td>
											</tr>
				
											
										</tbody>
									</table>
								</div>
							</div>
						</div>



					</div>
			</div>
	</div>					
';						
				} } else { echo '<script>window.location.href = "search_engine.php?search='.$query_term.'";</script>' ; }
					  ?>
  </body>
</html>