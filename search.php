
<link rel="stylesheet" href="css/search/style.css">

<div class="search-box-border" >
	<form id="searchForm">
        <select id="selectSite">
          <option value="search_engine.php?search=">Engine</option>
          <option value="movies.php?query_term=">Movies</option>
        </select><input class="search-input" name="query_term" type="search" maxlength="128" id="query_term"  placeholder="Search..."/><button class="search-button" type="submit"><i class="fas fa-search search-icon-color"></i></button>
    </form>
	<div id="results"></div>
</div>

<script type="text/javascript" src="js/search/jquery.js"></script>
<script type="text/javascript" src="js/search/auto.js"></script>
<script type="text/javascript" src="js/search/auto_suggest_jquery_ui.js"></script>
<script type="text/javascript" src="js/search/search_select.js"></script>