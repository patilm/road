<?php require_once('inc/header.php');
$key = md5(microtime().rand());
$_SESSION['key'] = $key;
?>
<section class="register">
        <div class="container">
             <div class="col-md-6 col-md-offset-3 registerBx">
              <h1>Reset password</h1>
	          

                <!--tab 1-->
                   <div class="col-md-12 tabs" id="tab1">
                   	 <form action="<?=BASEURL;?>home/UserPasswordReset" method="post">
                   	 	
                   	 	<div class="col-md-12">
                   	 		<div class="form-group">
								           <input type="hidden" name="uId" value="<?=$user->id;?>">
                            <input type="hidden" name="key" value="<?=$user->key;?>">
                            <input type="hidden" name="autnKey" value="<?=$_SESSION['key'];?>">

								           <input type="password" name="npass" class="form-control" placeholder="Enter new password" required/>
							           </div> 
                   	    </div>
                   	    <div class="col-md-12">
                   	 		<div class="form-group">
								
								             <input type="password" name="cpass" class="form-control" placeholder="Enter confirm password" required/>
							          </div> 
                   	    </div>
                   	    
                   	    <div class="col-md-12">
                   	    	<button class="btn btn-warning" type="submit">Reset Password</button>
                   	    </div>		
                   	 </form>	
                   </div>	
                
             </div>	
        </div>
    </section>
  <?php require_once('inc/footer.php');?> 