<?php

class shippinguser{

    public $app;
   
	public function __construct(){
       
		$this->app = new View;
	} 

	public function dashboard() {
          
        isCustomerLogin();
        
          $this->app->views("shippers/dashboard");
   
	}

// user setting

	public function setting(){
      isCustomerLogin();
      $data = User::all(['id' =>$_SESSION['userId']]);
   
      $this->app->views("shippers/setting",array('data' => $data[0]));
   
	}

   // update user profile

   public function updateProfile(){

   	  if(Input::exists("custType") || Input::exists("fname") || Input::exists("lname") || Input::exists("mobile")){
          	
        $type = Input::get("custType");
        $fname = Input::get("fname");
        $lname = Input::get("lname");
        $mob = Input::get("mobile");

        if(empty($type) || empty($fname) || empty($lname) || empty($mob)){
           
            textMsg("Required fields are empty.","error");
            Redirect::url("shippingUser/setting");
            exit;
            
   
        }else{

        	$user = User::find($_SESSION['userId']);
            $user->user_type = $type;
            $user->first_name = $fname;
            $user->last_name = $lname;
            $user->mobile = $mob;
            if($user->save()){

                textMsg("Prifile has been updated.","success");
                Redirect::url("shippingUser/setting");
                exit;
            }else{
            	textMsg("Something went wrong try again.","error");
                Redirect::url("shippingUser/setting");
                exit;
            }
        	
        }
 
   	  }else{
   	  	textMsg("Something went wrong try again.","error");
        Redirect::url("shippingUser/dashboard");
        exit;
   	  }
   }


 // change password @changePassword

 public function changePassword(){

   	  if(Input::exists("opass") || Input::exists("npass") || Input::exists("cpass")){
          	
        $opass = Input::get("opass");
        $npass = Input::get("npass");
        $cpass = Input::get("cpass");
       

        if(empty($opass) || empty($npass) || empty($cpass)){
           
            textMsg("Required fields are empty.","error");
            Redirect::url("shippingUser/setting");
            exit;
            
   
        }else{
            
           if($npass == $cpass){

        	$user = User::find($_SESSION['userId']);
            $check = Pass::verify($user->password,$opass);
         
            if($check){

             $user->password = Pass::hash($npass);
            if($user->save()){

                textMsg("password has been updated.","success");
                Redirect::url("shippingUser/setting");
                exit;
            }else{
            	textMsg("Something went wrong try again.","error");
                Redirect::url("shippingUser/setting");
                exit;
            }

          }else{
          	    textMsg("Old password did not match.","error");
                Redirect::url("shippingUser/setting");
                exit;
          }  
        	
        }else{
        	    textMsg("Confirm password did not match.","error");
                Redirect::url("shippingUser/setting");
                exit;
        }

       } 
 
   	  }else{
   	  	textMsg("Something went wrong try again.","error");
        Redirect::url("shippingUser/dashboard");
        exit;
   	  }
   }  

}//main	