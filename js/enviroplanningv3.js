/* Implement custom javascript here */
window.onload = function() {

  (function ($) {
    jQuery('.search-block').hide();
  

     $('.off-canvas-submenu').hide();
     $('.off-canvas-nav .nolink').hide();
      $('.off-canvas-nav .nolink').next('span').hide();
     $('.off-canvas-submenu .active-trail .off-canvas-submenu').show();
     $('.off-canvas-submenu .active-trail span').text('-');

     $('.open-sub').click(function() {
       $(this).next('.off-canvas-submenu').slideToggle();
       var $thx = $(this);
       $thx.text($thx.text() == '+' ? '-' : '+');
       $(this).toggleClass('klickad');
     });
    
    // sökblocket
    
    jQuery(".search-ikon").click(function(){
      jQuery('.search-block').slideToggle();
    });
    // timer
    var interval = 1;

    setInterval(function(){
      if(interval == 25){
        jQuery('.search-block').slideUp();
        interval = 1;
      }
      interval = interval+1;
//      console.log(interval);
    },1000);

    jQuery(document).bind('mousemove keypress', function() {
      interval = 1;
    });
   }
   (jQuery));
}
