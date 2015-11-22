<?php

class home{

    public $app;
   
	public function __construct(){
       
		$this->app = new View;
	} 

	public function index() {
 
      $this->app->views("index");
   
	}

   // sign up template 
	public function register(){
 
       $this->app->views("register");
   
	}

// 404 page not found
	public function notFound(){

		$this->app->views("404");
	}

// sing up shipping custmer
  public function fbLogin(){
   $fb = new Facebook\Facebook([
  'app_id' => '893742270708797',
  'app_secret' => 'ade43eebafeb020f4c83c324724d72f3',
  'default_graph_version' => 'v2.3',
  ]);

$helper = $fb->getRedirectLoginHelper();
echo $_SERVER['REQUEST_URI'];
exit;
try {
  $accessToken = $helper->getAccessToken();

} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;

  // Now you can redirect to another page and use the
  // access tokoen from $_SESSION['facebook_access_token']
}
var_dump($helper);

  }






	public function customerSignUp(){
        if(Input::exists("key") || Input::exists("custType") || Input::exists("fname") || Input::exists("lname") || Input::exists("email") || Input::exists("pass")){
            
            $key = Input::get("key");
            $type = Input::get("custType");
		        $fname = Input::get("fname");
            $lname = Input::get("lname");
            $email = Input::get("email");
            $pass = Input::get("pass");

            if(empty($key) || empty($type) || empty($fname) || empty($lname) || empty($email) || empty($pass)){
                  textMsg("All fields are required","error");
                  Redirect::url("home/register");
                  exit;
            }else{
               
               	if($key == $_SESSION['key']){
                      
                      $check = User::all(['email' =>$email]);

                      if(count($check)>0){

                            textMsg("This email id already exists try again","error");
				                    Redirect::url("home/register");
				                    exit;

                      }else{

                      
               	
				                $user = new User();
				                $user->user_type = $type;
				                $user->first_name = $fname;
				                $user->last_name = $lname;
				                $user->email = $email;
				                $user->password = Pass::hash($pass);
				                $user->status = 1;
				                $user->join_date = time();
				                if($user->save()){

				                   textMsg("You have been ragistered succesfully","success");

				                   Redirect::url("home/register");
				                   exit;

				                }else{
				                   
				                    textMsg("somethis went wrong try again","error");
				                    Redirect::url("home/register");
				                    exit;

				                }

				         }       

                 }else{

                 	    textMsg("Unable to do this action","error");
	                    Redirect::url("home/register");
	                    exit;
                 }
            }

        }else{

        	        textMsg("somethis went wrong try again","error");
                    Redirect::url("home/register");
                    exit;

        }
		
		

		
	}


// carrierSignUp 


	public function carrierSignUp(){
        if(Input::exists("key") || Input::exists("cname") || Input::exists("fname") || Input::exists("lname") || Input::exists("email") || Input::exists("mob")){
            
            $key = Input::get("key");
            $cname = Input::get("cname");
		        $fname = Input::get("fname");
            $lname = Input::get("lname");
            $email = Input::get("email");
            $mob = Input::get("mob");

            if(empty($key) || empty($cname) || empty($fname) || empty($lname) || empty($email) || empty($mob)){
                  textMsg("All fields are required","error");
                  Redirect::url("home/register");
                  exit;
            }else{
               
               	if($key == $_SESSION['key']){
                      
                      $check = Carrier::all(['email' =>$email]);

                      if(count($check)>0){

                          textMsg("This email id already exists try again","error");
				          Redirect::url("home/register");
				          exit;

                      }else{

                      
               	
				                $user = new Carrier();
				                $user->company_name = $cname;
				                $user->first_name = $fname;
				                $user->last_name = $lname;
				                $user->email = $email;
				                $user->mobile = $mob;
				                $user->status = 1;
				                $user->join_date = time();
				                if($user->save()){

				                   textMsg("You have been ragistered succesfully","success");

				                   Redirect::url("home/register");
				                   exit;

				                }else{
				                   
				                    textMsg("somethis went wrong try again","error");
				                    Redirect::url("home/register");
				                    exit;

				                }

				         }       

                 }else{

                 	    textMsg("Unable to do this action","error");
	                    Redirect::url("home/register");
	                    exit;
                 }
            }

        }else{

        	        textMsg("somethis went wrong try again","error");
                    Redirect::url("home/register");
                    exit;

        }
		
		

		
	}


// customer and carrier singin page

 public function signIn(){
 
  $this->app->views("signIn");

 }



