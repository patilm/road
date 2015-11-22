<?php require_once('inc/header.php');
$key = md5(microtime().rand());
$_SESSION['key'] = $key;
?>
<section class="register">
        <div class="container">
             <div class="col-md-8 col-md-offset-2 registerBx">
              <h1>Register Here..</h1>
	              <div class="col-md-12">
	              	 <div class="col-md-6">
                        <a href="javascript:;" class="regTab tabAct" data-tab="#tab1">
                            <i class="fa fa-user"></i>
                            <p>Shipping Customer</p>
                        </a>	
	              	 </div>	
	              	 <div class="col-md-6">
	              	 	<a href="javascript:;" class="regTab" data-tab="#tab2">
                            <i class="fa fa-truck"></i>
                            <p>Carrier</p>
                        </a>
	              	 </div>
	              </div>

                <!--tab 1-->
                   <div class="col-md-12 tabs" id="tab1">
                   	 <form action="<?=BASEURL;?>home/customerSignUp" method="post">
                   	 	<div class="col-md-12">
                           <div class="col-md-6" style="padding-left:0px">
                           	  <div class="form-group">
									
									<select class="form-control" name="custType" id="custType">
                                       <option value="Presonal">Personal</option>
                                       <option value="Business">Business</option>
									</select>
								</div>
                           </div>	
                   	 	</div>
                   	 	<div class="col-md-6">
                   	 		<div class="form-group">
								
								<input type="text" name="fname" class="form-control" placeholder="Enter first name" required/>
							</div> 
                   	    </div>
                   	    <div class="col-md-6">
                   	 		<div class="form-group">
								
								<input type="text" name="lname" class="form-control" placeholder="Enter last name" required/>
							</div> 
                   	    </div>
                   	    <div class="col-md-12">
                   	 		<div class="form-group">
								
								<input type="email" name="email" class="form-control" placeholder="Enter email" required/>
							</div> 
                   	    </div>
                   	    <div class="col-md-12">
                   	 		<div class="form-group">
								<input type="hidden" name="key" value="<?=$_SESSION['key'];?>"/>
								<input type="password" name="pass" class="form-control" placeholder="Enter passowrd" required/>
							</div> 
                   	    </div>
                   	    <div class="col-md-12">
                   	    	<button class="btn btn-warning" type="submit">Register</button>
                   	    </div>		
                   	 </form>	
                   </div>	
                <!--tab 2-->
                <div class="col-md-12 tabs" id="tab2">
                   	 <form action="<?=BASEURL;?>home/carrierSignUp" method="post">
                   	 	
                   	 	<div class="col-md-6">
                   	 		<div class="form-group">
								
								<input type="text" name="fname" class="form-control" placeholder="Enter first name" required/>
							</div> 
                   	    </div>
                   	    <div class="col-md-6">
                   	 		<div class="form-group">
								
								<input type="text" name="lname" class="form-control" placeholder="Enter last name" required/>
							</div> 
                   	    </div>
                   	    <div class="col-md-12">
                   	 		<div class="form-group">
								
								<input type="text" name="cname" class="form-control" placeholder="Enter company name" required/>
							</div> 
                   	    </div>
                   	    <div class="col-md-6">
                   	 		<div class="form-group">
								           <input type="hidden" name="key" value="<?=$_SESSION['key'];?>"/>
								          <input type="email" name="email" class="form-control" placeholder="Enter email" required/>
							           </div> 
                   	    </div>
                        <div class="col-md-6">
                        <div class="form-group">
                           
                          <input type="text" name="mob" class="form-control" placeholder="Enter mobile" required/>
                         </div> 
                        </div>
                   	   
                   	    <div class="col-md-12">
                   	    	<button class="btn btn-warning" type="submit">Register</button>
                   	    </div>		
                   	 </form>	
                   </div>
             </div>	
        </div>
    </section>
  <?php require_once('inc/footer.php');?> 