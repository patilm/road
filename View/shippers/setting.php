<?php require_once('inc/header.php');
$key = md5(microtime().rand());
$_SESSION['key'] = $key;
?>
<div class="container das-cont">
	<div class="row">
		 <div class="col-md-3">
		 	<div class="col-md-12  das-sidebar">
               <ul>
               	  <li> 
               	  	 <a href=""><i class="fa fa-tachometer das-icon"></i> Dashboard</a>
                  </li>
                  <li> 
               	  	 <a href=""><i class="fa fa-envelope-o das-icon"></i> Inbox</a>
                  </li>
                  <li> 
               	  	 <a href=""><i class="fa fa-truck das-icon"></i> My Deliveries</a>
                  </li>
                  <li> 
               	  	 <a href="<?=BASEURL;?>shippingUser/setting"><i class="fa fa-gear das-icon"></i> Setting</a>
                  </li>
                  <li> 
               	  	 <a href="<?=BASEURL;?>home/logout"><i class="fa fa-sign-in das-icon"></i> Logout</a>
                  </li>
               </ul>
            </div>
		 </div>	
		 <div class="col-md-9  padding-hide">
            <div class="col-md-12 das-main">
               <!-- User profile -->
                 <div class="col-md-12  dashboard-form padding-hide">
                  <p class="title"> Update Profile <i class="fa show fa-plus" data-show=".user-profile"></i></p>
                  <div class="user-profile">
                    <form action="<?=BASEURL;?>shippingUser/updateProfile" method="post">
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
                        
                        <input type="text" name="fname" class="form-control" placeholder="Enter first name" value="<?=$data->first_name;?>" required/>
                     </div> 
                         </div>
                         <div class="col-md-6">
                           <div class="form-group">
                        
                        <input type="text" name="lname" class="form-control" placeholder="Enter last name" value="<?=$data->last_name;?>" required/>
                     </div> 
                         </div>
                          <div class="col-md-6">
                             <div class="form-group">
                                <input type="number" name="mobile" class="form-control" placeholder="Enter mobile" value="<?=$data->mobile;?>" required/>
                             </div> 
                          </div>
                          <div class="col-md-6">
                             <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter email" value="<?=$data->email;?>" readonly/>
                             </div> 
                          </div>
                         <div class="col-md-12">
                           <div class="form-group">
                        <input type="hidden" name="key" value="<?=$_SESSION['key'];?>"/>
                        
                     </div> 
                         </div>
                         <div class="col-md-12">
                           <button class="btn btn-warning" type="submit">Update Profile</button>
                         </div>     
                      </form> 
                   </div>
                   </div>  
                  <!-- change password-->
                  <div class="col-md-12  dashboard-form padding-hide">
                  <p class="title"> Update Password <i class="fa show fa-minus" data-show=".change-password"></i></p>
                   <div class="change-password hide-box">
                    <form action="<?=BASEURL;?>shippingUser/changePassword" method="post">
                       
                        <div class="col-md-12">
                           <div class="form-group">
                        
                            <input type="text" name="opass" class="form-control" placeholder="Enter old password" required/>
                           </div> 
                         </div>
                         <div class="col-md-12">
                           <div class="form-group">
                        
                             <input type="text" name="npass" class="form-control" placeholder="Enter new password" required/>
                           </div> 
                         </div>
                          <div class="col-md-12">
                             <div class="form-group">
                                <input type="number" name="cpass" class="form-control" placeholder="Enter confirm password" required/>
                             </div> 
                          </div>
                          
                         <div class="col-md-12">
                           <div class="form-group">
                              <input type="hidden" name="key" value="<?=$_SESSION['key'];?>"/>
                        
                          </div> 
                         </div>
                         <div class="col-md-12">
                           <button class="btn btn-warning" type="submit">Change Password</button>
                         </div>     
                      </form> 
                   </div>
                   </div>
            </div>
		 </div>	
	</div>	
</div>	

<?php require_once('inc/footer.php');?>
<script>

</script>