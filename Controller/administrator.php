<?php

class administrator{

    public $app;
   
	public function __construct(){
       
		$this->app = new View;
	} 

  public function index(){
     if(isset($_SESSION['adminId'])){

       Redirect::url("administrator/dashboard");
	   exit;

     }else{
       $this->app->views("admin/index");
     }  
  }


// admin dashboard

public function dashboard(){
	isAdminLogin();
	$users = count(User::all());
	
	$carriers = count(Carrier::all()); 
	$this->app->views("admin/dashboard",array('users' =>$users , 'carriers' => $carriers));
}  

 // admin login

  public function login(){

       if(Input::exists("email") || Input::exists("password") || Input::exists("key")){
              
             $key = Input::get("key");
            if(!empty($key) && ($key == $_SESSION['key'])){
                    
                     $email = Input::get("email");
                     $pass = Input::get("password");
                     if(empty($email) || empty($pass)){
                        
                         textMsg("Unable to login as administrator","error");
	                     Redirect::url("home");
	                     exit;

                     }else{
                          
                        
                          $admin = Admin::all(['email' => $email]);
                          
                          if(count($admin)>0){
                              if(Pass::verify($admin[0]->password,$pass)){
                                  $_SESSION['adminId'] = $admin[0]->id;
                                  $_SESSION['adminEmail'] = $admin[0]->email;
                                  textMsg("You have logged in","success");
	                              Redirect::url("administrator/dashboard");
	                              exit;
                              }else{
                              	  textMsg("Password id did not match","error");
	                              Redirect::url("administrator");
	                              exit;
                              }
                          }else{
                          	  textMsg("Email id did not match","error");
	                          Redirect::url("administrator");
	                          exit;
                          }
                        
                     }

            }else{
            	textMsg("Unable to login as administrator","error");
	            Redirect::url("home");
	            exit;
            }
         
       }else{

         textMsg("somethis went wrong try again","error");
	     Redirect::url("home");
	     exit;
       }
  }

// logout

  public function logout(){

	unset($_SESSION['adminId']);

	unset($_SESSION['adminEmail']);

	textMsg("Logout Success","success");
    Redirect::url("administrator");
    exit;
 }



 // all-shpping-customer

 public function allShippingCustomer(){
   isAdminLogin();
   $user = User::all();
   $this->app->views("admin/allShippingCustomer",array('users' => $user));

 }

 //deleteCustomer

 public function deleteCustomer(){
  
   isAdminLogin();
 
   if(Input::exists("id")){
    
      $id = Input::get("id");
      if(empty($id)){
         echo json_encode(['result'=>"Id required to do this action."]);
      }else{
         $user = User::all(['id' => $id]);

         if(count($user)>0){
             if($user[0]->delete()){
                 echo json_encode(['result'=>1]);
             }
         }else{
            echo json_encode(['result'=>"Invalid id to delete this item."]);
         }

      }

   }else{
     echo json_encode(['result'=>"Invalid action."]);
   }

 }


//activeCustomer

 public function activeCustomer(){

     isAdminLogin();
 
   if(Input::exists("id")){
    
      $id = Input::get("id");
      if(empty($id)){
         echo json_encode(['result'=>"Id required to do this action."]);
      }else{
         $user = User::all(['id' => $id]);

         if(count($user)>0){
             if($user[0]->status == 1){
                 echo json_encode(['result'=>"Aleready in active status."]);
             }else{
                 
                    $user[0]->status = 1;

                  if($user[0]->save()){
                      echo json_encode(['result'=>1,'id'=>$user[0]->id]);
                  }else{
                      echo json_encode(['result'=>"Something went wrong try again."]);
                  }
             }
         }else{
            echo json_encode(['result'=>"Invalid id to  this active."]);
         }

      }

   }else{
     echo json_encode(['result'=>"Invalid action."]);
   }
 }


// suspandCustomer

 public function suspandCustomer(){

     isAdminLogin();
 
   if(Input::exists("id")){
    
      $id = Input::get("id");
      if(empty($id)){
         echo json_encode(['result'=>"Id required to do this action."]);
      }else{
         $user = User::all(['id' => $id]);

         if(count($user)>0){
             if($user[0]->status == 2){
                 echo json_encode(['result'=>"Aleready in suspend status."]);
             }else{
                 
                    $user[0]->status = 2;

                  if($user[0]->save()){
                      echo json_encode(['result'=>1,'id'=>$user[0]->id]);
                  }else{
                      echo json_encode(['result'=>"Something went wrong try again."]);
                  }
             }
         }else{
            echo json_encode(['result'=>"Invalid id to  this active."]);
         }

      }

   }else{
     echo json_encode(['result'=>"Invalid action."]);
   }
 }


// carrier customer modual

 public function allCarrierCustomer(){
   isAdminLogin();
   $user = Carrier::all();
   $this->app->views("admin/allCarrierCustomer",array("users"=>$user));

 }

// delete carrier customer

 //deleteCustomer

 public function deleteCarrier(){
  
   isAdminLogin();
 
   if(Input::exists("id")){
    
      $id = Input::get("id");
      if(empty($id)){
         echo json_encode(['result'=>"Id required to do this action."]);
      }else{
         $user = Carrier::all(['id' => $id]);

         if(count($user)>0){
             if($user[0]->delete()){
                 echo json_encode(['result'=>1]);
             }
         }else{
            echo json_encode(['result'=>"Invalid id to delete this item."]);
         }

      }

   }else{
     echo json_encode(['result'=>"Invalid action."]);
   }

 }

}	// main