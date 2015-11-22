<?php

    function textMsg($msg,$title){

      $_SESSION['msg'] = $msg;
    
      $_SESSION['title'] = $title;

   }

   function isCustomerLogin(){
      
       if(isset($_SESSION['userId'])){

          return 1;
          
       }else{

          Redirect::url("home/index");
          exit;
       }
   }

function isAdminLogin(){

     if(isset($_SESSION['adminId'])){

          return 1;
          
       }else{

          Redirect::url("administrator");
          exit;
       }
 }  


