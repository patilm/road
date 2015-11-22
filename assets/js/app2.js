$(function(){

	$(".show").click(function(){
 
      var show = $(this).attr("data-show");
      var check = $(this).attr("class");
      if(check == "fa show fa-plus"){
         $(this).removeClass("fa-plus");
         $(this).addClass("fa-minus");
      }else{
         $(this).addClass("fa-plus");
         $(this).removeClass("fa-minus");
      }
      $(show).slideToggle();
   });

});// main jquery close