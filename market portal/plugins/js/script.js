
(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

$(document).ready(function(){
   // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
   $('.modal-trigger').leanModal();
 });

 $(document).ready(function(){
       $('.parallax').parallax();
     });


     $(document).ready(function() {
       getWeather(); //Get the initial weather.
       setInterval(getWeather, 600000); //Update the weather every 10 minutes.(in ms)
     });

     function getWeather() {
     $.simpleWeather({
         location: 'Vadodara, IN',
         woeid: '',
         unit: 'c',
         success: function(weather) {
           html = '<center><i class="icon-'+weather.code+' weather-icon"></i> '+ '&nbsp<span class="temperature">'+weather.temp+'&deg;'+weather.units.temp+'</span></br> <span class="condition">'+weather.currently+'</span></center>';


           $("#weather").html(html);
         },
         error: function(error) {
           $("#weather").html('<p>'+error+'</p>');
         }
       });
     };

     $(document).ready(function(){
        $('.collapsible').collapsible();
      });


      jQuery.fn.liScroll = function(settings) {
      	settings = jQuery.extend({
      		travelocity: 0.05
      		}, settings);
      		return this.each(function(){
      				var $strip = jQuery(this);
      				$strip.addClass("newsticker")
      				var stripHeight = 1;
      				$strip.find("li").each(function(i){
      					stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
      				});
      				var $mask = $strip.wrap("<div class='mask'></div>");
      				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");
      				var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width
      				$strip.height(stripHeight);
      				var totalTravel = stripHeight;
      				var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye
      				function scrollnews(spazio, tempo){
      				$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
      				}
      				scrollnews(totalTravel, defTiming);
      				$strip.hover(function(){
      				jQuery(this).stop();
      				},
      				function(){
      				var offset = jQuery(this).offset();
      				var residualSpace = offset.top + stripHeight;
      				var residualTime = residualSpace/settings.travelocity;
      				scrollnews(residualSpace, residualTime);
      				});
      		});
      };

      $(function(){
          $("ul#ticker01").liScroll();
      });
