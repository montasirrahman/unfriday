<html lang="en" >
  <head>
    <title>UnFriday</title>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="css/streaming/style.css">
  </head>
  <body>
    <?php include 'header.php';?>
	<div class="content">
	
      <?php
      // Turn off all error reporting
      error_reporting(E_ERROR | E_PARSE);
      // END
                  if (isset($_GET['magnet_uri']) && !empty($_GET['magnet_uri'])) { $magnet_uri = $_GET["magnet_uri"]; $images_uri = $_GET["images_uri"];  $images_uri = 'load_page.php?images='.$images_uri; }
                  else { //die($magnet_uri_placeolder);	 
                  
                  $style = '';
                  
                  $html = '
                <div class="background">
                  <div class="top-head"></div>
                  <div class="top-head"></div>
                          <h1 class="magnet_player"><span class="span_m"></span>Magnet Player</h1>
                          <!--  Input tag  -->
                          <br>
                          <form action="?">
                          <input type="text" class="inputText" id="magnet_uri" name="magnet_uri" placeholder="Enter Magnet Link"><br>
                          <input type="submit" class="submitbox" value="Play">
                          </form>
                  </div>
                ';
                          die($style.$html);
                  }		
      ?>

    <p id='streaming'></p>
	  <!------streaming---->
	
	  <iframe style="margin-top: 56px;" sandbox = 'allow-forms allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation' width=100% height=100%  src='magnet_streaming_ifram.php?magnet_uri=<?php echo $_GET["magnet_uri"]; ?>' frameborder='0' gesture='media' allow='encrypted-media' allowfullscreen></iframe>
	</div>
 </body>
</html>