$(function(){

	var baseUrl = "http://nodalinfotech.com/road/assets";

	$.backstretch([
                  "http://nodalinfotech.com/road/assets/example/parallax/land.jpg",
                  "http://nodalinfotech.com/road/assets/example/parallax/slide01.jpg",
                  "http://nodalinfotech.com/road/assets/example/parallax/slide02.jpg",
                  "http://nodalinfotech.com/road/assets/example/parallax/slide03.jpg",
                
              ], {duration: 4000, fade: 850});

    jQuery(window).scroll(function(){
  
       var a = jQuery(this).scrollTop();
       console.log(a);
       if(a >= 409){
         
       	  jQuery("#header").css("background","#222");
       }
       if(a >= 1275){

           jQuery(".track2").animate({width:"1020px"},10000);

       }


    }); 


$(".regTab").click(function(){

	 $(".regTab").removeClass("tabAct");
	 $(this).addClass("tabAct");
	 var tab = $(this).data("tab");
	 
	 $(".tabs").hide();
	 $(tab).show();
});




});
