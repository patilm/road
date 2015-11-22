
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome - to road hunk</title>
    <meta charset="utf-8">
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=BASEURL;?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASEURL;?>assets/css/main.css" id="color-switcher-link">
    <link rel="stylesheet" href="<?=BASEURL;?>assets/css/animations.css">
    <link rel="stylesheet" href="<?=BASEURL;?>assets/css/toastr.min.css">
    <link rel="stylesheet" href="<?=BASEURL;?>assets/css/fonts.css">
    

   
</head>
<body>
<header id="header">
        <div class="container">
            <div class="row">
            
                
                <div class="col-sm-12">
                    <a href="<?=BASEURL;?>" class="logo"><img src="<?=BASEURL;?>assets/img/logo.jpg"> <span>Road Hunk</span></a>
                    <span id="toggle_mobile_menu"></span>
                    <nav id="mainmenu_wrapper">
                        <ul id="mainmenu" class="nav sf-menu">
                         <?php if(isset($_SESSION['userId'])){?>
                           <li>
                              <a href="<?=BASEURL;?>shippinguser/dashboard"><img src="<?=BASEURL;?>assets/img/profileIcon.png" class="profileIcon"></i> <?=ucwords($_SESSION['fname']);?> <?=substr($_SESSION['lname'],0,1);?>.</a>
                           </li>
                         <?php } ?>   
                           <?php if(!isset($_SESSION['userId'])){?> 
                            <li class="active">
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                 <a href="<?=BASEURL;?>home/signIn">Sign In</a>                                        
                            </li>
                            <li>
                                <a href="<?=BASEURL;?>home/register">Join</a>                                        
                             </li>
                            <?php } ?> 
                             <li>
                                <a href="javascript:;">Find Deliveries</a>                                        
                             </li>                            
                         
                            <li>
                                <a href="javascript:;">Help</a>
                            </li>

                            <li>
                                <a href="javascript:;" class="newShip">New Shipment</a>                                        
                             </li>

                            
                        </ul>  
                    </nav>
                
                </div>
            </div>
        </div>
    </header>	