// login processs 

 public function customerSingIn(){

 	if(Input::exists("key") || Input::exists("email") || Input::exists("pass")){
    
      $key = Input::get("key");
      $email = Input::get("email");
      $pass = Input::get("pass");

         if($key == $_SESSION['key']){

            if(empty($email) || empty($pass)){

                 textMsg("All fields are require try again","error");
                 Redirect::url("home/signIn");
                 exit;

            }else{
 
                $user = User::all(['email'=>$email]);
                if(count($user)>0){

                   if($user[0]->status == 1){
                    
                       if(Pass::verify($user[0]->password,$pass)){

                           $_SESSION['userId'] = $user[0]->id;
                           $_SESSION['fname'] = $user[0]->first_name;
                           $_SESSION['lname'] = $user[0]->last_name;
                           $_SESSION['userEmail'] = $user[0]->email;

                           textMsg("Login Success.","success");
                           Redirect::url("shippingUser/dashboard");
                           exit;

                       }else{
                       	  textMsg("Password did not match ary again.","error");
                          Redirect::url("home/signIn");
                          exit;
                       }

                   }else{
                     
                      textMsg("Your are suspanded please contact to admin.","error");
                      Redirect::url("home/signIn");
                       exit;

                   }

                }else{
                	textMsg("Email id did not match","error");
                    Redirect::url("home/signIn");
                    exit;
                }
 
            }

         }else{

         	textMsg("unauthorise do loing","error");
            Redirect::url("home/index");
            exit;
         }

 	}else{
      
       textMsg("unauthorise do loing","error");
       Redirect::url("home/index");
       exit;
 	}
 }


 // customer logout 

public function logout(){
	unset($_SESSION['userId']);
	unset($_SESSION['fname']);
        unset($_SESSION['lname']);
	unset($_SESSION['userEmail']);

	textMsg("Logout Success","success");
    Redirect::url("home/index");
    exit;
}



// Forget password

public function shippingUserForgetPass(){
  if(Input::exists("email") || Input::exists("key")){

     $email = Input::get("email");
     $key = Input::get("key");
     if($key == $_SESSION['key']){
     if(empty($email)){
        textMsg("Email id required to reset password.","error");
        Redirect::url("home/index");
        exit;
     }else{

        $user = User::all(['email'=>$email])[0];
        if(count($user)>0){
           
          // forget password mail
           $code = md5(time()."aas^5s&dw#2".rand());
           $code = str_replace(array('/','\/'),'',Pass::hash($code));
           $to = $user->email;
           $subject = "Forget password Request Mail - roadhunk.com";

           $message="Hello ,". ucwords($user->first_name)  ."&nbsp $user->last_name<br><br>";
           $message.="Thank you for using the forgot password functionality <br>";
           
           $message.="<br><br>Click on this link to Reset password:";
           $message.="http://nodalinfotech.com/road/home/resetShippingUserPass/$code";
           $from = "support@nodalinfotech.com";

           $header = "From: Road Hunk Support Team <support@nodalinfotech.com>\r\n"; 
           $header.= "MIME-Version: 1.0\r\n"; 
           $header.= "Content-Type: text/html; charset=utf-8\r\n"; 
           $header.= "X-Priority: 1\r\n";
           $check= mail($to,$subject,$message,$header);
         
           $user->key = $code;
           if($user->save()){ 

              textMsg("Password rest mail has been sent on you emal id","success");
              Redirect::url("home/index");
              exit;
          }

        }else{
           textMsg("Enter register email id try again","error");
           Redirect::url("home/index");
           exit;
        }
     }
   
   }else{
     textMsg("Invalid Action","error");
     Redirect::url("home/index");
     exit;
   }

  }else{
     textMsg("Invalid Action","error");
     Redirect::url("home/index");
     exit;
  }

}

// reset forget password


public function resetShippingUserPass($key){
   
   if(empty($key)){

     textMsg("Invalid Action","error");
     Redirect::url("home/index");
     exit;
     
   }else{
     
     
     $user = User::all(['key'=>$key])[0];
     
     if(count($user)>0){
          
          $this->app->views("resetShippingUserPass",array('user'=>$user));

     }else{
       textMsg("Invalid key or key has been expired.","error");
       Redirect::url("home/index");
       exit;
     }

   }
}

// shipping user password update


public function UserPasswordReset(){

     if(Input::exists("key") || Input::exists("uId") || Input::exists("autnKey") || Input::exists("npass") || Input::exists("cpass")){
        
         $key = Input::get("key");
         $uId = Input::get("uId");
         $authKey = Input::get("autnKey");
         $npass = Input::get("npass");
         $cpass = Input::get("cpass");
         if(empty($key) || empty($uId) || empty($authKey) || empty($npass) || empty($cpass)){
            textMsg("unable to do this action.","error");
            Redirect::url("home/index");
            exit;
         }else{

            if($_SESSION['key'] == $authKey){
 
                if($npass == $cpass){

                    $user = User::all(['id'=> $uId])[0];
                   
                    if(count($user)>0){

                       if($key == $user->key){
                         $code = md5(time()."aas^5s&dw#2".rand());
                         $code = str_replace(array('/','\/'),'',Pass::hash($code));
                         $user->password = Pass::hash($npass);
                         $user->key = $code;
                         if($user->save()){
                            textMsg("Password has been reset successfully.","success");
                            Redirect::url("home/index");
                            exit;
                         }
                       }else{
                         textMsg("Invalid key to reset password.","error");
                         Redirect::url("home/index");
                         exit;
                       }
                    }else{

                      textMsg("User did not find.","error");
                      Redirect::url("home/index");
                      exit; 
                    }   

                }else{

                  textMsg("Confirm password did not match.","error");
                  Redirect::url("home/index");
                  exit;

                }
                 
            }else{
              textMsg("You are roobot.","error");
              Redirect::url("home/index");
              exit;
            }

         }
     }
}

}// main function

// if(count($user)>0){
 
//             if(Pass::Verify($pass,$user[0]->password)){
//             	echo "hello";
//             }
// 		}