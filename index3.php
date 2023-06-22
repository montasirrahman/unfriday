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
			<div class="q_s_t">
				<span class="q_s_t_border"></span> 
							TRENDING THIS WEEK
			</div>
			<?php 
				include("asset/simple_html_dom.php");
				$htmlx = file_get_html($x1337 . '/home/');
			?>
			<!--#1--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',1)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',1)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',0)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',0)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',0)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',0)->innertext.''; ?></p>
				</div>
			</a>
			<!--#2--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',3)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',3)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',1)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',1)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',1)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',1)->innertext.''; ?></p>
				</div>
			</a>
			<!--#3--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',5)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',5)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',2)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',2)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',2)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',2)->innertext.''; ?></p>
				</div>
			</a>
			<!--#4--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',7)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',7)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',3)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',3)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',3)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',3)->innertext.''; ?></p>
				</div>
			</a>
			<!--#5--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',9)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',9)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',4)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',4)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',4)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',4)->innertext.''; ?></p>
				</div>
			</a>
			<!--#6--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',11)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',11)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',5)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',5)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',5)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',5)->innertext.''; ?></p>
				</div>
			</a>
			<!--#7--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',13)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',13)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',6)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',6)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',6)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',6)->innertext.''; ?></p>
				</div>
			</a>
			<!--#8--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',15)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',15)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',7)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',7)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',7)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',7)->innertext.''; ?></p>
				</div>
			</a>
			<!--#9--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',17)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',17)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',8)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',8)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',8)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',8)->innertext.''; ?></p>
				</div>
			</a>
			<!--#10--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',19)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',19)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',9)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',9)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',9)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',9)->innertext.''; ?></p>
				</div>
			</a>
			<!--#11--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',21)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',21)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',10)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',10)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',10)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',10)->innertext.''; ?></p>
				</div>
			</a>
			<!--#12--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',23)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',23)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',11)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',11)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',11)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',11)->innertext.''; ?></p>
				</div>
			</a>
			<br><br>
			<hr>
			<div class="q_s_t">
				<span class="q_s_t_border"></span> 
							Popular Movie Torrents
			</div>
			<!--Movies #13--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',25)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',25)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',12)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',12)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',12)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',12)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #14--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',27)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',27)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',13)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',13)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',13)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',13)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #15--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',29)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',29)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',14)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',14)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',14)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',14)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #16--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',31)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',31)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',15)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',15)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',15)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',15)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #17--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',33)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',33)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',16)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',16)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',16)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',16)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #18--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',35)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',35)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',17)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',17)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',17)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',17)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #19--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',37)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',37)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',18)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',18)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',18)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',18)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #20--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',39)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',39)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',19)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',19)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',19)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',19)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #21--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',41)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',41)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',20)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',20)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',20)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',20)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #22--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',43)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',43)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',21)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',21)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',21)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',21)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #23--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',45)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',45)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',22)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',22)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',22)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',22)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #24--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',47)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',47)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',23)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',23)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',23)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',23)->innertext.''; ?></p>
				</div>
			</a>
			<br><br>
			<hr>
			<div class="q_s_t">
				<span class="q_s_t_border"></span> 
							Popular Foreign  Movie Torrents
			</div>
			<!--Movies #25--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',49)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',49)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',24)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',24)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',24)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',24)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #26--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',51)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',51)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',25)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',25)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',25)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',25)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #27--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',53)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',53)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',26)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',26)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',26)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',26)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #28--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',55)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',55)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',27)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',27)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',27)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',27)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #29--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',57)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',57)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',28)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',28)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',28)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',28)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #30--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',59)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',59)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',29)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',29)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',29)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',29)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #31--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',61)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',61)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',30)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',30)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',30)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',30)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #32--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',63)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',63)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',31)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',31)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',31)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',31)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #33--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',65)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',65)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',32)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',32)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',32)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',32)->innertext.''; ?></p>
				</div>
			</a>
			<!--Movies #34--->
			<a href="search_engine.php?search=<?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',67)->plaintext.''; ?>">
				<div class="get_discover_list" >
					<p class="imdb_0_torrent a_tag" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-1.name . a',67)->plaintext.''; ?></p>
					<p class="imdb_0_torrent p" >seeds : <?php echo ''.$htmlx->find('tbody . tr . td.coll-2.seeds',33)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" >leeches : <?php echo ''.$htmlx->find('tbody . tr . td.coll-3.leeches',33)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-date',33)->plaintext.''; ?>,</p>
					<p class="imdb_0_torrent p" ><?php echo ''.$htmlx->find('tbody . tr . td.coll-4.size',33)->innertext.''; ?></p>
				</div>
			</a>
		</div>
	</div>
  </body>
</html>