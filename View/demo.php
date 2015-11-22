<?php if ( ! defined('BASEURL')) exit('No direct script access allowed');

class Controller{

	public function __construct(){
       
       $this->control();

	}


	public function control(){
          echo $url = isset($_GET['url']) ? $_GET['url'] : null;
          exit;
         $requestUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         $requestString = substr($requestUrl, strlen(BASEURL));
       
         if(!empty($requestString)){
            $requestString = substr($requestString,0);
            $urlParams = explode('/', $requestString);

            $controllerName = strtolower(ucfirst(array_shift($urlParams)));

            $actionName = strtolower(array_shift($urlParams));
            if(empty($actionName)){
                Redirect::url();
                exit;
            }
            if(file_exists('./Controller/'.$controllerName.'.php')){

                require_once './Controller/'.$controllerName.'.php';
                $controller = new $controllerName;
                if(method_exists($controller,$actionName)){
                    
                     if(empty($urlParams)){
                      
                        $controller->$actionName();

                     }else{

                        $data = $urlParams[0];
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