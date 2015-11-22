     
    <footer id="footer" class="darkgrey_section">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 widget widget_flickr to_animate">
                    <h3 class="widget-title">About Us</h3>
                    <ul id="flickr"></ul>
                </div>

                
                <div class="col-md-3 col-sm-6 widget widget_recent_entries to_animate">
                    <h3 class="widget-title">useful links</h3>                    
                    <ul>
                        <li>
                            <a href="index.html#">Lorem Ipsum is simply</a>
                        </li>
                        <li>
                            <a href="index.html#">Lorem Ipsum is simply</a>
                        </li>
                        <li>
                            <a href="index.html#">Lorem Ipsum is simply</a>
                        </li> 
                        <li>
                            <a href="index.html#">Lorem Ipsum is simply</a>
                        </li> 
                        <li>
                            <a href="index.html#">Lorem Ipsum is simply</a>
                        </li>

                    </ul>
                </div>                          

                <div class="col-md-3 col-sm-6 widget widget_recent_entries to_animate">
                    <h3>contact info</h3>
                    <p class="contact_info">Company Name.<br> 
                      City, Street str., ZIP<br> 
                      <span><strong>Phone:</strong> </span>(123) 456-7890<br>
                      <span><strong>Email:</strong> </span>info@company.com<br>                       
                      We provide freight services quickly and qualitatively over 10 years.
                    </p>                    
                </div>   

                <div class="col-md-3 col-sm-6 to_animate">
                    <div class="widget widget_archive">
                        <h3 class="widget-title">recent post</h3>
                        <ul>
                            <li>
                                <a href="index.html#">Lorem ipsum dolor sit</a>
                            </li>
                            <li>
                                <a href="index.html#">Lorem ipsum dolor sit</a>
                            </li>
                            <li>
                                <a href="index.html#">Lorem ipsum dolor sit</a>
                            </li> 
                             <li>
                                <a href="index.html#">Lorem ipsum dolor sit</a>
                            </li> 
                            <li>
                                <a href="index.html#">Lorem ipsum dolor sit</a>
                            </li>                                                    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <section id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>&copy; Copyright 2015 - Road hunk</p>
                </div>                
            </div>
        </div>
    </section>
 

</div><!-- eof #box_wrapper -->

<div class="preloader">
    <div class="preloader_image"></div>
</div>


        <!-- libraries -->
        <script src="<?=BASEURL;?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="<?=BASEURL;?>assets/js/vendor/jquery-1.11.1.min.js"></script>
        <script src="<?=BASEURL;?>assets/js/vendor/bootstrap.min.js"></script>
        <script src="<?=BASEURL;?>assets/js/vendor/jquery.appear.js"></script>

        <!-- superfish menu  -->
        <script src="<?=BASEURL;?>assets/js/vendor/jquery.hoverIntent.js"></script>
        <script src="<?=BASEURL;?>assets/js/vendor/superfish.js"></script>
        
        <!-- page scrolling -->
        <script src="<?=BASEURL;?>assets/js/vendor/jquery.easing.1.3.js"></script>
        <script src='<?=BASEURL;?>assets/js/vendor/jquery.nicescroll.min.js'></script>
        <script src="<?=BASEURL;?>assets/js/vendor/jquery.ui.totop.js"></script>
        <script src="<?=BASEURL;?>assets/js/vendor/jquery.localscroll-min.js"></script>
        <script src="<?=BASEURL;?>assets/js/vendor/jquery.scrollTo-min.js"></script>
        
        <script src='<?=BASEURL;?>assets/js/vendor/jquery.countTo.js'></script><!-- digits counting -->
        
        <!-- sliders, filters, carousels -->
        <script src="<?=BASEURL;?>assets/js/vendor/jquery.isotope.min.js"></script>
        
        <script src="<?=BASEURL;?>assets/js/backstretch.js"></script>
        <!-- custom scripts -->
        <script src="<?=BASEURL;?>assets/js/toastr.min.js"></script>
        <script src="<?=BASEURL;?>assets/js/plugins.js"></script>
        <script src="<?=BASEURL;?>assets/js/main.js"></script>
        <script src="<?=BASEURL;?>assets/js/app.js"></script>
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