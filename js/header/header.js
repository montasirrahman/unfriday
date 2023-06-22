
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });

      let openSlideMenu = ()=> {
        document.getElementById('side-menu-hidden').style.width="250px";
        document.getElementById('main').style.marginLeft="250px";
      }

      let closeSlideMenu = ()=> {
        document.getElementById('side-menu-hidden').style.width="0px";
        document.getElementById('main').style.marginLeft="0px";
      }
	  
	 if ('ontouchstart' in window) {
		  document.body.classList.add('touch-device');
		}