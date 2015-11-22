<?php

  spl_autoload_register(function($class){
      
	 require_once 'Class/'.$class.'.php';
      
         
});

//  spl_autoload_register(function($class){
   
// 	require_once 'Model/'.$class.'.php';
// });

?>