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
$(function() {
	$('#file_upload').uploadifive({
		'multi': false,
		'formData'         : {
			'timestamp' : '<?php echo $timestamp;?>',
			'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
		},
		'queueID'          : 'queue',
		'uploadScript'     : 'torrent2magnet.php',
		'onUploadComplete' : function(file, data, response) {
			var result = $('#torrent2magnet .info');
			var strhtml = 'The file ' + file.name + ' is vailed! ';
			var obj = eval ("(" + data + ")");
			if (obj.result)
			{
				strhtml = '<a href="' + obj.url + '" target="_blank">' + obj.url;
			}
			result.html('<div class="alert"><button type="button" class="close" data-dismiss="alert">×</button>' + strhtml + '</div>');
		}
	});
});

$(document).ready(function(){
	$("#submit0").click(function(){
		var magneturl = $("#magnet")[0].value;
		$.get("magnet2torrent.php", { magnet: encodeURIComponent(magneturl) },function(data){
			var result = $('#magnet2torrent .info');
			var obj = eval ("(" + data + ")");
			var strhtml = 'The url ' + magneturl + ' is vailed! ';
			if (obj.result) {
				strhtml = '<a href="' + obj.url + '" Class="stream_q itorrent_3"><i class="fa fa-envira" style="font-size:15px"></i>&nbsp;Itorrents Mirror</a><a href="#" Class="stream_q t_3"><i class="fa fa-envira" style="font-size:15px"></i>&nbsp;Torrage Mirror</a><a href="#" Class="stream_q b_3"><i class="fa fa-envira" style="font-size:15px"></i>&nbsp;Btcache Mirror</a>';
			}
			result.html('<div class="alert">' + strhtml + '</div>');
		});
	});
});