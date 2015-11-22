<?php require_once('inc/header.php');
$key = md5(microtime().rand());
$_SESSION['key'] = $key;
?>
<section class="register">
        <div class="container">
             <div class="col-md-10 col-md-offset-1 registerBx">
            
	              
              
                <!--tab 1-->
                <div class="row">
                   <div class="col-md-12" id="tab1">
                   	 
                         <div class="col-md-6 loginBx"> 
                        <strong>Sign In </strong>
                        <hr/>
                        <div class="col-md-12 sociallogin">
                           <button class="btn singIn fbs"><div><i class="fa fa-facebook"></i> </div><span>Facebook Signin</span></button>
                           <button class="btn singIn gps"><div><i class="fa fa-google-plus"></i></div> <span>Google+ Signin</span></button>
                           <span class="or">OR</span>
                        </div>
                       

                            <div class="col-md-12">

                        <form class="form-horizontal" action="<?=BASEURL;?>home/customerSingIn" method="post">
                        <fieldset>
                         <div class="col-md-12">
                          <div class="form-group">
                             <label for="email">Email</label>
                             <input type="email" name="email" class="form-control" placeholder="Enter email" required/>
                          </div>
                         </div>
                         <div class="col-md-12">
                          <div class="form-group">
                             <label for="pass">Password</label>
                             <input type="hidden" name="key" value="<?=$_SESSION['key'];?>"/>
                             <input type="password" name="pass" class="form-control" placeholder="Enter Password" required/>
                          </div>
                        </div>
                          <div class="spacing"><a href="#" data-toggle="modal" data-target="#userForget"><small> Forgot Password?</small></a><br/></div>
                          <button id="singlebutton" name="singlebutton" class="btn btn-info btn-sm pull-right">Sign In</button>


                        </fieldset>
                        </form>
                        </div>
                         </div><!--/col-md-6-->
                        <div class="col-md-6">
                         <div class="signhelp">
                          <h4>Not a member? <a href="<?=BASEURL;?>/home/register">Create an Account</a></h4><br/>
                           It's free, easy and only takes 20 seconds.
                         </div>
                         <div class="signhelpfoooter">
                          <p>
                            <b>Your privacy is important to us.</b><br>
                            We do not rent or sell your personal information to third parties without your explicit consent.

                            Learn more by reading the <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RoadHunk Privacy Policy.</a></p>
                         </div>
                        </div>  
             
                            
                    
                  
                 </div>
               </div>
                <!--tab 2-->
                <div class="clear"></div>
               
             </div>	
        </div>
    </section>
    <div class="modal fade" id="userForget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Forget Password</h4>
      </div>
      <div class="modal-body">
           <form class="form-horizontal" action="<?=BASEURL;?>home/shippingUserForgetPass" method="post">
                        <fieldset>
                         <div class="col-md-12">
                          <div class="form-group">
                             <label for="email">Registered Email</label>
                             <input type="hidden" name="key" value="<?=$_SESSION['key'];?>"/>
                             <input type="email" name="email" class="form-control" placeholder="Enter email" required/>
                          </div>
                         </div>
                       
                          <button id="singlebutton" name="singlebutton" class="btn btn-info btn-sm pull-right">Send</button>


                        </fieldset>
                        </form>
      </div>
      
    </div>
  </div>
</div>
  <?php require_once('inc/footer.php');?> 