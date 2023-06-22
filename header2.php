<head>
	<link rel="stylesheet" href="css/slider/style.css"> 
	<link rel="stylesheet" href="css/color-change/color-change.css">
	<link rel="stylesheet" href="css/suggest/suggest.css">
</head>
<body>
   <input type="checkbox" id="check">
    <!--header area start-->
    <header>
		<div class="icon-logo">
		  <label class="icon-show-large" for="check">
			<i class="" id="sidebar_btn">
				<div class="icon-bar-create"></div>
				<div class="icon-bar-create"></div>
				<div class="icon-bar-create"></div>
			</i>
		  </label>
		  <label  class="icon-show-small" onclick="openSlideMenu()" >
			<i class="" id="sidebar_btn">
				<div class="icon-bar-create"></div>
				<div class="icon-bar-create"></div>
				<div class="icon-bar-create"></div>
			</i>
		  </label>
			<a href="home.php">
				<div class="logo-image" src=""></div>
			</a>
		</div>
		
		<!-------Search PC-------------->
		<link rel="stylesheet" href="css/search/style.css">
		<div class="search-box-border content" >
			<form id="searchForm">
				<select id="selectSite">
					<option value="movies.php?query_term=">Movies</option>
				  <option value="search_engine.php?search=">Engine</option>
				</select><input class="search-input" name="query_term" type="search" maxlength="128" id="query_term"  placeholder="Search..."/><button class="search-button" type="submit"><i class="fas fa-search search-icon-color" style="color: var(--icon-color);"></i></button>
			</form>
			<div id="results"></div>
		</div>

		<script type="text/javascript" src="js/search/jquery.js"></script>
		<script type="text/javascript" src="js/search/auto.js"></script>
		<script type="text/javascript" src="js/search/auto_suggest_jquery_ui.js"></script>
		<script type="text/javascript" src="js/search/search_select.js"></script>
		<!-------Search Pc END------->
		<!------------search moblie-------------->
		<link rel="stylesheet" href="css/search/style-m.css">
			<div class="primary">
				<i class="material-icons search-mobile-icon" id="search">search</i>
			</div>
			<div class="secondary" id="secondary-header">
					<i class="material-icons search-mobile-icon" id="back-arrow">arrow_back</i>
							<div class="search-box-border-m" >
								<form id="searchFormMoblie">
									<select id="selectSiteMobile">
										<option value="movies.php?query_term=">Movies</option>
										<option value="search_engine.php?search=">Engine</option>
									</select><input class="search-input-m" name="search_query_mobile" type="search" maxlength="128" id="query_term2"  placeholder="Search..."/><button class="search-button-m" type="submit"><i class="fas fa-search search-icon-color"></i></button>
								</form>
							</div>
							<div id="results2"></div>
			</div>
		<script type="text/javascript" src="js/search-m/search_select.js"></script>
		<script  src="js/search/script-m.js"></script>
		<script type="text/javascript" src="js/search-m/jquery.js"></script>
		<script type="text/javascript" src="js/search-m/auto.js"></script>
		<script type="text/javascript" src="js/search-m/search_select.js"></script>
		<!------------search moblie END-------------->
      <div class="user-mode">
			<select class="select__input" id="selTheme">
                <option value="auto">Auto Theme</option>
                <option value="light">Light Theme</option>
                <option value="dark">Dark Theme</option>
            </select>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->   <!----class="icon-active"--->
    <div class="sidebar">
      <a href="home.php" ><i class="material-icons">home</i><span><sup>Home</sup></span></a>
      <a href="discover.php"><i class="material-icons">explore</i><span><sup>Discover</sup></span></a>
	  <a href="livetv.php"><i class="material-icons" >cast</i><span><sup>Live TV</sup></span></a>
		<br><hr><br>
      <a href="movies.php"><i class="material-icons">local_movies</i><span><sup>Movies</sup></span></a>
	  <a href="tv-shows.php"><i class="material-icons">live_tv</i><span><sup>TV-Shows</sup></span></a>
	  <a href="anime.php"><i class="material-icons">face</i><span><sup>Anime</sup></span></a>
	  <a href="#" style="display: none"><i class="material-icons">aspect_ratio</i><span><sup>Documentaries</sup></span></a>
	  <a href="magnet_streaming.php"><i class="material-icons">play_circle</i><span><sup>Magnet Streaming</sup></span></a>
    </div>
    <!--sidebar end-->
	<!--side navifation hidden Start---->
	    <div id="side-menu-hidden" class="side-nav-hidden">
			<a href="#" class="btn-close" onclick="closeSlideMenu()">
				<i class="" id="sidebar_btn">
					<div class="icon-bar-create"></div>
					<div class="icon-bar-create"></div>
					<div class="icon-bar-create"></div>
				</i>
			</a>
			
			<a href="home.php" ><i class="material-icons">home</i><span><sup>Home</sup></span></a>
			<a href="discover.php"><i class="material-icons">explore</i><span><sup>Discover</sup></span></a>
			<a href="livetv.php"><i class="material-icons" >cast</i><span><sup>Live TV</sup></span></a>
				<br><hr><br>
			<a href="movies.php"><i class="material-icons">local_movies</i><span><sup>Movies</sup></span></a>
			<a href="tv-shows.php"><i class="material-icons">live_tv</i><span><sup>TV-Shows</sup></span></a>
			<a href="anime.php"><i class="material-icons">face</i><span><sup>Anime</sup></span></a>
			<a href="#" style="display: none"><i class="material-icons">aspect_ratio</i><span><sup>Documentaries</sup></span></a>
			<a href="magnet_streaming.php"><i class="material-icons">play_circle</i><span><sup>Magnet Streaming</sup></span></a>
		</div>
	<!-------------Javascript----------------->
	<script  src="js/color-change/color-change.js"></script>
	<script  src="js/header/header.js"></script>
</body>