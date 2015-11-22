<?php
  session_start();
 
  require_once("Config/orm.php");
  require_once("Config/helper.php");
  require_once("Config/PHPassLib.php");
  require_once("Config/Pass.php");

 require_once("init.php");
  
 // Define Base url for this app

// define("BASEURL","http://nodalinfotech.com/road/");
 define("BASEURL","http://localhost/road/");
  
/*
   Set  default control 

   Set  default funcation

*/
define('ENV','DEV');


define("DefaultController","home");
define("DefaultFuncation","index");

global $make;
 $obj = new Controller(); 
 


