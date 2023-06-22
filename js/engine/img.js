$(document).ready(function(){
$('.image-popup-vertical-fit').magnificPopup({
	type: 'image',
  mainClass: 'mfp-with-zoom', 
  gallery:{
			enabled:true
		},

  zoom: {
    enabled: true, 

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    opener: function(openerElement) {

      return openerElement.is('img') ? openerElement : openerElement.find('img');
  }
}

});

});


function manageDrop(){
  var btn = document.querySelector('#drop_btn'),
      view = document.querySelector('#drop_view'),
      viewItems = view.querySelectorAll('li'),
      out = document.querySelector('#drop_output'),
      body = document.body;
  

  btn.addEventListener('click', function(e){ 
      e.stopPropagation();
      view.classList.toggle('is_active');
  }); // open menu
    
  for(var i = 0; i < viewItems.length; i++){
    viewItems[i].addEventListener('click', function(e){
      e.stopPropagation();
      out.innerHTML = this.innerHTML;
      view.classList.remove('is_active');
    });
  } // carry item content to output, 
    // close after click
   
      body.addEventListener('click', function(){
        if(view.classList.contains('is_active')){
          view.classList.remove('is_active');
          } 
      }); // close after click outside
}
manageDrop();