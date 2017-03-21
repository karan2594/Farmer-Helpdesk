
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
           html = '<center><i class="icon-'+weather.code+' weather-icon"></i> '+ '&nbsp<span class="temperature">'+weather.temp+'&deg;'+weather.units.temp+'</span><p class="condition">'+weather.currently+'</p></center>';


           $("#weather").html(html);
         },
         error: function(error) {
           $("#weather").html('<p>'+error+'</p>');
         }
       });
     };
