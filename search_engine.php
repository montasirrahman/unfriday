<?php
    /***************   some Universal Constants here        **********************/
   /*************/     $script_name = " ";         /********************/
  /*************/      $site_name = "";         /*******************/
 /*************/       $site_link = $_SERVER['SERVER_NAME'];  /******************/
/**************        END OF UNIVERSAL CONSTANTS           ******************/
//$search     = $_POST["search"];
//$whomtosents    = $whomtosent;
?>
<html lang="en" >
  <head>
	  <title>UnFriday</title>
	  <?php include 'meta.php';?>
    <link rel="stylesheet" href="./css/engine/style.css">
  </head>
	  <?php include 'header.php';?>
  <body>
	  <div class="content ">
      <div class="top-head"></div>
        <?php 
                  if (isset($_GET['page'])) { $pagea  = $_GET["page"];
                  if (!empty($pagea)) { $page1 = $pagea; } 
                  else{ $page1 = 1; } }
                  else{ $page1 = 1; }
      
      ?>
        <!--for for showing search results -->
      <?php

          if (isset($_GET['search'])) { $search  = $_GET["search"];
          $url = "https://1337x.to/search/".$search."/".$page1."/";
          $raw = file_get_contents($url);
          //echo $raw;
          $table_making = '
        <table border="0" align="center">
          <th class="name"><div class="date02">Name</div></th>
          <th class="seeds"><div class="date02">Seeds </div></th>
          <th class="leeches"><div class="date02"> Leeches</div></th>
          <th class="dateadded"><div class="date02">Date</div></th>
          <th class="size"><div class="date02">Size</div></th>
          <th class="uploader"><div class="date02" >Uploader</div></th>';
          echo $table_making;
          $re = '/<tbody>(.*?)<\/tbody>/ms';
          preg_match_all($re, $raw, $matches, PREG_SET_ORDER, 0);
          // echo $matches[0][1];
          //$result = str_replace('</tr>','</tr><br>',$matches[0][1]);
          $re01 = '/<i class="flaticon-message"><\/i>.*?<\/span>/m';
          $re02 = '/<span class="seeds">.*?<\/span>/m';
          $result = @str_replace('<a href="/torrent/','<a href="magnet_link.php?link=',$matches[0][1]);
          $result = preg_replace($re02, '', $result);
          $result = preg_replace($re01, '', $result);
          echo $result;
        
          }

      ?>
      

        </table>
        </div>
		<!----------------Next Previous Button------------->  
   <div class="line-hole"></div>
		<div class="content">
        <?php $full_url = $_SERVER['REQUEST_URI']; $qurey_url = '?'.$_SERVER['QUERY_STRING']; $full_url1 = str_replace($qurey_url,'', $full_url); ?>
			<div class="next-previous">
				<a href="<?php $page3 = $page1 - 1; $prev_page = $full_url1.'?search='.$search.'&page='.$page3; echo $prev_page ?>"  >
					<div>
						Prev
					</div>
				</a>
					<div class="next-previous-space"></div>
				<a href="<?php $page2 = $page1 + 1; $next_page = $full_url1.'?search='.$search.'&page='.$page2;  echo $next_page ?>" >
					<div>
						Next
					</div>
				</a>
			</div>  
		</div>
		<!--------------------------------------------------------------->
   </body>
</html>