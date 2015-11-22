$(function() {

    $('#side-menu').metisMenu();
    
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    var baseUrl = "http://nodalinfotech.com/road/";
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }


   $(".customerTbl").dataTable();

   $("table").on("click",".deleteItme",function(){

        var action = $(this).attr("data-action");
        var id = $(this).attr("data-id");
        var url = baseUrl+"administrator/"+action;
        var check = confirm("do you want to delete this item, make sure");
        if(check){
         
            $.post(url,{'id':id},function(o){
                   
                    if(o.result === 1){
                        $(".row"+id).remove();
                         toastr['success']("success","User has been deleted");
                    }else{
                         toastr['error']("error",o.result);
                    } 

            },"json");

         }   
  });



// status update shpping suctomer


$(".actionBx").on("click","#activePerson",function(){

    var id = $(this).attr("data-id");
    var action = $(this).attr("data-action");
    var url = baseUrl+"administrator/"+action;

    $.post(url,{'id':id},function(o){

       if(o.result === 1){
            console.log(o.result);
               $(".statusAc"+o.id).attr("id","suspendPerson");
               $(".statusAc"+o.id).attr("data-action","suspandCustomer");
               $(".statusAc"+o.id).text("Suspend");
               $(".statusBg"+o.id).html("<span class='btn btn-success'>Active</span>")
               toastr['success']("success","Status has been updated successfully.");
        }else{
                toastr['error']("error",o.result);
        }
        
    },"json");

});


$(".actionBx").on("click","#suspendPerson",function(){

    var id = $(this).attr("data-id");
    var action = $(this).attr("data-action");
    var url = baseUrl+"administrator/"+action;

    $.post(url,{'id':id},function(o){

       if(o.result === 1){
            console.log(o.result);
               $(".statusAc"+o.id).attr("id","activePerson");
               $(".statusAc"+o.id).attr("data-action","activeCustomer");
               $(".statusAc"+o.id).text("Active");
               $(".statusBg"+o.id).html("<span class='btn btn-warning'>Suspend</span>")
               toastr['success']("success","Status has been updated successfully.");
        }else{
                toastr['error']("error",o.result);
        }
        
    },"json");

});





});
