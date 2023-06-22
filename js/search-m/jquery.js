/* only for click expand feature start */
var coll = document.getElementsByClassName("collapsiblea");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
/* click expand end */
/* only for snackbar start*/
function launch_toast(para) {
  var coundownC1 = para+'C1';
    // time counter on page js start
      var timeleft = 3;
    var downloadTimer = setInterval(function(){
   // timeleft--;   document.getElementById("countdowntimer").textContent = timeleft;
      timeleft--;   document.getElementById(coundownC1).textContent = timeleft;
      if(timeleft === 0){ document.getElementById(coundownC1).innerHTML = "Show again"; }
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000); 
  //time counter on page js end
  //time to perform curl
  setTimeout(function(){
    //below is the notification code js
  var param = para+'1';
  var x = document.getElementById(param);
  x.classList.add("show");
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
       } , 2000);  //time remaining to display popup
  } 
/* snackbar end*/
/* suggestions for search */
$(function(){
    $("#query_term2").focus(); //Focus on search field
    $("#query_term2").autocomplete({
        minLength: 0,
        delay:5,
        source: "suggest-m.php",
        focus: function( event, ui ) {
        // this value will show in search field when you hover over suggesions list
            $(this).val( ui.item.label ); 
            return false;
        },
        select: function( event, ui ) {
        // this value will show in search field when you click on suggesions list
            $(this).val( ui.item.label );
            return false;
        },
         appendTo: "#results2",
  open: function() {
    var position = $("#results2").position(),
      left = position.left,
      top = position.top;

    $("#results2 > ul").css({
      left: (left + 20) + "px",
      top: (top + 4) + "px"
    });

  }
    }).data("uiAutocomplete")._renderItem = function( ul, item ) {
        return $("<li class='list-suggest'></li>")
            .data( "item.autocomplete", item )
            .append( "<a>" + (item.img?"<img class='imdbImage' src='" + item.img + "'  alt=''  />":"") + "<div class='suggest-text'><span class='imdbTitle'>" + item.label + "</span>" + (item.cast?"<span class='imdbCast'>" + item.cast + "</span></div>":"") + "<div class='clear'></div></a>" )
            .appendTo( ul );
    };
});
/*suggestion for search end */

/* ===== Scroll to Top start ==== */
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
/* ===== Scroll to Top end ==== */
