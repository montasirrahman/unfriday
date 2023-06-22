<html>
<head>
	
	<link rel="stylesheet" href="css/slider/style.css"> 
	<link rel="stylesheet" href="css/color-change/color-change.css">
	<link rel="stylesheet" href="css/engine/index.css">
	<?php include 'meta.php'; error_reporting(0); ?>
	<title>UnFriday</title>
</head>
<body>
   <input type="checkbox" id="check">
    <header>
      <div class="user-mode">
			<select class="select__input" id="selTheme">
                <option value="auto">Auto Theme</option>
                <option value="light">Light Theme</option>
                <option value="dark">Dark Theme</option>
            </select>
      </div>
		<!-------------Javascript----------------->
		<script  src="js/color-change/color-change.js"></script>
	</header>
	<!-------------Contant------------------>
	<div class="top-head"></div>
	<main class="mainClass">
			
			<center>
				<div class="centerLogo">
					<a href="home.php">
						<div class="logo-image" src=""></div>
					</a>
				</div>
			</center>
			<br>
			<form id="searchForm">
				<select id="selectSite">
				  <option value="search_engine.php?search=">Engine</option>
				  <option value="movies.php?query_term=">Movies</option>
				</select><input class="search-input" name="query_term" type="search" maxlength="128" id="query_term"  placeholder="Search..."/><button class="search-button" type="submit"><i class="fas fa-search search-icon-color" style="color: var(--icon-color);"></i></button>
			</form>
			<div id="results"></div>
			<br>
			<center class="indexLink">
				<a href="home.php">Home</a>
				<a href="discover.php">Discover</a>
				<a href="movies.php">Movie</a>
				<a href="tv-shows.php">TV-Show</a>
				<a href="anime.php">Anime</a>
			</center>

		<!-------------Javascript----------------->
		<script type="text/javascript" src="js/search/jquery.js"></script>
		<script type="text/javascript" src="js/search/auto.js"></script>
		<script type="text/javascript" src="js/search/auto_suggest_jquery_ui.js"></script>
		<script type="text/javascript" src="js/search/search_select.js"></script>
	</main>
</body>
</html>