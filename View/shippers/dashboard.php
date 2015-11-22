<?php require_once('inc/header.php');?>
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
		 <div class="col-md-9">
           <div class="col-md-12 das-main">

            </div>
		 </div>	
	</div>	
</div>	

<?php require_once('inc/footer.php');?>