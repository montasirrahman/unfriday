<div class="movie-cointainer">
	<button class="accordion"><i class="material-icons">equalizer</i> <sup>FILTER<sup></button>
	<div class="panel">
		<form action="movies.php" >
					<div id="main" class="container">
						  <?php $full_url = $_SERVER['REQUEST_URI']; $qurey_url = '?'.$_SERVER['QUERY_STRING']; $full_url1 = str_replace($qurey_url,'', $full_url); ?>
					</div>
						
						  <select class="classic" name="quality"><option value="<?php if(empty($quality)) {  echo "all";} else  { echo $quality; } ?>" selected="selected"><?php if(empty($quality)) {  echo "Quality";} else  { echo $quality; } ?> </option><option value="all">All</option> <option value="720p">720p</option> <option value="1080p">1080p</option> <option value="2160p">2160p</option>  <option value="3D">3D</option>  </select> <select class="classic" name="genre"> <option value="<?php if(empty($genre)) {  echo "all";} else  { echo $genre; } ?>" selected="selected"><?php if(empty($genre)) {  echo "Genre";} else  { echo $genre; } ?></option><option value="all">All</option> <option value="action">Action</option> <option value="adventure">Adventure</option> <option value="animation">Animation</option> <option value="biography">Biography</option> <option value="comedy">Comedy</option> <option value="crime">Crime</option> <option value="documentary">Documentary</option> <option value="drama">Drama</option> <option value="family">Family</option> <option value="fantasy">Fantasy</option> <option value="film-noir">Film-Noir</option> <option value="game-show">Game-Show</option> <option value="history">History</option> <option value="horror">Horror</option> <option value="music">Music</option> <option value="musical">Musical</option> <option value="mystery">Mystery</option> <option value="news">News</option> <option value="reality-tv">Reality-TV</option> <option value="romance">Romance</option> <option value="sci-fi">Sci-Fi</option> <option value="sport">Sport</option> <option value="talk-show">Talk-Show</option> <option value="thriller">Thriller</option> <option value="war">War</option> <option value="western">Western</option> </select> <select  class="classic" name="rating"> <option value="<?php if(empty($rating)) {  echo "0";} else  { print_r( $rating); } ?>" selected="selected"><?php if(empty($rating)) {  echo " Rating ";} else  { echo $rating; } ?></option> <option value="9">9+</option> <option value="8">8+</option> <option value="7">7+</option> <option value="6">6+</option> <option value="5">5+</option> <option value="4">4+</option> <option value="3">3+</option> <option value="2">2+</option> <option value="1">1+</option> </select> <select  class="classic" name="sort_by"> <option value="<?php if(empty($sort_by)) {  echo "date-added";} else  { echo $sort_by; } ?>" selected="selected"><?php if(empty($sort_by)) {  echo "Sort By";} else  { echo $sort_by; } ?></option><option value="date-added">Date Added</option> <option value="title">Title</option> <option value="year">Year</option> <option value="rating">Ratings</option> <option value="peers">Peers</option> <option value="seeds">Seeds</option> <option value="download_count">Download Count</option> <option value="like_count">Like Count</option></select>
						  <input class="filter_submit" type="submit" value="Filter Search">
					
			</form>
	</div>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
