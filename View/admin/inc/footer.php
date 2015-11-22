</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=BASEURL;?>assets/dashboard/bower_components/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=BASEURL;?>assets/dashboard/bower_components/bootstrap/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=BASEURL;?>assets/dashboard/bower_components/metisMenu/metisMenu.min.js"></script>
    <script src="<?=BASEURL;?>assets/dashboard/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
   

   

    <!-- Custom Theme JavaScript -->
    <script src="<?=BASEURL;?>assets/js/toastr.min.js"></script>
    <script src="<?=BASEURL;?>assets/dashboard/js/sb-admin-2.js"></script>
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