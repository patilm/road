<div id="das-copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center das-copy">
                    <p class="das-copy">&copy; Copyright 2015 - Road hunk</p>
                </div>                
            </div>
        </div>
    </div>
 


        <!-- libraries -->
        <script src="<?=BASEURL;?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="<?=BASEURL;?>assets/js/vendor/jquery-1.11.1.min.js"></script>
        <script src="<?=BASEURL;?>assets/js/vendor/bootstrap.min.js"></script>
        <script src="<?=BASEURL;?>assets/js/app2.js"></script>
        <!-- custom scripts -->
        <script src="<?=BASEURL;?>assets/js/toastr.min.js"></script>
    
        <?php if(isset($_SESSION['msg'])){ ?>
        <script>
        
          $(function(){

             

             toastr.options = {
              "closeButton": true,
              "debug": false,
              "newestOnTop": false,
              "progressBar": true,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "5000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
            toastr["<?=$_SESSION['title'];?>"]("<?=$_SESSION['msg'];?>","<?=$_SESSION['title'];?>");
            

          });
          <?php 
             
         }
             unset($_SESSION['msg']);
             unset($_SESSION['title']);
         ?>
        </script>
    </body>
</html>