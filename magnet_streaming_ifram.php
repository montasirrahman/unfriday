<html>
<body >
<div class="outPopUp" style="border: 0px solid red;" >
  <p id="streaming"></p>
	<!------streaming---->
	<video width="100%" sandbox = 'allow-forms allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation' controls src='<?php echo $_GET["magnet_uri"]; ?>' ></video>
	<!---- fatch from magnet -->
	<script src="https://cdn.jsdelivr.net/npm/@webtor/player-sdk-js/dist/index.min.js" charset="utf-8" async></script>
</div>
<style>
body {
	margin: 0px;
	padding: 0px;
}
.outPopUp {
  display: table;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
  max-width: 1000px;
}
</style>
</html>

