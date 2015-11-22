<?php if ( ! defined('BASEURL')) exit('No direct script access allowed');

class Controller{

	public function __construct(){
       
       $this->control();

	}


	public function control(){
          $url = isset($_GET['url']) ? $_GET['url'] : null;
          
          $url = trim($url,"/"); 
          $url = filter_var($url,FILTER_SANITIZE_URL);
          if(!empty($url)){
            $requestString = explode("/",$url);
          }else{
            $requestString = null;
          }
          
           
             
       
         if(!empty($requestString)){
            
                   
    
            $controllerName = strtolower($requestString[0]);

      
            if(file_exists('./Controller/'.$controllerName.'.php')){
            
                require_once './Controller/'.$controllerName.'.php';

                $controller = new $controllerName;
                if(!isset($requestString[1])){

                    $actionName = "index";
                }else{
                    $actionName = $requestString[1];
                }

                if(method_exists($controller,$actionName)){
                    
                     if(empty($requestString[2])){
                      
                        $controller->$actionName();

                     }else{

                        $data = $requestString[2];
                        $controller->$actionName($data);
                     }
                     
                }else{

                     Redirect::url("home/notFound");
                     exit;
                     
                 }

            }else{

                Redirect::url("home/notFound");
                exit;
                
            }
            
       
         }else{

            $controllerName = DefaultController;
            $actionName = DefaultFuncation;
            require_once './Controller/'.$controllerName.'.php';
            $controller = new $controllerName;
            if(method_exists($controller,$actionName)){
                 
                  $controller->$actionName();
            }else{
                 Redirect::url("home/");
                 exit;
            }
           
         }
         
	}


   	

}